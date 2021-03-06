<?php $this->load->view('template/header') ?>
<?php if ($this->session->flashdata('message')!=null):?>
	<div id="toastsContainerTopRight" class="toasts-top-right fixed">
		<div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
				<strong class="mr-auto">Sukses</strong>
				<small></small>
				<button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="toast-body"><?php echo $this->session->flashdata('message'); ?></div>
		</div>
	</div>
<?php endif ?>

<section class="content">

	<!-- Default box -->
	<div class="card collapsed-card">
		<div class="card-header">
			<h3 class="card-title">Tambah KRS</h3>

			<div class="card-tools">
				<button type="button" class="btn btn-primary" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fas fa-plus"></i>
				</button>
			</div>
		</div>
		<div class="card-body">

			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Input Data</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<!-- <form role="form" action="<?php echo site_url('krs/store') ?>" method="post" > -->
					<div class="card-body">
						<input type="hidden" id="jmlhKrs" name="jmlhKrs" value="" >

						<div class="form-group">
							<label for="ta">Tahun Ajar</label>
							<select id="ta" name="ta" class="custom-select" value="<?= old('ta') ;?>">
								<?php foreach ($ta as $value):?>
									<option value="<?php echo $value->id_ta ?>" ><?php echo $value->ta; ?></option>
								<?php endforeach ?>
							</select>
						</div>

						<div class="form-group">	
							<label for="semester">Semester</label>
							<input id="semester" required="" name="semester" type="text" class="form-control" id="semester" placeholder="Semester">
						</div>

						<div class="form-group">
							<label for="id_jur">Jurusan</label>
							<select id="id_jur" name="id_jur" class="custom-select" value="<?= old('id_jur') ;?>">
								<?php foreach ($jurusan as $value):?>
									<option value="<?php echo $value->id_jur ?>" ><?php echo $value->nama_jurusan; ?></option>
								<?php endforeach ?>
							</select>
						</div>

						<div class="form-group">
							<label for="pa">Pembimbing Akademik</label>
							<select id="pa" name="pa" class="custom-select" value="<?= old('pa') ;?>">
								<?php foreach ($dosen as $value):?>
									<option value="<?php echo $value->id_dosen ?>" ><?php echo $value->nama_dosen; ?></option>
								<?php endforeach ?>
							</select>
						</div>

						<div class="form-group">
							<label>Jadwal</label><br>
							<a style="color: white;" class="btn btn-primary" onclick="tambahInput()" >Tambah Jadwal</a><br><br>
							<table class="table table-bordered table-striped" >
								<thead>
									<th>Kode MK - Nama Makul - Semester - SKS - Dosen - Hari - Jam</th>
									<th>Aksi</th>
								</thead>
								<tbody id="addInput" >
									<!-- <tr>
										<td>
											<select class='custom-select'>
												<?php foreach ($jadwal as $value):?>
												<option value='<?php echo $value->id_jadwal.'|'.$value->kd_mk.'|'.$value->kd_dosen.'|'.$value->hari.'|'.$value->jam ?>' >
													<?php
														echo $value->kd_mk.' - '.$value->nama_mk.' - '.$value->sks.' - '.$value->nama_dosen.' - '.$value->hari.' - '.$value->jam;
													?>
												</option>
												<?php endforeach ?>
											</select>
										</td>
										<td>
											<button class='btn btn-danger'>Remove</button>
										</td>
									</tr> -->
								</tbody>
							</table>
						</div>

					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button id="simpan" onclick="simpan()" class="btn btn-primary">Submit</button>
					</div>
					<!-- </form> -->
				</div>

			</div>
			<!-- /.card-body -->
			<div class="card-footer">

			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">KRS List</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>

				<!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
					<i class="fas fa-times"></i>
				</button> -->
			</div>
		</div>
		<div class="card-body">
			<table id="tableJurusan" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Tahun Ajar</th>
						<th>Semester</th>
						<th>Jurusan</th>
						<th>PA</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
		<div class="card-footer">
			
		</div>
		<!-- /.card-footer-->
	</div>
	<!-- /.card -->

</section>

<!-- modal -->

<div class="modal fade" id="modal-edit-jur">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Detail KRS</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modalData">
				<!-- <p>One fine body&hellip;</p> -->
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- endmodal -->


