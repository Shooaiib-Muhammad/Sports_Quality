<?php

class supplierWiseTestController extends CI_Controller
{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('supplierWiseTestModel', 'SWTM');
 
 }

   public function index()
	{
		$data['MaterialTestTypes'] = $this->SWTM->getTestTypematerial();
		$this->load->view("supplierWiseTestView", $data);

	}
	public function submitSupplierTest(){
	    $testType= $_POST['customFileType'];
		$filename = $_FILES['customFileimage']['name'];

		$picture1 = '';
		if (!empty($_FILES['customFileimage']['name'])) {
			$config['upload_path'] = 'assets\img\supplier';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["customFileimage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('customFileimage')) {
				$uploadData = $this->upload->data();
				$picture1 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/supplier/' . $picture1;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture1 = '';
			}
		} else {
            $picture1 = '';
		}

		$data = $this->SWTM->submitSupplierTest($testType, $picture1);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
		
	}


	public function getSupplierTest(){
		$data = $this->SWTM->getSupplierTest();      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
	}
	public function getsignleSupplier(){
		$data = $this->SWTM->getsignleSupplier($_POST['tid']);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
	}

	public function updateSupplierData(){

		$data2 = $this->SWTM->getsignleSupplier($_POST['updateid']);
		if ($data2) {
			$path1 = 'assets/img/supplier/' . $data2[0]['image'];
			if (file_exists($path1)) {
				unlink($path1);
			}
		}
		$updateid = $_POST['updateid'];
		$filename = $_FILES['updateFileImage']['name'];

		$picture2 = '';
		if (!empty($_FILES['updateFileImage']['name'])) {
			$config['upload_path'] = 'assets\img\supplier';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['file_name'] = basename($_FILES["updateFileImage"]['name']);

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('updateFileImage')) {
				$uploadData = $this->upload->data();
				$picture2 = $uploadData['file_name'];
				$configi['image_library'] = 'gd2';
				$configi['source_image'] = $uploadData['full_path'];
				$configi['create_thumb'] = FALSE;
				$configi['maintain_ratio'] = FALSE;
				$configi['quality'] = 60;
				$configi['width'] = 800;
				$configi['height'] = 600;
				$configi['new_image'] = 'assets/img/supplier/' . $picture2;
				$this->load->library('image_lib');
                $this->image_lib->initialize($configi);    
                $this->image_lib->resize();
			} else {
				$picture2 = '';
			}
		} else {
            $picture2 = '';
		}

		$data = $this->SWTM->updateSupplierData($updateid, $picture2);      
            return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
	}


}
