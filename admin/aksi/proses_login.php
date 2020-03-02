<?php
	session_start();
	include"koneksi.php";
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$level = $_POST['level'];
	if($level=="admin"){
		$sql= mysqli_query($connect,"select * from tbl_admin_kelurahan where username='$username' and password='$password'") or die(mysqli_error($connect));
		$data = mysqli_fetch_assoc($sql);
		$_SESSION['level'] = 'admin';
	}else if($level=="lurah"){
		$sql= mysqli_query($connect,"select * from tbl_lurah where username='$username' and password='$password'");
		$data = mysqli_fetch_assoc($sql);
		$_SESSION['level'] = 'lurah';
	}else{
		$sql= mysqli_query($connect,"select * from tbl_admin_rt where username='$username' and password='$password'");
		$data = mysqli_fetch_assoc($sql);
		$_SESSION['rt']=$data['id_rt'];
		$_SESSION['level'] = 'rt';
	}
	if(mysqli_num_rows($sql)>=1){

		$_SESSION['username']=$username;
		$_SESSION['level']=$level;
		header("location:../index.php");

	}else{
		header("location:../form_login.php?pesan=error_login");
	}

?>
