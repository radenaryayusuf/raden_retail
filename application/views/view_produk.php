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
		
		<form method="post" id="import_csv" action="<?php echo site_url();?>/dataproduk/ExcelDataAdd" enctype="multipart/form-data" method="post">
			<div class="form-group">
				<label>Select XLS File</label>
				<input type="file" name="userfile" required accept=".xls" />
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
echo form_open_multipart('dataproduk/input','class="form-horizontal" role="form" id="fpelanggan"');

 ?>
	<div class="modal fade" id="tambahpelanggan">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        		<h4 class="modal-title">Tambah Produk <br><small>Silahkan isi data produk di form ini.</small></h4>
			      		</div>
			      		<div class="modal-body">

			        		<form class="form-horizontal no-margin" id="type-constraint" data-validate="parsley" novalidate>
											<div class="form-group">
										<label class="col-lg-2 control-label">Jenis</label>
										<div class="col-lg-9">
											<select class="select2 width-100" name="jenis_produk">
												<option>Normal</option>
												<option>Penting</option>
												</select>
										</div><!-- /.col -->
									</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Nama</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" name="nama_produk" placeholder="Nama Produk">
													</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Harga</label>
												<div class="col-lg-9">
													<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" name="harga" id="harga_produk" class="form-control">
												<span class="input-group-addon">,00</span>
											</div><!-- /input-group -->
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Jumlah Stok</label>
												<div class="col-lg-3">
													<input type="number" class="form-control input-sm" name="jumlah_stok" id="jml_stok" placeholder="Jumlah Stok" value="1">
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
echo form_open_multipart('dataproduk/update','class="form-horizontal" role="form" id="fpelangganupdate"');

 ?>

	<div class="modal fade" id="updateproduk">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        		<h4 class="modal-title">Update Produk <br><small>Silahkan ubah data produk di form ini.</small></h4>
							<input type="hidden" name="kode_produk" id="kode_produk">			        		
			      		</div>
			      		<div class="modal-body">

			        		<form class="form-horizontal no-margin" id="type-constraint" data-validate="parsley" novalidate>
											<div class="form-group">
										<label class="col-lg-2 control-label">Jenis</label>
										<div class="col-lg-9">
											<select class="select2 width-100" name="jenis_produk" id="jenis_produk">
												<option>Normal</option>
												<option>Penting</option>
												</select>
										</div><!-- /.col -->
									</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Nama</label>
												<div class="col-lg-9">
													<input type="text" class="form-control input-sm" name="nama_produk" id="nama" placeholder="Nama Produk">
													</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Harga</label>
												<div class="col-lg-9">
													<div class="input-group">
												<span class="input-group-addon">Rp.</span>
												<input type="text" id="harga_produk" name="harga" class="form-control harga">
												<span class="input-group-addon">,00</span>
											</div><!-- /input-group -->
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Jumlah Stok</label>
												<div class="col-lg-3">
													<input type="number" class="form-control input-sm stok" name="jumlah_stok" id="stok" placeholder="Jumlah Stok" value="1">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											<div class="form-group">
												<label class="control-label col-lg-2">Status</label>
											<div class="col-lg-9">
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="rd_aktif" name="sts" value="Aktif">
													<label for="rd_aktif"></label>
												</div>
												<div class="inline-block vertical-top">Aktif </div>
											</div>&nbsp;
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="rd_unaktif" name="sts" value="Tidak Aktif">
													<label for="rd_unaktif"></label>
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

				<div class="padding-md">
					<ul class="breadcrumb">
						<strong>Data Produk</strong> 
						<span class="col-xs-offset-8">
						<button class="btn btn-primary" data-toggle="modal" data-target="#importmodal"><i class="fa fa-file-excel-o m-right-xs" aria-hidden="true"></i>Import Data</button>
						<button class="btn btn-primary" data-toggle="modal" data-target="#tambahpelanggan"><i class="fa fa-plus-square-o m-right-xs" aria-hidden="true"></i>Tambah Produk</button></span>
					</ul>

					<table class="table table-striped" id="tableproduk">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode</th>
								<th>Jenis</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Jumlah Stok</th>
								<th>Status</th>
								<th>Keterangan</th>
								<th>Commands</th>
							</tr>
						</thead>
						<tbody>
							<?php 
		$i = 1;
		foreach ($data_produk as $p) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$p['kode_produk']."</td>";
			echo "<td>".$p['jenis_produk']."</td>";
			echo "<td>".$p['nama']."</td>";
			echo "<td>".$p['harga']."</td>";
			echo "<td>".$p['stok']."</td>";
			echo "<td>".$p['status']."</td>";
			echo "<td>".$p['keterangan']."</td>";
			echo "<td>".anchor('dataproduk/hapus/'.$p['kode_produk'],'<input type="button"  class="btn btn-danger hapus-pelanggan" value= "Hapus"> | ');
			echo "<input type='button' class='btn btn-warning' id='updateproduk-pilih' value='Edit'></td>";
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
    <!-- Select2 -->
 
  <script>
  	$(document).ready(function(){
			    $('#tableproduk').dataTable();
			});
  	$('#harga_produk').number(true,0);
  	  //Select2
        $('.select2').select2();

  	 $('#jml_stok').blur(function(){   
  	 	var banyakstok = Number($(this).val());
		if(banyakstok < 0 || banyakstok == 0 ){

		    $('#jml_stok').val('1');
 		 }
 		 });

 $('#stok').blur(function(){   
  	 	var banyakstok = Number($(this).val());
		if(banyakstok < 0 || banyakstok == 0 ){

		    $('#stok').val('1');
 		 }
 		 });

</script>

  <script>
  
  	     $(function(){
  	   	 $(document).on('click','#updateproduk-pilih',function(){
  	   	 	$("#updateproduk").modal();
	 	var kode_produk = $(this).closest('tr').find('td:eq(1)').text();
	 	var jenis_produk = $(this).closest('tr').find('td:eq(2)').text();
	 	var nama = $(this).closest('tr').find('td:eq(3)').text();
	 	var harga = $(this).closest('tr').find('td:eq(4)').text();
	 	var stok = $(this).closest('tr').find('td:eq(5)').text();
	 	var sts = $(this).closest('tr').find('td:eq(6)').text();
		var sts1 = "Aktif";
		var sts2 = "Tidak Aktif";
	 	var keterangan = $(this).closest('tr').find('td:eq(7)').text();
	 	$('#kode_produk').val(kode_produk);
	 	$('#jenis_produk').val(jenis_produk);
	 	$('#nama').val(nama);
	 	$('.harga').val(harga).number(true,0);
	 	$('.stok').val(stok);
		 				 if (sts == sts1) {
		 	document.getElementById("rd_aktif").checked = true;
		 }
		 	else{
			document.getElementById("rd_unaktif").checked = true;		 	
		}
		 
	 	$('#keterangan').val(keterangan);
	 	
});
  	   	 	$('.hapus-pelanggan').click(function(e){
    var kode_produk = $(this).closest('tr').find('td:eq(1)').text();
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
      var kode_produk = $(this).closest('tr').find('td:eq(1)').text();
      $('#message').html('Apakah data <br> '+kode_produk+' </b> akan dihapus?');
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
