<?php
	/* 
	Script ini ditulis oleh Loka Dwiartara, 
	Website : www.ilmuwebsite.com 
	Email : lokadwiartara@ilmuwebsite.com
	*/
	require_once "conf/koneksi.php";
	$query = "SELECT * FROM user
	";
	$rquery = mysql_query($query);
	while($result = mysql_fetch_assoc($rquery)){
		$arrayjson[] = $result;
	}
	
	/* 	bagian ini digunakan untuk meng-encode ke dalam JSON 
		agar bisa digunakan oleh getjson maupun ajax JQUERY */
	echo json_encode($arrayjson);
	

?>