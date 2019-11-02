Delete.php
<?php
include ('config.php'); //Menambah () pada config.php
	$kod_produk =$_GET['kod_produk'];// sending query
	$delete= mysqli_query($connect, "DELETE FROM jadualmainan WHERE kod_produk = '$kod_produk'"); //Menukar nama jadual ke jadualmainan
		
	header("Location: index.php");
?>
