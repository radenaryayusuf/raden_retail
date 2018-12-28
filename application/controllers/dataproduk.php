<?php 
class Dataproduk extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_produk');
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
        // $this->load->library('excel');//load PHPExcel library 
        $this->load->model('excel_data_insert_model');

	}
	function index(){
		$data['kode_produk'] = $this->m_produk->getkodeproduk();
 		$data['data_produk'] = $this->m_produk->getData();
		$this->load->view('view_produk',$data);


	}
public  function ExcelDataAdd() {  
//Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)    
         $configUpload['upload_path'] = FCPATH.'upload/';
         $configUpload['allowed_types'] = 'xls|xlsx|csv';
         $configUpload['max_size'] = '5000';
         $this->load->library('upload', $configUpload);
         $this->upload->do_upload('userfile');  
         $upload_data = $this->upload->data();//Returns array of containing all of the data related to the file you uploaded.
         $file_name = $upload_data['file_name']; //uploded file name
         $extension=$upload_data['file_ext'];    // uploded file extension
        
    $objReader =IOFactory::createReader('Excel5');     //For excel 2003 
    //$objReader= IOFactory::createReader('Excel2007'); // For excel 2007     
          //Set to read only
          $objReader->setReadDataOnly(true);          
        //Load excel file
         $objPHPExcel=$objReader->load(FCPATH.'upload/'.$file_name);      
         $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();   //Count Numbe of rows avalable in excel         
         $objWorksheet=$objPHPExcel->setActiveSheetIndex(0);                
          //loop from first data untill last data
          for($i=2;$i<=$totalrows;$i++)
          {
              $kodeproduk= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();           
              $tgl_registrasi= $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); //Excel Column 1
              $jenis= $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); //Excel Column 2
              $nama= $objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 2
              $harga=$objWorksheet->getCellByColumnAndRow(4,$i)->getValue(); //Excel Column 3
              $stok=$objWorksheet->getCellByColumnAndRow(5,$i)->getValue(); //Excel Column 4
              $status=$objWorksheet->getCellByColumnAndRow(6,$i)->getValue(); //Excel Column 4
              $keterangan=$objWorksheet->getCellByColumnAndRow(7,$i)->getValue(); //Excel Column 4
              $data_user=array(
               
                'kode_produk'       =>  $kodeproduk,
                'tgl_pengisian'     =>  $tgl_registrasi,
                'jenis_produk'      =>  $jenis,
                'nama'              =>  $nama,
                'harga'             =>  $harga,
                'stok'              =>  $stok,
                'status'            =>  $status,
                'keterangan'        =>  $keterangan
           );

                     $this->excel_data_insert_model->Produk($data_user);
             }

              unlink('./upload/'.$file_name); //File Deleted After uploading in database .           
             redirect('dataproduk');
               
       
      }
    // function import()
    // {
    //     $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
    //     foreach($file_data as $row)
    //     {
    //         $data[] = array(
    //             'kode_produk'    =>  $row["Kode Produk"],
    //             'tgl_pengisian'  =>  $row["Tanggal Pengisian"],
    //             'jenis_produk'   =>  $row["Jenis Produk"],
    //             'nama'           =>  $row["Nama Produk"],
    //             'harga'          =>  $row["Harga"],
    //             'stok'           =>  $row["Stok"],
    //             'status'         =>  $row["Status"],
    //             'keterangan'     =>  $row["Keterangan"]
    //         );
    //     }
    //     $this->csv_import_model_produk->insert($data);
    // }
	    function input(){

    
       if($this->input->post()){
        $this->m_produk->insert();
        redirect('dataproduk');
      }else{
            echo "Input gagal";

            }

            //$data['tampil'] = 'data';
    //  if($this->input->post('input_mobil')){
    //      $this->m->insert();
    //      redirect('mobil/input');
    //  }else{
    //  $data['tampil'] = 'input';
    //  $this->load->view('v-mobil',$data);
    // }
}

 function update(){
        if($this->input->post()){
            $this->m_produk->update();
           redirect('dataproduk');
        } else{
            echo "Update gagal";
        }
}
   function hapus($id){
    $this->m_produk->delete($id);
    redirect('dataproduk');

}
}
?>