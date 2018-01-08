<?php
	$host ="localhost";
	$user = "root";
	$password = "";
	$database = "klinik";
	$connect = mysqli_connect($host,$user,$password,$database);
	

	class file extends PHPUnit_Framework_TestCase
	{
		function test1()
    	{
			$login=mysqli_query($connect,"SELECT * FROM login where username = 'klinik1'");
			$user = mysqli_fetch_array($login);
			$test = $exe['password'];
			$content = $test;
            $this->assertEquals('12345', $content);

		}
		function test2()
    	{
			$login1=mysqli_query($connect,"SELECT * FROM login WHERE username = 'klinik1'");
			$user1 = mysqli_fetch_array($login1);
			$hakakses = $user1['akses'];
			$content = $hakakses;
            $this->assertEquals('klinik1', $content);
		}
	}
?>