<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("MySQL E !<br>");
		}
	$Koneksi = mysql_select_db("klinik");
		if (!$Koneksi){
		die ("DBase E !");
		}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password' ");
	if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysql_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
        $_SESSION['akses'] = $qry['akses'];
        if($qry['akses']=="admin"){
            header("location:admin.php");
        }
		else if($qry['akses']=="klinik1"){
            header("location:klinik1.php");
        }
        else if($qry['akses']=="klinik2"){
            header("location:klinik2.php");
        }
    }else{
		
    }
?>