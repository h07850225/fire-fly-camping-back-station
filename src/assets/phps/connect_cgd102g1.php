<?php
	//$dbname = "tibamefe_cgd102組別"
	//$user = "tibamefe_since2021";
	//$password = "vwRBSb.j&K#E";
	
	$dbname = "tibamefe_cgd102g1";
	$user = "root";
	$password = "root";

	$dsn = "mysql:host=localhost;port=3306;dbname=$dbname;charset=utf8";

	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE=>PDO::CASE_NATURAL);
	
	//建立pdo物件
	$pdo = new PDO($dsn, $user, $password, $options);	

?>
