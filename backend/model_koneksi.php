<?php
	//=====================================
	//MENYAMBUNGKAN DATABASE
	//butuh parameter host, user, password, database
	$link = mysqli_connect('localhost', 'root', '', 'monitor_anggaran');

	//======================================
	//MENGUJI ERROR
	//hilangkan kode ini kalo website udah diupload k internet (live)
	//supaya pengguna tidak melihat ketika ada error
	if (!$link) {
		die('variabel link error ' . mysqli_connect_error());
	}
?>
