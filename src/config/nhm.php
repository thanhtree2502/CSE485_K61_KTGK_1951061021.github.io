
<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','nhm');

    // Kết nối SERVER
    $conn = mysqli_connect(HOST,USER,PASS,DB);
    if(!$conn){
        die("Kết nối không thành công");
    }




?>