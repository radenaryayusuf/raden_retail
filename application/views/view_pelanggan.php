<?php 
$this->load->view('parts/header');
$this->load->view('parts/nav');
 ?>
	<!-- Modal Import -->

	<div class="modal fade" id="importmodal">
			  	<div class="modal-dialog modal-lg">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        		<h4 class="modal-title">Import Data <br><small>Silahkan pilih file .xls</small></h4>
			      		</div>
			      		<div class="modal-body">
			        		<div class="container box">
		
		<form method="post" id="import_csv" action="<?php echo site_url();?>/datapelanggan/ExcelDataAdd" enctype="multipart/form-data" method="post">
			<div class="form-group">

				<label>Select .XLS File</label>
				<input type="file" name="userfile" required accept=".xls"/>
			</div><br>
			<button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import</button>
		</form>
		<div id="imported_csv_data"></div>
	</div>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
					<!-- hapus konfirmasi modal -->
		<div class="modal fade" id="modal-konfirmasi">
		  	<div class="modal-dialog modal-sm">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Konfirmasi <br><small>Yakin hapus data? </small></h4>
		      		</div>
		      		<div class="modal-body">
		        		<form role="form">
	  			  			<div class="form-group">
			   	    			<div class="custom-checkbox">
									<input type="checkbox" id="checkboxModal">
							  	  	<label for="checkboxModal"></label>
				    			</div>
				    			Remember Me
				  			</div>
		        		</form>

				        <a class="btn btn-primary block m-top-md"><i class="fa fa-facebook"></i> Login with facebook</a>
				        <a class="btn btn-danger block m-top-md">Login</a>
		      		</div>
		    	</div>
		  	</div>
		</div>


			<!-- Modal tambah pelanggan -->
<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('datapelanggan/input','class="form-horizontal" role="form" id="fpelanggan"');

 ?>
	<div class="modal fade" id="tambahpelanggan">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        		<h4 class="modal-title">Tambah Pelanggan <br><small>Silahkan isi data pelanggan di form ini.</small></h4>
			      		</div>
			      		<div class="modal-body">

			        		<form class="form-horizontal no-margin" id="type-constraint" data-validate="parsley" novalidate>
											<div class="form-group">
												<label class="control-label col-lg-2">Nama</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" placeholder="Nama Pelanggan" name="nama_pelanggan">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Alamat</label>
												<div class="col-lg-9">
													<textarea class="form-control input-sm" placeholder="Alamat" name="alamat"></textarea>
													</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">No Telp</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" name="no_telp" placeholder="No Telp">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Email</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" name="email" placeholder="Email">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Status</label>
											<div class="col-lg-9">
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="inlineRadio1" name="sts" value="Aktif">
													<label for="inlineRadio1"></label>
												</div>
												<div class="inline-block vertical-top">Aktif </div>
											</div>&nbsp;
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="inlineRadio2" name="sts" value="Tidak Aktif">
													<label for="inlineRadio2"></label>
												</div>
												<div class="inline-block vertical-top"> Tidak Aktif</div>
											</div>
										</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Keterangan</label>
												<div class="col-lg-9">
												<textarea class="form-control input-sm" placeholder="Keterangan" name="keterangan"></textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->
							
										</form>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        		<input type="submit" name="submit" id="proses" class="btn btn-primary" value="Simpan Data">
			      		</div>
			    	</div>
			  	</div>
			</div>
					<!-- Modal update pelanggan -->
<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('datapelanggan/update','class="form-horizontal" role="form" id="fpelangganupdate"');

 ?>

	<div class="modal fade" id="updatepelanggan">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        		<h4 class="modal-title">Update Pelanggan <br><small>Silahkan ubah data pelanggan di form ini.</small></h4>
							<input type="hidden" name="kode_pelanggan" id="kode_pelanggan">			        		
			      		</div>
			      		<div class="modal-body">

			        		<form class="form-horizontal no-margin" id="type-constraint" data-validate="parsley" novalidate>
											<div class="form-group">
												<label class="control-label col-lg-2">Nama</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" id="nama_pelanggan" placeholder="Nama Pelanggan" name="nama_pelanggan">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Alamat</label>
												<div class="col-lg-9">
													<textarea class="form-control input-sm" placeholder="Alamat" id="alamat" name="alamat"></textarea>
													</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">No Telp</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" name="no_telp" id="no_telp" placeholder="No Telp">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Email</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" name="email" id="email" placeholder="Email">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Status</label>
											<div class="col-lg-9">
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="rd_stsa" name="sts" value="Aktif">
													<label for="rd_stsa"></label>
												</div>
												<div class="inline-block vertical-top">Aktif </div>
											</div>&nbsp;
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="rd_ststa" name="sts" value="Tidak Aktif">
													<label for="rd_ststa"></label>
												</div>
												<div class="inline-block vertical-top"> Tidak Aktif</div>
											</div>
										</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Keterangan</label>
												<div class="col-lg-9">
												<textarea class="form-control input-sm" placeholder="Keterangan" id="keterangan" name="keterangan"></textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->
							
										</form>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        		<input type="submit" name="submit" id="update" class="btn btn-primary" value="Update Data">
			      		</div>
			    	</div>
			  	</div>
			</div>

