<?php
    $bd_id=$_GET["bd_id"];
    // Buoc 1: Ket noi Server
    require("config/nhm.php");
    // Buoc 2: Khai bao truy van
    $sql= "DELETE FROM blood_donor WHERE bd_id=$bd_id";

    if(mysqli_query($conn,$sql)==TRUE){
        echo "thanhcong";
        header('Location: index.php');
    }else{
        echo "Xóa thất bại!";
    }
?>