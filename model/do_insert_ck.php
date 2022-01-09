<?php
	include '../db/db_config.php';
	extract($_POST);
			if($db->insert('calon_karyawan',"'','$nama','$ttl'")->count() == 1){
				header('location:../karyawan_show.php');
	} else {
		header('location:../input_karyawan.php?error_msg=error_type');
	}
?>