<form method="POST" >
<input type="text" name="name" placeholder="Masukkan Nama" required><br>
<button type="submit" name="cek"> Cek Harga </button>
</form>

<?php

function nametag($name, $color = 'red') {
    $name_length = strlen($name);
    $price;
    echo "<p style='color:$color'> " . ucwords($name) . "</p>";
    echo "Harga Nametag = Rp. ";
    if($name_length <= 10){
    echo $price = $name_length * 300 ;
    echo " ,-";
}
    elseif($name_length <= 20){
     echo $price = $name_length * 500;
     echo " ,-";
}                                    
else{
$price = $name_length * 700;
    echo $price;
    echo " ,-";
}
}
if(isset($_POST["cek"])){
	$name=$_POST['name'];
	nametag($name);
}
?>