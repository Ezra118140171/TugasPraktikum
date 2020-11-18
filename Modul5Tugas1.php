<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        $nama = [
            "lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"
        ];
        echo "Data acak: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
        echo "<br>";
        sort($nama);
        echo "Data terurut: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
    ?>    
</body>
</html>