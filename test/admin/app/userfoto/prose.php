<?php
// panggil file koneksi.php

include"../../../inc/konek.php";

// buat koneksi ke dbase mysql
//membuka koneksi
koneksi_buka();
$id=$_POST['id'];
$lokasii=$_FILES['fgambar']['tmp_name'];
$typee=$_FILES['fgambar']['type'];
$edit_foto=$_FILES['fgambar']['name'];
$cb=mysql_fetch_array(mysql_query("select * from usergarap where id='$id'"))or die("gagal".mysql_error());

if(!empty($lokasii)){
	move_uploaded_file($lokasii,"foto/$edit_foto");

	mysql_query("Update usergarap set dp='$edit_foto'
								 where id='$_POST[id]'")or die("gagal".mysql_error());
	header('location:66c3707f6adeb700a5850529260b4c16');
	}
	else{
	mysql_query("Update dp='$cb[foto]'
								 where id='$_POST[id]'")or die("gagal".mysql_error());
	header('location:66c3707f6adeb700a5850529260b4c16');	
	}