<div class="main-container">

 <?php echo $this->session->flashdata('msg'); ?> 
				<div class="padding-md">
					<ul class="breadcrumb">
						<strong>Data Pelanggan</strong> 
						<span class="col-xs-offset-7">
						<button class="btn btn-primary" data-toggle="modal" data-target="#importmodal"><i class="fa fa-file-excel-o m-right-xs" aria-hidden="true"></i>Import Data</button>
						<button class="btn btn-primary" data-toggle="modal" data-target="#tambahpelanggan"><i class="fa fa-plus-square-o m-right-xs" aria-hidden="true"></i>Tambah Pelanggan</button></span>
					</ul>

					<table class="table table-striped" id="tablepelanggan">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>No Telp</th>
								<th>Email</th>
								<th>Status</th>
								<th>Keterangan</th>
								<th>Commands</th>
							</tr>
						</thead>
						<tbody>
							<?php 
		$i = 1;
		foreach ($data_pelanggan as $p) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$p['kode_pelanggan']."</td>";
			echo "<td>".$p['nama']."</td>";
			echo "<td>".$p['alamat']."</td>";
			echo "<td>".$p['no_telp']."</td>";
			echo "<td>".$p['email']."</td>";
			echo "<td>".$p['status']."</td>";
			echo "<td>".$p['keterangan']."</td>";
			echo "<td>".anchor('datapelanggan/hapus/'.$p['kode_pelanggan'],'<input type="button"  class="btn btn-danger hapus-pelanggan" value= "Hapus"> | ');
			echo "<input type='button' class='btn btn-warning' id='updatepelanggan-pilih' value='Edit'></td>";
		echo "</tr>";
			$i++;
		}

		 ?>
						</tbody>
					</table>
				</div><!-- ./padding-md -->
			</div><!-- /main-container -->


 <?php 
$this->load->view('parts/footer');
  ?>
  <script>
			$(document).ready(function(){
			    $('#tablepelanggan').dataTable();
			});
		</script>

  <script>
  
  	     $(function(){
  	   	 $(document).on('click','#updatepelanggan-pilih',function(){
  	   	 	$("#updatepelanggan").modal();
	 	var kode_pelanggan = $(this).closest('tr').find('td:eq(1)').text();
	 	var nama_pelanggan = $(this).closest('tr').find('td:eq(2)').text();
	 	var alamat = $(this).closest('tr').find('td:eq(3)').text();
	 	var no_telp = $(this).closest('tr').find('td:eq(4)').text();
	 	var email = $(this).closest('tr').find('td:eq(5)').text();
	 	var sts = $(this).closest('tr').find('td:eq(6)').text();
		var sts1 = "Aktif";
		var sts2 = "Tidak Aktif";
	 	var keterangan = $(this).closest('tr').find('td:eq(7)').text();
	 	$('#kode_pelanggan').val(kode_pelanggan);
	 	$('#nama_pelanggan').val(nama_pelanggan);
	 	$('#alamat').val(alamat);
	 	$('#no_telp').val(no_telp);
	 	$('#email').val(email);
		 				 if (sts == sts1) {
		 	document.getElementById("rd_stsa").checked = true;
		 }
		 	else{
			document.getElementById("rd_ststa").checked = true;		 	
		}
		 
	 	$('#keterangan').val(keterangan);
	 	
});
  	   	 	$('.hapus-pelanggan').click(function(e){
    var kode_pelanggan = $(this).closest('tr').find('td:eq(1)').text();
    var url = $(this).closest('tr').find('a').attr('href');
      $('#message').dialog({
      title :"Konfirmasi",
      autoOpen : false,
      buttons : {
        'Ok' : function(){ 
          $.get(url,function(){
            location.reload();
          });
      
        },
        'Cancel' : function(){
          $(this).dialog('close');
        }
      }
     });

      e.preventDefault();
      var kode_pelanggan = $(this).closest('tr').find('td:eq(1)').text();
      $('#message').html('Apakah data <br> '+kode_pelanggan+' </b> akan dihapus?');
      $('#message').dialog('open');
     })
  	   	 });
	
  	function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
  </script>
