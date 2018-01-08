<?php

class file extends PHPUnit_Framework_TestCase
{
	/**
     * @var PDO
     */
    protected $pdo;
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    public function setUp()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=klinik', "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

	function test1()
    {
       $dbh = new PDO('mysql:host=localhost;dbname=klinik',"root", "");
	   $admin = $dbh->prepare("SELECT * FROM login WHERE username = 'klinik1'");
	   $admin->execute();
	   $row = $admin->fetch(PDO::FETCH_ASSOC);
	   $test = $row['password'];
	   $content = $test;
	   $this->assertEquals('12345', $content);
	}
}
?>
