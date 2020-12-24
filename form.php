<?php
$db = new mysqli("localhost", "root","","ders");
$db->query("SET CHARACTER UTF8");
$db->query("SET NAMES UTF8");

if (@$_POST){
	$email = $_POST["email"];
	$uret:
	$kod = date("asjd");
	$kod = md5($kod);
	$kod = substr($kod,0,10);
	echo $kod;
	$query = $db->query ("SELECT * FROM email WHERE onaykodu ='$kod' ");
	if($query->num_rows){
		goto $uret;
	}
else {
	$insert = $db->query("INSERT INTO email SET 
	adres = '$email',
	onaykodu= '$kod',
	onaylandı = 0 ");
}

}


?>