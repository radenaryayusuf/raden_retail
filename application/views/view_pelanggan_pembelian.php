	<?php 
$this->load->view('parts/header');
?>
<?php
$this->load->view('parts/nav');
 ?>

	<div class="main-container">
				                    	<div class="modal fade" id="addproduk">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        		<h4 class="modal-title">Daftar Produk <br><small>Silahkan isi keranjang belanja anda dengan produk dibawah ini.</small></h4>			        		
			      		</div>
			      		<div class="modal-body">
							                    <div class="form-group">
											
												</div>
												<div class="modal-footer">
			        		<button type="button" class="btn btn-default" data-dismiss="modal">Selesai</button>
			        		</div>
			    	</div>
			  	</div>
			</div>
		</div>
				<div class="padding-md">
										<ul class="breadcrumb">
						<li><span class="primary-font"><i class="icon-home"></i></span><a href="<?php echo base_url()?>"> Home</a></li>
						<li>Pelanggan</li>	  
						<li>Pembelian</li>	  
					</ul>

					<h3 class="m-left-xs header-text m-top-lg">Pembelian</h3>

					<div class="row">
						<div class="col-md-6">
							<div class="smart-widget">
								<div class="smart-widget-header">
									Informasi Pelanggan
									<span class="smart-widget-option">
										<span class="refresh-icon-animated">
											<i class="fa fa-circle-o-notch fa-spin"></i>
										</span>
			                            <a href="#" class="widget-toggle-hidden-option">
			                                <i class="fa fa-cog"></i>
			                            </a>
			                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
			                                <i class="fa fa-chevron-up"></i>
			                            </a>
			                            <a href="#" class="widget-refresh-option">
			                                <i class="fa fa-refresh"></i>
			                            </a>
			                            <a href="#" class="widget-remove-option">
			                                <i class="fa fa-times"></i>
			                            </a>
			                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-hidden-section">
										<ul class="widget-color-list clearfix">
											<li style="background-color:#20232b;" data-color="widget-dark"></li>
											<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
											<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
											<li style="background-color:#2baab1;" data-color="widget-green"></li>
											<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
											<li style="background-color:#fbc852;" data-color="widget-orange"></li>
											<li style="background-color:#e36159;" data-color="widget-red"></li>
											<li style="background-color:#7266ba;" data-color="widget-purple"></li>
											<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
											<li style="background-color:#fff;" data-color="reset"></li>
										</ul>
									</div>
									<div class="smart-widget-body">
										<form>
											
							                <div class="form-group"  id="test">
										<label for="exampleInputEmail1">Nama Pelanggan</label>
										<select class="select2 width-100" name="kode_pelanggan" id="kode_pelanggan">
												<option>Pilih Pelanggan</option>
									<?php
									if($data_pelanggan->num_rows() > 0)
									{
										foreach($data_pelanggan->result() as $p)
										{
											echo "<option value='".$p->kode_pelanggan."'>".$p->nama."</option>";
										}
									}
									?>
												</select>
									</div><!-- /form-group -->
									<div class="form-group">
										<label for="exampleInputPassword1">Alamat</label>
										<div id='alamat'><small><i>Tidak ada</i></small></div>
									</div><!-- /form-group -->
									<div class="form-group">
										<label for="exampleInputPassword1">No Telp</label>
										<div id='no_telp'><small><i>Tidak ada</i></small></div>
									</div><!-- /form-group -->
									<div class="form-group">
										<label for="exampleInputPassword1">Jenis Kelamin</label>
										<div id='jenis_kelamin'><small><i>Tidak ada</i></small></div>
									</div><!-- /form-group -->
										</form>
									</div>
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->
						</div><!-- /.col-->
						<div class="col-md-6">
							<div class="smart-widget">
								<div class="smart-widget-header">
									Tipe Pembayaran
									<span class="smart-widget-option">
										<span class="refresh-icon-animated">
											<i class="fa fa-circle-o-notch fa-spin"></i>
										</span>
			                            <a href="#" class="widget-toggle-hidden-option">
			                                <i class="fa fa-cog"></i>
			                            </a>
			                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
			                                <i class="fa fa-chevron-up"></i>
			                            </a>
			                            <a href="#" class="widget-refresh-option">
			                                <i class="fa fa-refresh"></i>
			                            </a>
			                            <a href="#" class="widget-remove-option">
			                                <i class="fa fa-times"></i>
			                            </a>
			                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-hidden-section">
										<ul class="widget-color-list clearfix">
											<li style="background-color:#20232b;" data-color="widget-dark"></li>
											<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
											<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
											<li style="background-color:#2baab1;" data-color="widget-green"></li>
											<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
											<li style="background-color:#fbc852;" data-color="widget-orange"></li>
											<li style="background-color:#e36159;" data-color="widget-red"></li>
											<li style="background-color:#7266ba;" data-color="widget-purple"></li>
											<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
											<li style="background-color:#fff;" data-color="reset"></li>
										</ul>
									</div>
									<div class="smart-widget-body">
										<form>
											
							                <div class="form-group"  id="tipe_bayar">
										<label for="exampleInputEmail1">Tipe Pembayaran : </label>
										<div class='row'>
										<div class="col-lg-9">
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="tipe1" name="tipe" value="Tunai">
													<label for="tipe1"></label>
												</div>
												<div class="inline-block vertical-top">Tunai </div>
											</div>&nbsp;
											<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="tipe2" name="tipe" value="Kredit">
													<label for="tipe2"></label>
												</div>
												<div class="inline-block vertical-top"> Kredit</div>
											</div>
										</div>
									</div>
									<div class='alert alert-info TotalBayar'>					
						<h2>Total : <span id='TotalBayar'>Rp. 0</span></h2>
						<input type="hidden" id='TotalBayarHidden'>&nbsp;
					</div>
									</div><!-- /form-group -->
										</form>
									</div>
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="row">
						<div class="col-md-6">
							<div class="smart-widget">
								<div class="smart-widget-header">
									Informasi Produk
									<span class="smart-widget-option">
										<span class="refresh-icon-animated">
											<i class="fa fa-circle-o-notch fa-spin"></i>
										</span>
			                            <a href="#" class="widget-toggle-hidden-option">
			                                <i class="fa fa-cog"></i>
			                            </a>
			                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
			                                <i class="fa fa-chevron-up"></i>
			                            </a>
			                            <a href="#" class="widget-refresh-option">
			                                <i class="fa fa-refresh"></i>
			                            </a>
			                            <a href="#" class="widget-remove-option">
			                                <i class="fa fa-times"></i>
			                            </a>
			                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-hidden-section">
										<ul class="widget-color-list clearfix">
											<li style="background-color:#20232b;" data-color="widget-dark"></li>
											<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
											<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
											<li style="background-color:#2baab1;" data-color="widget-green"></li>
											<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
											<li style="background-color:#fbc852;" data-color="widget-orange"></li>
											<li style="background-color:#e36159;" data-color="widget-red"></li>
											<li style="background-color:#7266ba;" data-color="widget-purple"></li>
											<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
											<li style="background-color:#fff;" data-color="reset"></li>
										</ul>
									</div>
									<div class="smart-widget-body">
										<form>
											
							                <div class="form-group"  id="test">
										<label for="exampleInputEmail1">Daftar Produk</label>
										
												   <table class="table table-bordered" id="Tabeldataproduk">
						      					<thead>
						        				<tr>
								        	<th>Kode</th>
								          	<th>Nama</th>
								          	<th>Harga</th>
								          	<th>Stok</th>
								          	<th>Keterangan</th>
								          	<th>Command</th>
						        		</tr>
						      		</thead>
						      		<tbody id="dataproduk">
									<?php 
		//
								foreach ($data_produk as $p) {
									echo "<tr id='pr".$p['kode_produk']."'>";
									echo "<td>".$p['kode_produk']."</td>";
									echo "<td>".$p['nama']."</td>";
									echo "<td>".$p['harga']."</td>";
									echo "<td>".$p['stok']."</td>";
									echo "<td>".$p['keterangan']."</td>";
									echo "<td><input type='button' class='btn btn-success' id='produk-pilih' value='Tambah'></td>";
								echo "</tr>";
								}

								 ?> 
							      	</tbody>
							    </table>

									</div><!-- /form-group -->
									
										</form>
									</div>
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->
						</div><!-- /.col-->
						<div class="col-md-6">
							<div class="smart-widget">
								<div class="smart-widget-header">
									Keranjang Belanja
									<span class="smart-widget-option">
										<span class="refresh-icon-animated">
											<i class="fa fa-circle-o-notch fa-spin"></i>
										</span>
			                            <a href="#" class="widget-toggle-hidden-option">
			                                <i class="fa fa-cog"></i>
			                            </a>
			                            <a href="#" class="widget-collapse-option" data-toggle="collapse">
			                                <i class="fa fa-chevron-up"></i>
			                            </a>
			                            <a href="#" class="widget-refresh-option">
			                                <i class="fa fa-refresh"></i>
			                            </a>
			                            <a href="#" class="widget-remove-option">
			                                <i class="fa fa-times"></i>
			                            </a>
			                        </span>
								</div>
								<div class="smart-widget-inner">
									<div class="smart-widget-hidden-section">
										<ul class="widget-color-list clearfix">
											<li style="background-color:#20232b;" data-color="widget-dark"></li>
											<li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
											<li style="background-color:#23b7e5;" data-color="widget-blue"></li>
											<li style="background-color:#2baab1;" data-color="widget-green"></li>
											<li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
											<li style="background-color:#fbc852;" data-color="widget-orange"></li>
											<li style="background-color:#e36159;" data-color="widget-red"></li>
											<li style="background-color:#7266ba;" data-color="widget-purple"></li>
											<li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
											<li style="background-color:#fff;" data-color="reset"></li>
										</ul>
									</div>
									<div class="smart-widget-body">
										<form>
											
							                <div class="form-group"  id="tipe_bayar">
										<table class="table table-bordered" id="TabelTransaksi">
						      		<thead>
						        		<tr>
						        			<th>Kode</th>
								        	<th>Nama</th>
								          	<th>Harga</th>
								          	<th>Stok</th>
								          	<th>Sub Total</th>
								          	<th>Command</th>
						        		</tr>
						      		</thead>
						      		<tbody id="keranjangsaya">

							      	</tbody>
							    </table>
							    <div class='row'>
									<div class='col-sm-6' style='padding-right: 0px;'>
										<button type='button' class='btn btn-danger btn-block' id='batal'>
											<i class='fa fa-ban'></i> Cancel
										</button>
									</div>
									<div class='col-sm-6'>
										<button type='button' class='btn btn-primary btn-block' id='Simpann'>
											<i class='fa fa-floppy-o'></i> Simpan
										</button>
									</div>
								</div>
									</div><!-- /form-group -->
										</form>
									</div>
								</div><!-- ./smart-widget-inner -->
							</div><!-- ./smart-widget -->
						</div><!-- /.col-->
					</div><!-- /.row -->
		        </div><!-- ./padding-md -->
			</div><!-- /main-container -->


 <?php 
