<?php 
    $conn = mysqli_connect("localhost","ninh","123456","ninh");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo 'successfully';
    }
    //xoa du lieu
    if(isset($_POST['manhanvien'])){
        $manhanvien = $_POST['manhanvien'];
        $sql1 = "DELETE FROM nhanvien WHERE manhanvien='$manhanvien'";
        mysqli_query($conn, $sql1);
        $sql2 = "DELETE FROM luong WHERE manhanvien='$manhanvien'";
        mysqli_query($conn, $sql2);
        mysqli_close($conn);
    }
?>