<div class="card">
	<div class="card-body">
		<form action="<?= base_url("admin/kelas/create") ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Kode Kelas</label>
				<input type="text" name="kode_kelas" class="form-control" required autofocus>
			</div>
			<div class="form-group">
				<label for="">Nama Kelas*</label>
				<select name="nama_kelas" id="" class="form-control select2" required>
					<option value="I">Kelas X</option>
					<option value="II">Kelas XI</option>
					<option value="III">Kelas XII</option>
				</select>
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
						<input type="time" name="jam_masuk1" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang1" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk2" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang2" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk3" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang3" class="form-control" autocomplete="false">
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
						<input type="time" name="jam_masuk4" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang4" class="form-control" autocomplete="false">
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk5" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang5" class="form-control" autocomplete="false">
					</div>
				</div>

				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" name="jam_masuk6" class="form-control" autocomplete="false">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="">Jam Pulang</label>
						<input type="time" name="jam_pulang6" class="form-control" autocomplete="false">
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