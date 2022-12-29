<div class="card">
	<div class="card-body">
		<form action="<?= base_url("admin/guru/update") ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="guru_id" value="<?= $contents["guru"]->guru_id ?>" required>
			<div class="form-group">
				<label for="">NIP guru</label>
				<input type="text" name="nip" class="form-control" value="<?= $contents["guru"]->nip ?>" autocomplete="false" required>
			</div>
			<div class="form-group">
				<label for="">Nama guru</label>
				<input type="text" name="nama_guru" class="form-control" value="<?= $contents["guru"]->nama_guru ?>" autocomplete="false" required>
			</div>
			<div class="form-group">
				<label for="">Jenis Kelamin</label>
				<select name="jk" id="" class="form-control select2" required>
					<option value="">Pilih</option>
					<option value="L" <?= $contents["guru"]->jk == "L" ? "selected" : "" ?>>Laki-laki</option>
					<option value="P" <?= $contents["guru"]->jk == "P" ? "selected" : "" ?>>Perempuan</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">No HP</label>
				<input type="text" name="no_hp" class="form-control" value="<?= $contents["guru"]->no_hp ?>" autocomplete="false" required>
			</div>
			<div class="form-group">
				<label for="">Alamat Lenkap</label>
				<input type="text" name="alamat" class="form-control" value="<?= $contents["guru"]->alamat ?>" autocomplete="false" required>
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
						<input type="time" name="jam_masuk1" class="form-control" value="<?= $contents["guru"]->jam_masuk1 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang1" class="form-control" value="<?= $contents["guru"]->jam_pulang1 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk2" class="form-control" value="<?= $contents["guru"]->jam_masuk2 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang2" class="form-control" value="<?= $contents["guru"]->jam_pulang2 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk3" class="form-control" value="<?= $contents["guru"]->jam_masuk3 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang3" class="form-control" value="<?= $contents["guru"]->jam_pulang3 ?>" autocomplete="false">
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
						<input type="time" name="jam_masuk4" class="form-control" value="<?= $contents["guru"]->jam_masuk4 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang4" class="form-control" value="<?= $contents["guru"]->jam_pulang4 ?>" autocomplete="false">
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk5" class="form-control" value="<?= $contents["guru"]->jam_masuk5 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang5" class="form-control" value="<?= $contents["guru"]->jam_pulang5 ?>" autocomplete="false">
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk6" class="form-control" value="<?= $contents["guru"]->jam_masuk6 ?>" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang6" class="form-control" value="<?= $contents["guru"]->jam_pulang6 ?>" autocomplete="false">
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-danger" type="reset">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>