<script>
	var tabel = null;
	$(document).ready(function() {
		tabel = $('#tableJurusan').DataTable({
			"processing": true,
			"serverSide": true,
			"ordering": true, // Set true agar bisa di sorting
			"order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
			"ajax":
			{
				"url": "<?php echo base_url('krs/getAll') ?>", // URL file untuk proses select datanya
				"type": "POST"
			},
			"deferRender": true,
			"aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
			"columns": [
				{ "data": "ta" }, // Tampilkan nis
				{ "data": "semester" },  // Tampilkan nama
				{ "data": "nama_jurusan" }, // Tampilkan alamat
				{ "data": "nama_dosen" }, // Tampilkan alamat
				{ "data": "status" }, // Tampilkan alamat
				{ "render": function ( data, type, row )
					{ // Tampilkan kolom aksi
						if (row.status=='lock') {
							var id=row.id_krs;
							var idi=row.id_krs;
							var html  = "<button class='btn btn-primary' onclick='edit("+idi+")' data-toggle='modal' data-target='#modal-edit-jur'>Detail</button> | <button id='unlock"+id+"' class='btn btn-warning' onclick=unlock('"+id+"')>Unlock</button>";
						}else{
							var id=row.id_krs;
							var idi=row.id_krs;
							var html  = "<button class='btn btn-primary' onclick='edit("+idi+")' data-toggle='modal' data-target='#modal-edit-jur'>Detail</button> | <button class='btn btn-danger' onclick=hapusJurusan('"+id+"')>Delete</button> | <button id='lock"+id+"' class='btn btn-success' onclick=lock('"+id+"')>Lock</button>";
						};
						return html;
					}
				},
				],
			});
	});
</script>
<script type="text/javascript">
	function hapusJurusan(a){
		var confirm=window.confirm('Yakin? Jika anda menghapus paket KRS ini, maka akan menghapus KHS yang berhubungan!');
		if (confirm) {
			window.location.href='<?php echo site_url('krs/delete/') ?>'+a;
		};
	}
	function edit(id){
		$.ajax({
			url: "<?php echo site_url('krs/detail/') ?>"+id,
			success: function(result){
				$("#modalData").html(result);
			}
		});
	}
	var idName=0;
	function tambahInput(){
		idName++;
		var aa="<tr id='baris"+idName+"' ><td><select id='kode_mk"+idName+"' class='custom-select'><?php foreach ($jadwal as $value):?><option value='<?php echo $value->id_jadwal.'|'.$value->kd_mk.'|'.$value->kd_dosen.'|'.$value->hari.'|'.$value->jam ?>' ><?php echo $value->kd_mk.' - '.$value->nama_mk.' - '.'Semester '.$value->semester.' - '.$value->nama_jurusan.' - '.$value->sks.' SKS'.' - '.$value->nama_dosen.' - '.$value->hari.' - '.$value->jam;?></option><?php endforeach ?></select></td><td><button onclick='removeList("+idName+")' class='btn btn-danger'>Remove</button></td></tr>";
		$("#addInput").append(aa);
		$("#jmlhKrs").val(idName);
	}
	function removeList(id){
		idName--;
		$('#baris'+id).remove();
	}
	function simpan(){
		var krs=[];
		for (var i = idName; i > 0; i--) {
			var a=$('#kode_mk'+i).val();
			krs.push(a);
		};
		var postData={
			jmlhKrs:$('#jmlhKrs').val(),
			ta:$('#ta').val(),
			semester:$('#semester').val(),
			id_jur:$('#id_jur').val(),
			pa:$('#pa').val(),
			krs:krs,
		};
		// console.log(postData);
		$.ajax({
			url:'<?php echo site_url('krs/store') ?>',
			type:'post',
			data:postData,
			beforeSend:function(){
				$('#simpan').html('Processing <i class="fas fa-sync-alt fa-spin" ></i>');
			},
			complete: function(){
				$('#simpan').html('Simpan');
			},
			success: function(data){
				// console.log(data);
				// alert('Data berhasil di input');
				tabel.ajax.reload();
			}
		});
	}
	function lock(id){
		$.ajax({
			url:'<?php echo site_url('krs/lock') ?>',
			type:'post',
			data:{id:id},
			beforeSend:function(){
				$('#lock'+id).html('Processing <i class="fas fa-sync-alt fa-spin" ></i>');
			},
			success: function(data){
				// console.log(data);
				// alert('Data berhasil di input');
				tabel.ajax.reload();
			}
		});
	}
	function unlock(id){
		$.ajax({
			url:'<?php echo site_url('krs/unlock') ?>',
			type:'post',
			data:{id:id},
			beforeSend:function(){
				$('#unlock'+id).html('Processing <i class="fas fa-sync-alt fa-spin" ></i>');
			},
			success: function(data){
				// console.log(data);
				// alert('Data berhasil di input');
				tabel.ajax.reload();
			}
		});
	}
</script>
<?php $this->load->view('template/footer') ?>