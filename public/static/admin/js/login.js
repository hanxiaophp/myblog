/**
 * Created by hanxiao on 2017/3/3.
 */
$(function(){
    var $name = $('#Name');
    var $password = $('#Password');
    var $ename = $('.Ename');
    var $epass = $('.Epass');
    var result = true;
    $('#sub').on('click', function(){
        if ($.trim($name.val()) === '') {
            $ename.show();
            result = false;
        }
        if ($.trim($password.val()) === '') {
            $epass.show();
            result = false;
        }
        if (result === false) {
            return false;
        } else {
            $.post('/admin/login', {username:$name.val(),password:$password.val()}, function(data){
                
            });
        }
    });
    $('input').on('focus', function(){
        $('.error').hide();
    });
});