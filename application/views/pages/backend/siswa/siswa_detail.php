<div class="card">
	<div class="card-body">
		<form action="<?= base_url("admin/siswa/update") ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">NIS</label>
				<input type="hidden" name="siswa_id" value="<?= $contents["siswa"]->siswa_id ?>" required readonly>
				<input type="text" name="nis" class="form-control" value="<?= $contents["siswa"]->nis ?>" required readonly autofocus>
			</div>
			<div class="form-group">
				<label for="">Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" value="<?= $contents["siswa"]->nama ?>" required readonly>
			</div>
			<div class="form-group">
				<label for="">Jenis Kelamin</label>
				<input type="text" name="nama" class="form-control" value="<?= $contents["siswa"]->jk == "L" ? "Laki-laki" : "Perempuan" ?>" required readonly>
			</div>
			<div class="form-group">
				<label for="">Kelas</label>
				<input type="text" name="nama" class="form-control" value="<?= $contents["siswa"]->kode_kelas . "/" . $contents["siswa"]->nama_kelas ?>" required readonly>
			</div>
			<div class="form-group">
				<label for="">No HP</label>
				<input type="text" name="no_hp" value="<?= $contents["siswa"]->no_hp ?>" class="form-control" required readonly>
			</div>
			<div class="form-group">
				<label for="">Alamat Lengkap</label>
				<input type="text" name="alamat" value="<?= $contents["siswa"]->alamat ?>" class="form-control" required readonly>
			</div>
			<div class="row">
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">SENIN</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">SELASA</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">RABU</label></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk1" class="form-control" value="<?= $contents["siswa"]->jam_masuk1 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang1" class="form-control" value="<?= $contents["siswa"]->jam_pulang1 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk2" class="form-control" value="<?= $contents["siswa"]->jam_masuk2 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang2" class="form-control" value="<?= $contents["siswa"]->jam_pulang2 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk3" class="form-control" value="<?= $contents["siswa"]->jam_masuk3 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang3" class="form-control" value="<?= $contents["siswa"]->jam_pulang3 ?>" autocomplete="false" readonly>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">KAMIS</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">JUMAT</label></center>
				</div>
				<div class="col-md-4">
					<center><label style="color: brown;" for="senin">SABTU</label></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk4" class="form-control" value="<?= $contents["siswa"]->jam_masuk4 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang4" class="form-control" value="<?= $contents["siswa"]->jam_pulang4 ?>" autocomplete="false" readonly>
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk5" class="form-control" value="<?= $contents["siswa"]->jam_masuk5 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang5" class="form-control" value="<?= $contents["siswa"]->jam_pulang5 ?>" autocomplete="false" readonly>
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk6" class="form-control" value="<?= $contents["siswa"]->jam_masuk6 ?>" autocomplete="false" readonly>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang6" class="form-control" value="<?= $contents["siswa"]->jam_pulang6 ?>" autocomplete="false" readonly>
					</div>
				</div>
			</div>



		</form>
	</div>
</div>