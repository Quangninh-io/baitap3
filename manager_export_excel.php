<?php
    $conn = mysqli_connect("localhost","ninh","123456","ninh");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT nhanvien.manhanvien, nhanvien.tennhanvien, nhanvien.gioitinh, nhanvien.ngaysinh, nhanvien.chucvu, nhanvien.quequan, luong.tienluong, luong.tienthuong FROM nhanvien,luong WHERE nhanvien.manhanvien=luong.manhanvien ORDER BY nhanvien.manhanvien DESC";
    $result = mysqli_query($conn, $sql);
    

    $output = fopen("export.csv","w");
    fputs($output,chr(0xEF).chr(0xBB).chr(0xBF));
    $fields = array('manhanvien', 'tennhanvien', 'gioitinh', 'ngaysinh', 'chucvu','quequan','tienluong','tienthuong'); 
    fputcsv($output,$fields);
    while($row = mysqli_fetch_assoc($result)){
        fputcsv($output,$row);
    }

    header('Content-Encoding: UTF-8');
    header('Content-Type: text/csv;charset=UTF-8'); 
    header('Content-Disposition: attachment; filename="export.csv";'); 
    
    fclose($output);
?>