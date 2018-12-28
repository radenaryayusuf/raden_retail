<?php 
class Datapelanggan extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_pelanggan');
        // $this->load->model('csv_import_model');
        // $this->load->library('csvimport');
     $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
        // $this->load->library('excel');//load PHPExcel library 
        $this->load->model('excel_data_insert_model');

	}
	function index(){
		$data['kode_pelanggan'] = $this->m_pelanggan->getkodepelanggan();
 		$data['data_pelanggan'] = $this->m_pelanggan->getData();
		$this->load->view('view_pelanggan',$data);


	}
 //   public function upload(){
 //  $fileName = $this->input->post('file', TRUE);

 //  $config['upload_path'] = './upload/'; 
 //  $config['file_name'] = $fileName;
 //  $config['allowed_types'] = 'xls|xlsx|csv|ods|ots';
 //  $config['max_size'] = 10000;

 //  $this->load->library('upload', $config);
 //  $this->upload->initialize($config); 
  
 //  if (!$this->upload->do_upload('file')) {
 //   $error = array('error' => $this->upload->display_errors());
 //   $this->session->set_flashdata('msg','Ada kesalah dalam upload'); 
 //   redirect('datapelanggan'); 
 //  } else {
 //   $media = $this->upload->data();
 //   $inputFileName = 'upload/'.$media['file_name'];
   
 //   try {
 //    $inputFileType = IOFactory::identify($inputFileName);
 //    $objReader = IOFactory::createReader($inputFileType);
 //    $objPHPExcel = $objReader->load($inputFileName);
 //   } catch(Exception $e) {
 //    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
 //   }

 //   $sheet = $objPHPExcel->getSheet(0);
 //   $highestRow = $sheet->getHighestRow();
 //   $highestColumn = $sheet->getHighestColumn();

 //   for($row = 2; $row <= $highestRow; $row++){  
 //     $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
 //       NULL,
 //       TRUE,
 //       FALSE);
 //     $data = array(
 //     "kode_pelanggan"=> $rowData[0][0],
 //     "tgl_registrasi"=> $rowData[0][1],
 //     "nama"=> $rowData[0][2],
 //     "alamat"=> $rowData[0][3],
 //     "no_telp"=> $rowData[0][4],
 //     "email"=> $rowData[0][5],
 //     "status"=> $rowData[0][6],
 //     "keterangan"=> $rowData[0][7]
 //    );
    
 //   $this->db->insert("t_pelanggan",$data); 
   
 //   }
 //   $this->session->set_flashdata('msg','Berhasil upload ...!!'); 
 //   redirect('datapelanggan');
 //  }  
 // } 
    //  public function upload(){
    //     $fileName = time().$_FILES['file']['name'];
         
    //     $config['upload_path'] = FCPATH.'upload'; //buat folder dengan nama assets di root folder
    //     $config['file_name'] = $fileName;
    //     $config['allowed_types'] = 'xls|xlsx|csv';
    //     $config['max_size'] = 10000;
         
    //     $this->load->library('upload');
    //     $this->upload->initialize($config);
         
    //     if(! $this->upload->do_upload('file') )
    //     $this->upload->display_errors();
             
    //     $media = $this->upload->data('file');
    //     $inputFileName = FCPATH.'upload'.$media['file_name'];
         
    //     try {
    //             $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    //             $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    //             $objPHPExcel = $objReader->load($inputFileName);
    //         } catch(Exception $e) {
    //             die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    //         }
 
    //         $sheet = $objPHPExcel->getSheet(0);
    //         $highestRow = $sheet->getHighestRow();
    //         $highestColumn = $sheet->getHighestColumn();
             
    //         for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
    //             $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
    //                                             NULL,
    //                                             TRUE,
    //                                             FALSE);
                                                 
    //             //Sesuaikan sama nama kolom tabel di database                                
    //              $data = array(
    //                 "kode_pelanggan" => $rowData[0][0],
    //                 "tgl_registrasi" => $rowData[0][1],
    //                 "nama" => $rowData[0][2],
    //                 "alamat" => $rowData[0][3],
    //                 "no_telp" => $rowData[0][4],
    //                 "email" => $rowData[0][5],
    //                 "status" => $rowData[0][6],
    //                 "keterangan" => $rowData[0][7],
    //             );
                 
    //             //sesuaikan nama dengan nama tabel
    //             $insert = $this->db->insert("t_pelanggan",$data);
    //             delete_files($media['file_path']);
                     
    //         }
    //     redirect('datapelanggan');
    // }

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
              $kodepelanggan= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();           
              $tgl_registrasi= $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); //Excel Column 1
              $nama= $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); //Excel Column 2
              $alamat=$objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 3
              $no_telp=$objWorksheet->getCellByColumnAndRow(4,$i)->getValue(); //Excel Column 4
              $email=$objWorksheet->getCellByColumnAndRow(5,$i)->getValue(); //Excel Column 4
              $status=$objWorksheet->getCellByColumnAndRow(6,$i)->getValue(); //Excel Column 4
              $keterangan=$objWorksheet->getCellByColumnAndRow(7,$i)->getValue(); //Excel Column 4
              $data_user=array(
               
                'kode_pelanggan'    =>  $kodepelanggan,
                'tgl_registrasi'    =>  $tgl_registrasi,
                'nama'              =>  $nama,
                'alamat'            =>  $alamat,
                'no_telp'           =>  $no_telp,
                'email'             =>  $email,
                'status'            =>  $status,
                'keterangan'        =>  $keterangan
           );

                     $this->excel_data_insert_model->Add_User($data_user);
             }

              unlink('./upload/'.$file_name); //File Deleted After uploading in database .           
             redirect('datapelanggan');
               
       
      }
    // function import(){
    //     error_reporting(0);
    //     echo "<pre>";
    //     print_r($_FILES);

    //     $config = array(
    //         'upload_path' => './upload/',
    //         'allowed_types' => 'xls|xlsx|csv'
    //     );
    //     $this->load->library('upload',$config);

    //     if($this->upload->do_upload('excel_file')){
    //         $data = $this->upload->data();
    //     }else{
    //         $error = array('error' => $this->upload->display_errors());
    //         print_r($error);
    //     }
    // }

    // function import()
    // {
    //     $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
    //     foreach($file_data as $row)
    //     {
    //         $data[] = array(
    //             'kode_pelanggan'    =>  $row["Kode Pelanggan"],
    //             'tgl_registrasi'    =>  $row["Tanggal Registrasi"],
    //             'nama'              =>  $row["Nama Pelanggan"],
    //             'alamat'            =>  $row["Alamat"],
    //             'no_telp'           =>  $row["No Telp"],
    //             'email'             =>  $row["Email"],
    //             'status'            =>  $row["Status"],
    //             'keterangan'        =>  $row["Keterangan"]
    //         );
    //     }
    //     $this->csv_import_model->insert($data);
    // }
	    function input(){

    
       if($this->input->post()){
        $this->m_pelanggan->insert();
        redirect('datapelanggan');
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
            $this->m_pelanggan->update();
           redirect('datapelanggan');
        } else{
            echo "Update gagal";
        }
}
   function hapus($id){
    $this->m_pelanggan->delete($id);
    redirect('datapelanggan');

}
}
?>