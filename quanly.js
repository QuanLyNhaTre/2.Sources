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
       
    });




    $("#btnxoa").click(function () {
        if (confirm("Bạn có muốn xóa học sinh này không?")) {
            var ma = $('#mhs').val();
            $.ajax({
                type: "POST",
                url: "xoahs.php",
                data: { id: ma },
                dataType: "text",
                success: function (response) {
                    alert(response);
                },
                error: function () {
                    alert("Có lỗi xảy ra, vui lòng thử lại");
                }
            });
        }

    });
    
    $("#btnthem").click(function () {
        var m = $('#mhs').val();
        var ph = $('#maph').val();
        var ten = $('#hoten').val();
        var l =$('#lop').val();
        var ns =$('#ngaysinh').val();
        var cao = $('#chieucao').val();
        var nang =$('#cannang').val();
        var gt = $('#gioitinh').val();
        var nh = $('#nhaphoc').val();
        var gv = $('#giaovien').val();
        $.ajax({
            type: "POST",
            url: "themhs.php",
            data: {
                mahs:m,
                phuhuynh : ph,
                hoten : ten,
                lop:l,
                ngaysinh:ns,
                chieucao:cao,
                cannang:nang,
                gioitinh:gt,
                nhap:nh,
                giaovien:gv
            },    
            dataType: 'text',
            success: function(response){
                alert(response);
            },
            error: function(){
                alert("lỗi")
          }

    });
});

$("#btncapnhat").click(function () {

    var m = $('#mhs').val();
    var ph = $('#maph').val();
    var ten = $('#hoten').val();
    var l =$('#lop').val();
    var ns =$('#ngaysinh').val();
    var cao = $('#chieucao').val();
    var nang =$('#cannang').val();
    var gt = $('#gioitinh').val();
    var nh = $('#nhaphoc').val();
    var gv = $('#giaovien').val();
    $.ajax({
        type: "POST",
        url: "suathongtin.php",
        data: {
            mahs:m,
            phuhuynh : ph,
            hoten : ten,
            lop:l,
            ngaysinh:ns,
            chieucao:cao,
            cannang:nang,
            gioitinh:gt,
            nhap:nh,
            giaovien:gv
        },    
        dataType: 'text',
        success: function(response){
            alert(response);
        },
        error: function(){
            alert("lỗi")
      }

});
});
});