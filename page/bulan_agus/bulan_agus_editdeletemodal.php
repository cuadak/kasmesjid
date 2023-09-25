<!-- Delete -->
    <div class="modal fade" id="del<?php echo $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <!-- Delete    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center> --> 
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($koneksi,"select * from agus where id='".$d['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Tanggal: <strong><?php echo $drow['tanggal']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Kembali</button>
                    <a href="bulan_agus_delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger"><span class="fas fa-trash"></span> Hapus</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <!-- Edit  <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center> --> 
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($koneksi,"select * from agus where id='".$d['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="bulan_agus_edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tanggal: </label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="tanggal" class="form-control" value="<?php echo $erow['tanggal']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Uraian: </label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="uraian" class="form-control" value="<?php echo $erow['uraian']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Masuk: </label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="masuk" class="form-control" value="<?php echo $erow['masuk']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Keluar: </label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="keluar" class="form-control" value="<?php echo $erow['keluar']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Saldo: </label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="saldo" class="form-control" value="<?php echo $erow['saldo']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Kembali</button>
                    <button type="submit" class="btn btn-warning"><span class="fas fa-edit"></span> Simpan</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->