$this->load->view('parts/footer');
  ?>
  		<!-- Parsley -->
		<script src="<?php echo base_url()?>assets/js/parsley.min.js"></script>

		<!-- jQuery Step -->
		<script src='<?php echo base_url()?>assets/js/jquery.steps.min.js'></script>
			<script>

			$(function (){
				//Wizard Step
	            $("#wizard").steps({
	                headerTag: "h2",
	                bodyTag: "section",
	                transitionEffect: "slideLeft"
	            
	            });
	        				        $('.select2').select2();

	    
	        });
	        $(document).ready(function(){
	        	$('#test select').change(function(){
		if($(this).val() !== '')
		{
			$.ajax({
				url: "<?=site_url("pelangganpembelian/munculdata_pelanggan")?>",
				type: "POST",
				cache: false,
				data: "kode_pelanggan="+$(this).val(),
				dataType:'json',
				success: function(json){
					$('#alamat').html(json.alamat);
					$('#no_telp').html(json.no_telp);

					$('#keterangan').html(json.keterangan);
				}
			});
		}
		else
		{
			$('#no_telp').html('<small><i>Tidak ada</i></small>');
			$('#alamat').html('<small><i>Tidak ada</i></small>');
			$('#keterangan').html('<small><i>Tidak ada</i></small>');
		}
	});
});

		</script>
		<script>
	

		function to_rupiah(angka){
    var rev     = parseInt(angka, 10).toString().split('').reverse().join('');
    var rev2    = '';
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return 'Rp. ' + rev2.split('').reverse().join('');
}
function HitungTotalBayar()
{
 var tot_belanja = 0;
      $('#keranjangsaya').find('.subtot').each(function(){
			tot_belanja += Number($(this).val());
			
      });
      $('#TotalBayar').html(to_rupiah(tot_belanja));
	$('#TotalBayarHidden').val(tot_belanja);
	}
