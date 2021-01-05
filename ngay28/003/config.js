
$(document).ready(function () {

    $("#load-more").on('click', function (event) {
        event.preventDefault();

        var params = {};
        params.current = $(".album-list").children('.col-md-4').length;

        params.limit = 3;

        console.log(params);

        $.ajax({
            // gửi thông tin đến đâu ?
            url:"http://localhost/appAjax/ajax_sql/ajax.php",
            // dữ liệu gửi đi object js
            data: params,
            // contentType gửi đi
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            // phương thức gửi dữ liệu đi POST/GET/PUT
            type:"POST",
            // Loại dữ liệu bạn đang mong đợi trả lại từ máy chủ. (xml/html/json/jsonp/text/script)
            dataType:"json",
            // mặc định là true bất đồng bộ ( true/false)
            async: true,
            // cache mặc định là true lưu cache vào trình duyệt (true/false)
            cache : false,
            // trước khi gửi dữ liệu đi thì làm gì
            beforeSend:function () {
                alert("Trước khi gửi request bằng ajax");
            },
            // kết quả trả về khi thành công
            success: function (data) {
                alert("ajax trả về thành công");
                console.log(data);
                $(".album-list").append(data.html);
            },
            // nếu có lỗi xảy ra
            error: function (xhr) {
                alert("Lỗi ajax");
            },
            // hoàn tất quá trình ajax thì làm gì ?
            complete: function (xhr, status) {
                alert("ajax hoàn tất");
            }
        }); // end method ajax

    }); // end loadmore onclick
}); // end document ready