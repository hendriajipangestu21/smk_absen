<div class="card">
	<div class="card-header">
		List Absensi Hari ini : <b><?= $this->input->get("hari") ? getDay($this->input->get("hari")) :  getDay(date("l")) ?>, <?= $this->input->get("hari") ? "" : date("d-M-Y") ?></b>
		<hr>
		<div class="row">
			<div class="col-md-6">
				Tanggal Mulai : <input class="form-control " type="date" name="tanggal_awal" id="filter_awal">
				<br>
				Tanggal Akhir : <input class="form-control " type="date" name="tanggal_akhir" id="filter_akhir">

				<br>

				<div class="row">
					<div class="col-sm-2">
						<input class="btn btn-primary" type="button" value="Filter" onclick="filter()">
					</div>
					<div class="col-sm-2">
						<?php
						$filter_awal = $this->input->get("filter_awal");
						$filter_akhir = $this->input->get("filter_akhir");
						?>
						<a href="<?= base_url('admin/absen_guru/cetak_rekap?filter_awal=' . $filter_awal . '&filter_akhir=' . $filter_akhir . '') ?>" class="btn btn-info" type="button">Cetak</a>
					</div>
				</div>


				<!-- <select name="hari" id="filter" class="form-control select2 w-25 float-right" onchange="filter()" required>
					<option value="">Filter Hari</option>
					<?php $hari = (object)array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"); ?>
					<?php foreach ($hari as $value) : ?>
						<option value="<?= $value ?>"><?= $value ?></option>
					<?php endforeach; ?>
				</select> -->
			</div>
			<!-- <div class="col-md-6">
				<a href="<?= base_url("admin/absen/tarik_data") ?>" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Tarik Data</a>
			</div> -->
		</div>


	</div>
	<div class="card-body table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Guru</th>
					<th>Tangal Masuk</th>
					<th>Jam Masuk</th>
					<th>Scan Masuk</th>
					<th>Terlambat</th>
					<th>Tanggal Pulang</th>
					<th>Jam Pulang</th>
					<th>Scan Pulang</th>
					<th>Pulang Cepat</th>

					<!-- <th>Action</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($contents["data_rekap"] as $key => $value) :
					$day = date('D', strtotime($value->date));
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
						$time_in = date_create($value->jam_masuk1);
						$time_out = date_create($value->jam_pulang1);
						$masuk = new DateTime($value->jam_masuk1);
						$keluar = new DateTime($value->jam_pulang1);
						$jadwal_masuk = $value->jam_masuk1;
						$jadwal_pulang = $value->jam_pulang1;
					} elseif ($dayList[$day] == "Selasa") {
						$time_in = date_create($value->jam_masuk2);
						$time_out = date_create($value->jam_pulang2);
						$masuk = new DateTime($value->jam_masuk2);
						$keluar = new DateTime($value->jam_pulang2);
						$jadwal_masuk = $value->jam_masuk2;
						$jadwal_pulang = $value->jam_pulang2;
					} elseif ($dayList[$day] == "Rabu") {
						$time_in = date_create($value->jam_masuk3);
						$time_out = date_create($value->jam_pulang3);
						$masuk = new DateTime($value->jam_masuk3);
						$keluar = new DateTime($value->jam_pulang3);
						$jadwal_masuk = $value->jam_masuk3;
						$jadwal_pulang = $value->jam_pulang3;
					} elseif ($dayList[$day] == "Kamis") {
						$time_in = date_create($value->jam_masuk4);
						$time_out = date_create($value->jam_pulang4);
						$masuk = new DateTime($value->jam_masuk4);
						$keluar = new DateTime($value->jam_pulang4);
						$jadwal_masuk = $value->jam_masuk4;
						$jadwal_pulang = $value->jam_pulang4;
					} elseif ($dayList[$day] == "Jumat") {
						$time_in = date_create($value->jam_masuk5);
						$time_out = date_create($value->jam_pulang5);
						$masuk = new DateTime($value->jam_masuk5);
						$keluar = new DateTime($value->jam_pulang5);
						$jadwal_masuk = $value->jam_masuk5;
						$jadwal_pulang = $value->jam_pulang5;
					} elseif ($dayList[$day] == "Sabtu") {
						$time_in = date_create($value->jam_masuk6);
						$time_out = date_create($value->jam_pulang6);
						$masuk = new DateTime($value->jam_masuk6);
						$keluar = new DateTime($value->jam_pulang6);
						$jadwal_masuk = $value->jam_masuk6;
						$jadwal_pulang = $value->jam_pulang6;
					}


				?>


					<tr>
						<td><?= ($key + 1) ?></td>
						<td><?= $value->nama_guru ?></td>
						<td><?= $dayList[$day] . ", " . date_format(date_create($value->date), "d-m-Y") ?></td>
						<?php
						if ($jadwal_masuk === "") {
						?>
							<td>Tidak ada jadwal</td>
						<?php
						} else { ?>
							<td><?= date_format($time_in, 'H:i:s'); ?></td>
						<?php } ?>
						<td><?= $value->time ?></td>
						<?php
						date_add($time_in, date_interval_create_from_date_string('0 minutes'));
						$jam_masuk_tambah = date_format($time_in, 'H:i:s');
						if ($value->time > $jam_masuk_tambah) {
							$input_masuk = new DateTime($value->time);

							$jam_masuk_tambah = $input_masuk->diff($masuk);
							$terlambat = $jam_masuk_tambah->format("%H:%I:%S");

						?>
							<td><?= $terlambat; ?></td>
						<?php } else {
						?>
							<td><?= "-"; ?></td>
						<?php } ?>
						<td><?= $dayList[$day] . ", " . date_format(date_create($value->date_out), "d-m-Y"); ?></td>

						<?php
						if ($jadwal_pulang === "") {
						?>
							<td>Tidak ada jadwal</td>
						<?php
						} else { ?>
							<td><?= date_format($time_out, 'H:i:s'); ?></td>
						<?php } ?>
						<td><?= $value->time_out ?></td>

						<?php if (!empty($value->time_out)) {
							if ($time_out > $value->time_out) {

								$input_keluar = new DateTime($value->time_out);


								$jam_pulang_cepat = $input_keluar->diff($keluar);
								$pulang_cepat = $jam_pulang_cepat->format("%H:%I:%S");

						?>
								<td><?= $pulang_cepat; ?></td>
							<?php } else {
							?>
								<td><?= "-"; ?></td>
							<?php }
						} else {
							?><td><?= "-"; ?></td><?php
												} ?>
						<!-- <td>
							<a href="<?= base_url("admin/jadwal/isi_absensi/$value->jadwal_id/$value->kelas_id/$value->mapel_id") ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Isi Absensi</a>&emsp;
						</td> -->
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<script>
	function filter() {
		var filter_awal = document.getElementById("filter_awal").value;
		var filter_akhir = document.getElementById("filter_akhir").value;
		if (filter != "") {
			window.location = "<?= base_url("admin/absen_guru/rekap_absen_guru") ?>?filter_awal=" + filter_awal + "&&filter_akhir=" + filter_akhir;
		}
	}
</script>