<form action="" method="get">
    GET - Tên: <input type="text" name="ten_get">
    GET - Tuổi: <input type="text" name="tuoi_get">
    <input type="submit" value="Gửi qua GET">
</form>
<?php
    if (isset($_GET['ten_get']) && isset($_GET['tuoi_get'])) {
        $ten_get = $_GET['ten_get'];
        $tuoi_get = $_GET['tuoi_get'];
        echo "GET - Tên: " . $ten_get . "<br>";
        echo "GET - Tuổi: " . $tuoi_get . "<br>";
    }    
?>