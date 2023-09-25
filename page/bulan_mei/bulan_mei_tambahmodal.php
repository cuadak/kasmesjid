<!-- Add New -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <!-- Add New  <center><h4 class="modal-title" id="myModalLabel">Tambah</h4></center> -->
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="bulan_mei_tambah.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Tanggal: </label>
						</div>
						<div class="col-lg-10">
							<input type="date" class="form-control" name="tanggal">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Uraian: </label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="uraian">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Masuk: </label>
						</div>
						<div class="col-lg-10">
							<input type="number" class="form-control" name="masuk">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Keluar: </label>
						</div>
						<div class="col-lg-10">
							<input type="number" class="form-control" name="keluar">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Saldo: </label>
						</div>
						<div class="col-lg-10">
							<input type="number" class="form-control" name="saldo">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"> Kembali</button>
                    <button type="submit" class="btn btn-primary"><span class="fas fa-save"></span> Simpan</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
