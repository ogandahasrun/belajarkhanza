<?php 
$koneksi = mysqli_connect("localhost","root","","sik");
//"localhost","root","","sik"
//"103.151.140.164","backup","backup","sik"
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
echo "";
}
?>