$('#keranjangsaya').on('click', '.remove-barang', function(){
	
  	var kodebarang_keranjang = $(this).closest('tr').find('td:eq(0)').text();
	 var harga_keranjang = $(this).closest('tr').find('td:eq(2)').text();
     var stok_keranjang = $(this).closest('tr').find('td:eq(3)').text();
     if (stok_keranjang < 1) {
	  	  $(this).closest('tr').remove();
       	 document.getElementById("produk-pilih").disabled = false;
      }else{
      	if ($('#pr'+kodebarang_keranjang).length == 0) {
      	}else{
      		$('#pr'+kodebarang_keranjang).closest('tr').find('td:eq(3)').text(parseFloat($('#pr'+kodebarang_keranjang).closest('tr').find('td:eq(3)').text()) + 1);
      		$(this).closest('tr').find('td:eq(3)').text(parseFloat($(this).closest('tr').find('td:eq(3)').text()) - 1);
      		$('#'+kodebarang_keranjang).closest('tr').find('.subtot').val(parseFloat($('#'+kodebarang_keranjang).closest('tr').find('td:eq(3)').text()) * parseFloat($('#'+kodebarang_keranjang).closest('tr').find('td:eq(2)').text()));
      	}
      }


	HitungTotalBayar();
});

function check_int(evt) {
	var charCode = ( evt.which ) ? evt.which : event.keyCode;
	return ( charCode >= 48 && charCode <= 57 || charCode == 8 );
}
 $(document).on('click','#produk-pilih',function(){
	var kodebarang = $(this).closest('tr').find('td:eq(0)').text();
     var namabarang = $(this).closest('tr').find('td:eq(1)').text();
     var harga = $(this).closest('tr').find('td:eq(2)').text();
     var stok = $(this).closest('tr').find('td:eq(3)').text();
     var td = '<tr id="'+kodebarang+'">';
     var stk = 1;
     var sub_total = 0;
	td += '<td>'+kodebarang+'<input type="hidden" id="kode_pro" name="kode_pro[]" value="'+kodebarang+'"></td>';
	td += '<td>'+namabarang+'<input type="hidden" id="nama_pro" name="nama_pro" value="'+namabarang+'"></td>';
     td += '<td>'+harga+'<input type="hidden" id="harga_jual" name="harga_jual" value="'+harga+'"></td>';
     td += '<td>'+stk+'<input type="hidden" class="kuantitas" name="kuantitas" value="'+stk+'" readonly = "true" max="'+stok+'" min="1"></td>';
     td += '<td><input type="text" class="subtot" name="sub_totals" value="0" readonly="true"></td>';
     td += '<td><input type="button" class="btn btn-default btn-danger remove-barang" value="Remove"></td></tr>';

	  if (stok < 1) {
	  	 document.getElementById("produk-pilih").disabled = true;
      }else{

      	if ($('#'+kodebarang).length==0) {
      		$(this).closest('tr').find('td:eq(3)').text(parseFloat($(this).closest('tr').find('td:eq(3)').text()) - 1);
      		$('#TabelTransaksi').append(td);
      		$('#'+kodebarang).closest('tr').find('.subtot').val(parseFloat($('#'+kodebarang).closest('tr').find('td:eq(3)').html()) * parseFloat($('#'+kodebarang).closest('tr').find('td:eq(2)').text()));
      	}else{
      		$(this).closest('tr').find('td:eq(3)').text(parseFloat($(this).closest('tr').find('td:eq(3)').text()) - 1);
      		$('#'+kodebarang).closest('tr').find('td:eq(3)').html(parseFloat($('#'+kodebarang).closest('tr').find('td:eq(3)').html()) + 1);
      		$('#'+kodebarang).closest('tr').find('.subtot').val(parseFloat($('#'+kodebarang).closest('tr').find('td:eq(3)').html()) * parseFloat($('#'+kodebarang).closest('tr').find('td:eq(2)').text()));
      	}

      }
	HitungTotalBayar();     
 });

		</script>