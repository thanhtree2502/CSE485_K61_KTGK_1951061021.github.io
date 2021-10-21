<?php
    // Kiểm tra có đúng là người dùng đã thực hiện nhấn Lưu trên FORM chưa
    if(isset($_POST['btnSave'])){
        // Lấy giá trị trên FORM và lưu vào các BIẾN
        $tenDK      = $_POST['txtHoTen'];
        $GT         = $_POST['txtgioitinh'];
        $Tuoi       = $_POST['txttuoi'];
        $Nhommau    = $_POST['txtnhommau'];
        $Ngaydk     = $_POST['txtndk'];
        $SoDT       = $_POST['txtMobile'];

        // Thực hiện quy trình 3 bước:
        // Bước 01: Kết nối DBS
        require("config/nhm.php");

        // Bước 02: Khai báo truy vấn
        $sql = "INSERT INTO blood_donor (bd_name,bd_sex,bd_age,bd_bgroup,bd_reg_date,bd_phno)
        VALUES ('$tenDK','$GT','$Tuoi','$Nhommau','$Ngaydk','$SoDT')";

        echo $sql."<br>";

        if(mysqli_query($conn,$sql)==TRUE){
            echo "Thêm thành công";
        }else{
            echo "Chưa thêm được ....";
        }
         // Bước 03: Đóng kết nối
         mysqli_close($conn);
    }


?>