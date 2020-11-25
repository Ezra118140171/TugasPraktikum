<?php

    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa") 
               or die("gagal");

    $result = mysqli_query($koneksi, "select * from informatika");

    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
        echo "<br>";
    }
?>