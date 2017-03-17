/**
 * Created by hanxiao on 2017/3/3.
 */
$(function(){
    var $name = $('#Name');
    var $password = $('#Password');
    var $ename = $('.Ename');
    var $epass = $('.Epass');
    $('#sub').on('click', function(){
        var result = true;
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
            console.log('aaa');
            $.post('/admin/userLogin', {username:$name.val(),password:$password.val()}, function(data){

            });
            return false;
        }
    });
    $('input').on('focus', function(){
        $('.error').hide();
    });
});