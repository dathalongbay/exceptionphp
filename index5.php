<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

/**
 * Error là những lỗi xảy ra phá vỡ luồng chạy bình thường của chương trình
 * và không thể nắm bắt để xử lý ví dụ như lỗi sai cú pháp thiếu } khi sử dụng lệnh if
 * sẽ cho ra thông báo lỗi
    FATAL ERROR syntax error, unexpected ')' on line number 3
 * ngoài ra còn nhiều kiểu lỗi khác như Warning , Notice ...
 * ví dụ như khi gặp FATAL ERROR chương trình sẽ ngừng luôn
 * còn NOTICE và Warning thì vẫn tiếp tục chạy
 *
 * Exception là ngoại lệ và cũng là những error ngoài ý muốn nhưng
 * cho phép chương trình nắm bắt các ngoại lệ ngoài ý muốn đó xảy ra trong
 * chương trình
 * Exception Cho phép thay đổi hướng xử lý ngoại lệ
 * thay vì in ra thông báo lỗi cụ thể
 * bạn có thể thay thông báo lỗi đó bằng 1 thông báo lỗi thân thiện với
 * người dùng hơn hay chuyển sang kết nối CSDL dự phòng
 * hoặc chuyển hướng đến trang 404 ...
 * ví dụ như thay vì hiện ra lỗi không kết nối được CSDL
 * ta chỉ catch exception đó và hiển thị thông báo là chương trình đang có lỗi
 * chứ không hiển thị ra lỗi cụ thể là gì 
 */

include_once "database.php";

try {
    $db = new Database();

    $conn = $db->connection;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

}catch (Exception $e) {

    echo "<br>" . __FILE__;
    echo "<pre>";
    print_r($e);
    echo "</pre>";

    echo 'Message: ' .$e->getMessage();
}

echo "<br>chạy tiếp ...";