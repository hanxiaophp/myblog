<?php
namespace think;
/**
 * Created by PhpStorm.
 * User: hanxiao
 * Date: 2017/3/17
 * Time: 14:46
 */
class Func
{
    public static function filterData()
    {
        if (!empty($_GET)) {
            $_GET = array_map('strip_tags', $_GET);
            $_GET = array_map('Htmlspecialchars_For_php54', $_GET);
            $tempget = array();
            foreach ($_GET as $k_g => $v_g) {
                $t_k_g = strip_tags($k_g);
                $t_k_g = Htmlspecialchars_For_php54($t_k_g);
                if (trim($t_k_g) == "" || trim($k_g) !== trim($t_k_g)) {
                    unset($_GET[$k_g]);
                } else {
                    $tempget[$k_g] = $v_g;
                }
            }
            if (count($tempget) > 0) {
                $_GET = $tempget;
            }
        }
        if (!empty($_POST)) {
            $_POST = array_map('strip_tags', $_POST);
            $_POST = array_map('Htmlspecialchars_For_php54', $_POST);
            $temppost = array();
            foreach ($_POST as $k_p => $v_p) {
                $t_k_p = strip_tags($k_p);
                $t_k_p = Htmlspecialchars_For_php54($t_k_p);
                if (trim($t_k_p) == "" || trim($k_p) !== trim($t_k_p)) {
                    unset($_POST[$k_p]);
                } else {
                    $tempget[$k_p] = $v_p;
                }
            }
            if (count($temppost) > 0) {
                $_POST = $temppost;
            }
        }
    }
    /**
     * 检测/过滤字符串XSS注入
     * @param string $val 输入字符串（数字类型请用intval或者floatval转换处理）
     * @param boolean $onlycheck 是否仅检测（true:仅检测，返回结果为boolean; 默认:返回过滤字符串）
     * @param string $allowable_html_tags 允许的html标签（'none':清除全部html标签; '<p><a>':保留p和a标签，同strip_tags第二个参数; 默认:不做处理）
     * @param boolean $htmlspecialchars 是否使用htmlspecialchars函数处理返回结果（ture:使用;默认:不使用）
     * @return mix
     */
    public function removeXSS($val, $onlycheck = false, $allowable_html_tags = '', $htmlspecialchars = false)
    {
        $isdangerous = false;

        //如果设置了过滤全部html标签，则过滤全部标签
        if ($allowable_html_tags == 'none') {
            $val = strip_tags($val);
        } elseif ($allowable_html_tags != '') {
            $val = strip_tags($val, $allowable_html_tags);
        }//如果设置了可使用的html标签，则保留这部分标签


        $val = preg_replace('/([\x00-\x08,\x0b-\x0c,\x0e-\x19])/', '', $val);
        $search = 'abcdefghijklmnopqrstuvwxyz';
        $search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $search .= '1234567890!@#$%^&*()';
        $search .= '~`";:?+/={}[]-_|\'\\';
        for ($i = 0; $i < strlen($search); $i++) {
            $val = preg_replace('/(&#[xX]0{0,8}' . dechex(ord($search[$i])) . ';?)/i', $search[$i], $val);
            $val = preg_replace('/(&#0{0,8}' . ord($search[$i]) . ';?)/', $search[$i], $val);
        }
        $ra1 = array('javascript', 'vbscript', 'expression', 'applet', 'meta', '<xml', '&lt;xml', '&#60;xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');
        $ra2 = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
        $ra = array_merge($ra1, $ra2);
        $found = true;
        while ($found == true) {
            $val_before = $val;
            for ($i = 0; $i < sizeof($ra); $i++) {
                $pattern = '/';
                for ($j = 0; $j < strlen($ra[$i]); $j++) {
                    if ($j > 0) {
                        $pattern .= '(';
                        $pattern .= '(&#[xX]0{0,8}([9ab]);)';
                        $pattern .= '|';
                        $pattern .= '|(&#0{0,8}([9|10|13]);)';
                        $pattern .= ')*';
                    }
                    $pattern .= $ra[$i][$j];
                }
                $pattern .= '/i';
                $replacement = substr($ra[$i], 0, 2) . '<x>' . substr($ra[$i], 2);
                $val = preg_replace($pattern, $replacement, $val);
                if ($val_before == $val) {
                    $found = false;
                } else {
                    $isdangerous = true;
                }
            }
        }

        if ($onlycheck === false) {
            if ($htmlspecialchars === false) {
                return $val;
            } else {
                return Htmlspecialchars_For_php54($val);
            }
        } else {
            return $isdangerous;
        }
    }
}