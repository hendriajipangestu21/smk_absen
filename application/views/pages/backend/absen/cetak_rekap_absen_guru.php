<?php
include_once APPPATH . '/third_party/fpdf/fpdf.php';
$pdf = new FPDF('L', 'mm', 'Letter');
$pdf->AddPage();

$pdf->Image(base_url('myassets/logo.png'), 20, 5, -700);
$pdf->SetFont('Arial', '', 16);
$pdf->Cell(0, 6, 'YAYASAN HILMI SHADIQA DEWA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(0, 6, 'SMK BHAKTI ADI HUSODO', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 6, '"Terakreditasi A" BAN S/M', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 6, 'Jl. Raya Bayongbong KM. 10 Saung Cendol Desa Ciela', 0, 1, 'C');
$pdf->Cell(0, 6, 'Kec. Bayongbong - Garut Telp. (0262) 2808863 email smksbah@hotmail.com', 0, 1, 'C');
$pdf->SetLineWidth(1);
$pdf->Line(10, 43, 270, 43);
$pdf->SetLineWidth(0);
$pdf->Line(10, 44, 270, 44);

$pdf->Cell(10, 7, '', 0, 1);

$pdf->Cell(0, 6, 'DAFTAR REKAP ABSEN GURU', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(10, 6, 'No', 1, 0, 'C');
$pdf->Cell(52, 6, 'Nama Guru', 1, 0, 'C');
$pdf->Cell(32, 6, 'Tanggal Masuk', 1, 0, 'C');
$pdf->Cell(25, 6, 'Jam Masuk', 1, 0, 'C');
$pdf->Cell(20, 6, 'Scan Masuk', 1, 0, 'C');
$pdf->Cell(20, 6, 'Terlambat', 1, 0, 'C');
$pdf->Cell(32, 6, 'Tanggal Pulang', 1, 0, 'C');
$pdf->Cell(25, 6, 'Jam Pulang', 1, 0, 'C');
$pdf->Cell(20, 6, 'Scan Pulang', 1, 0, 'C');
$pdf->Cell(25, 6, 'Pulang Cepat', 1, 1, 'C');
$pdf->SetFont('Arial', '', 10);

$no = 0;
foreach ($data_rekap as $data) {

	$day = date('D', strtotime($data->date));
	$dayList = array(
		'Sun' => 'Minggu',
		'Mon' => 'Senin',
		'Tue' => 'Selasa',
		'Wed' => 'Rabu',
		'Thu' => 'Kamis',
		'Fri' => 'Jumat',
		'Sat' => 'Sabtu'
	);


	if ($dayList[$day] == "Senin") {
		$time_in = date_create($data->jam_masuk1);
		$time_out = date_create($data->jam_pulang1);
		$masuk = new DateTime($data->jam_masuk1);
		$keluar = new DateTime($data->jam_pulang1);
		$jadwal_masuk = $data->jam_masuk1;
		$jadwal_pulang = $value->jam_pulang1;
	} elseif ($dayList[$day] == "Selasa") {
		$time_in = date_create($data->jam_masuk2);
		$time_out = date_create($data->jam_pulang2);
		$masuk = new DateTime($data->jam_masuk2);
		$keluar = new DateTime($data->jam_pulang2);
		$jadwal_masuk = $value->jam_masuk2;
		$jadwal_pulang = $value->jam_pulang2;
	} elseif ($dayList[$day] == "Rabu") {
		$time_in = date_create($data->jam_masuk3);
		$time_out = date_create($data->jam_pulang3);
		$masuk = new DateTime($data->jam_masuk3);
		$keluar = new DateTime($data->jam_pulang3);
		$jadwal_masuk = $data->jam_masuk3;
		$jadwal_pulang = $data->jam_pulang3;
	} elseif ($dayList[$day] == "Kamis") {
		$time_in = date_create($data->jam_masuk4);
		$time_out = date_create($data->jam_pulang4);
		$masuk = new DateTime($data->jam_masuk4);
		$keluar = new DateTime($data->jam_pulang4);
		$jadwal_masuk = $data->jam_masuk4;
		$jadwal_pulang = $data->jam_pulang4;
	} elseif ($dayList[$day] == "Jumat") {
		$time_in = date_create($data->jam_masuk5);
		$time_out = date_create($data->jam_pulang5);
		$masuk = new DateTime($data->jam_masuk5);
		$keluar = new DateTime($data->jam_pulang5);
		$jadwal_masuk = $data->jam_masuk5;
		$jadwal_pulang = $data->jam_pulang5;
	} elseif ($dayList[$day] == "Sabtu") {
		$time_in = date_create($data->jam_masuk6);
		$time_out = date_create($data->jam_pulang6);
		$masuk = new DateTime($data->jam_masuk6);
		$keluar = new DateTime($data->jam_pulang6);
		$jadwal_masuk = $data->jam_masuk6;
		$jadwal_pulang = $data->jam_pulang6;
	}

	$pdf->SetFont('Arial', '', 9);

	$no++;
	$pdf->Cell(10, 6, $no, 1, 0, 'C');
	$pdf->Cell(52, 6, $data->nama_guru, 1, 0);
	$pdf->Cell(32, 6, $dayList[$day] . ", " . date_format(date_create($data->date), "d-m-Y"), 1, 0, 'C');

	if ($jadwal_masuk === "") {
		$pdf->SetFont('Arial', '', 9);
		$pdf->Cell(25, 6, "Tidak ada jadwal", 1, 0, 'C');
	} else {
		$pdf->Cell(25, 6, date_format($time_in, 'H:i:s'), 1, 0, 'C');
	}


	$pdf->Cell(20, 6, $data->time, 1, 0, 'C');

	date_add($time_in, date_interval_create_from_date_string('0 minutes'));
	$jam_masuk_tambah = date_format($time_in, 'H:i:s');
	if ($data->time > $jam_masuk_tambah) {
		$input_masuk = new DateTime($data->time);

		$jam_masuk_tambah = $input_masuk->diff($masuk);
		$terlambat = $jam_masuk_tambah->format("%H:%I:%S");
		$pdf->Cell(20, 6, $terlambat, 1, 0, 'C');
	} else {
		$pdf->Cell(20, 6, "-", 1, 0, 'C');
	}


	$pdf->Cell(32, 6, $data->date_out, 1, 0, 'C');

	if ($jadwal_pulang === "") {
		$pdf->SetFont('Arial', '', 9);
		$pdf->Cell(25, 6, "Tidak ada jadwal", 1, 0, 'C');
	} else {
		$pdf->Cell(25, 6, date_format($time_out, 'H:i:s'), 1, 0, 'C');
	}
	$pdf->Cell(20, 6, $data->time_out, 1, 0, 'C');

	if ($time_out > $data->time_out) {
		$input_keluar = new DateTime($data->time_out);

		$jam_pulang_cepat = $input_keluar->diff($keluar);
		$pulang_cepat = $jam_pulang_cepat->format("%H:%I:%S");
		$pdf->Cell(25, 6, $pulang_cepat, 1, 1, 'C');
	} else {
		$pdf->Cell(25, 6, "-", 1, 1, 'C');
	}
}
$pdf->Output();
