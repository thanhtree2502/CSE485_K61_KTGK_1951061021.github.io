<?php
   
    if(isset($_POST['btnSave'])){
        //Lay gia tri tren form luu vao cac bien
        $tenDK      = $_POST['txtHoTen'];
        $GT         = $_POST['txtgioitinh'];
        $Tuoi       = $_POST['txttuoi'];
        $Nhommau    = $_POST['txtnhommau'];
        $Ngaydk     = $_POST['txtndk'];
        $SoDT       = $_POST['txtMobile'];
        //Thuc hien quy trinh 3 buoc:
        // Buoc 1: Ket noi Server
        require("config/nhm.php");
        // Buoc 2: Khai báo truy vấn
        $sql = "INSERT INTO blood_donor(bd_name,bd_sex,bd_age,bd_bgroup,bd_reg_date,bd_phno)
        VALUES ('$tenDK','$GT','$Tuoi','$Nhommau','$Ngaydk','$SoDT')";
            echo $sql."<br>";

        if(mysqli_query($conn,$sql)==TRUE){
            echo "Sửa thành công";
            header('Location: index.php');
        }else{
            echo "Chưa sửa đc...";
        }
    }
        // Buoc 3: Đóng kết nối
        mysqli_close($conn);
?>