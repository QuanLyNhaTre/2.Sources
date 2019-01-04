
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "dangnhap.php",
        data: "",
        dataType: "text",
        success: function (response) {
            
        }
    });
    $('#btndn').click(function() {
        var user = $('#username').val();
        var pass = $('#password').val();
        $.ajax({
            type: "POST",
            url: "kiemtra.php",
            data: {
                tk: user,
                mk: pass
            },
            dataType: "text",
            success: function (response) {
                console.log(response)
                //alert(response);
                if (response == 'false') {
                    alert('Tài khoản hoặc mật khẩu không chính xác');
                }
                else {
                    if(response=='giaovien'){
                        window.location.href="admin.php";
                    }
                    else if(response=='phuhuynh'){
                        window.location.href="phuhuynh.php";
                    }
                }

            },
            error: function(){
                alert("co loi");
            }
            
        });
        //alert('hh');
    });
    // $('#password').on('keypress', function (e) {
    //     if (e.which === 13) {
    //         $('#login').trigger('click');
    //     }
    // });
})
