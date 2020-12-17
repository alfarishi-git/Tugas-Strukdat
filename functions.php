<?php

// database connection
$conn = mysqli_connect("localhost", "root", "", "ig_db");

function query($query)
{
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function insert($data)
{
	global $conn;

	$caption = htmlspecialchars($data['caption']);

	// upload gambar
	$image = upload();

	if (!$image) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO tb_feed VALUES ('', '$caption', '$image')";

	$result = mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function story($data)
{
	global $conn;

	// upload gambar
	$image = upload();

	if (!$image) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO tb_story VALUES ('', '$image')";

	$result = mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload()
{

	$nama_file = $_FILES['image']['name'];
	$ukuran_file = $_FILES['image']['size'];
	$error = $_FILES['image']['error'];
	$tmpName = $_FILES['image']['tmp_name'];

	// cek jika tidak ada gambar yang diupload
	if ($error === 4) {
		echo "<script>
						alert('pilih gambar terlebih dahulu');
			  	</script>";

		return false;
	}

	// cek jika yang diupload harus berupa gambar
	$ekstensiValid = ['jpg', 'jpeg', 'png'];
	$ekstensi = explode('.', $nama_file);
	$ekstensi = strtolower(end($ekstensi));

	// jika yang diupload bukan gambar
	if (!in_array($ekstensi, $ekstensiValid)) {

		echo "<script>
					alert('yang anda upload bukan gambar');
				</script>";

		return false;
	}

	// cek jika ukuran gambar terlalu besar
	if ($ukuran_file > 1000000) {

		echo "<script>
					alert('yang anda upload bukan gambar');
				</script>";

		return false;
	}

	// lolos pengecekan dan gambar siap di upload
	// generate nama gambar baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi;

	move_uploaded_file($tmpName, 'assets/images/posts/' . $nama_file_baru);

	return $nama_file_baru;
}