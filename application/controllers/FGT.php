<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FGT extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LabModel', 'FGT');
    }

    public function index()
    {
        $data['loadFGT_H'] = $this->FGT->getFGRH();

        $this->load->view('FGT', $data);
    }
    public function undo($TID)
    {
        $data['undo'] = $this->FGT->undoFGT($TID);
    }
    public function FGT_H()
    {
        $forDataGet = $_POST['formData'];
        $dataArray = explode(',', $forDataGet);
        $pictureFresh = null;
        $pictureShooter = null;
        $pictureHydro = null;
        $pictureDrum = null;
        if (!empty($_FILES['fileFresh']['name'])) {
            $config['upload_path'] = 'assets\img\img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = basename($_FILES['fileFresh']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('fileFresh')) {
                $uploadData = $this->upload->data();
                $pictureFresh = $uploadData['file_name'];
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/img/img/' . $pictureFresh;
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 600;
                $config['new_image'] = 'assets/img/img/' . $pictureFresh;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
            } else {
                echo 'helll';

                $picture = '';
            }
        } else {
            $picture = '';
        }

        if (!empty($_FILES['fileShooter']['name'])) {
            $config['upload_path'] = 'assets\img\img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = basename($_FILES['fileShooter']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('fileShooter')) {
                $uploadData = $this->upload->data();
                $pictureShooter = $uploadData['file_name'];
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/img/img/' . $pictureShooter;
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 600;
                $config['new_image'] = 'assets/img/img/' . $pictureShooter;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
            } else {
                echo 'helll';

                $picture = '';
            }
        } else {
            $picture = '';
        }

        if (!empty($_FILES['fileHydro']['name'])) {
            $config['upload_path'] = 'assets\img\img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = basename($_FILES['fileHydro']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('fileHydro')) {
                $uploadData = $this->upload->data();
                $pictureHydro = $uploadData['file_name'];
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/img/img/' . $pictureHydro;
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 600;
                $config['new_image'] = 'assets/img/img/' . $pictureHydro;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
            } else {
                echo 'helll';

                $picture = '';
            }
        } else {
            $picture = '';
        }

        if (!empty($_FILES['fileDrum']['name'])) {
            $config['upload_path'] = 'assets\img\img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = basename($_FILES['fileDrum']['name']);

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('fileDrum')) {
                $uploadData = $this->upload->data();
                $pictureDrum = $uploadData['file_name'];
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/img/img/' . $pictureDrum;
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 600;
                $config['new_image'] = 'assets/img/img/' . $pictureDrum;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
            } else {
                echo 'helll';

                $picture = '';
            }
        } else {
            $picture = '';
        }

        $data = $this->FGT->FGT_H_insertion(
            $dataArray[0],
            $dataArray[1],
            $dataArray[2],
            $dataArray[3],
            $dataArray[4],
            $dataArray[5],
            $dataArray[6],
            $dataArray[7],
            $dataArray[8],
            $dataArray[9],
            $dataArray[10],
            $dataArray[11],
            $dataArray[12],
            $dataArray[13],
            $dataArray[14],
            $dataArray[15],
            $dataArray[16],
            $dataArray[17],
            $dataArray[18],
            $dataArray[19],
            $dataArray[20],
            $pictureFresh ? $pictureFresh : null,
            $pictureShooter ? $pictureShooter : null,
            $pictureHydro ? $pictureHydro : null,
            $pictureDrum ? $pictureDrum : null
        );
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function updated($reviewStatus, $approvedStatus, $TID)
    {
        //$data['Labtest']
        $data = $this->FGT->updatedStatusFGT(
            $reviewStatus,
            $approvedStatus,
            $TID
        );
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGT_D()
    {
        // $w1=$_POST['w1'];
        // $w2=$_POST['w1'];
        // print_r($_POST);die();
        $data = $this->FGT->FGT_D_insertion(
            $_POST['TID'],
            $_POST['w1'],
            $_POST['w2'],
            $_POST['c1_sp'],
            $_POST['c2_sp'],
            $_POST['sp1_sp'],
            $_POST['sp2_sp'],
            $_POST['lp1'],
            $_POST['lp2'],
            $_POST['rrt1'],
            $_POST['rrt2'],
            $_POST['rrt51'],
            $_POST['rrt52'],
            $_POST['rrt01'],
            $_POST['rrt02'],
            $_POST['c1_dp'],
            $_POST['c2_dp'],
            $_POST['sp_dp1'],
            $_POST['sp_dp2'],
            $_POST['lp_dp1'],
            $_POST['lp_dp2'],
            $_POST['m1'],
            $_POST['m2'],
            $_POST['wup1'],
            $_POST['wup2'],
            $_POST['c1_wrt'],
            $_POST['c2_wrt'],
            $_POST['sp1_wrt'],
            $_POST['sp2_wrt'],
            $_POST['dt1'],
            $_POST['dt2'],
            $_POST['abr1'],
            $_POST['abr2'],
            $_POST['uvlf1'],
            $_POST['uvlf2'],
            $_POST['otr1'],
            $_POST['otr2'],
            $_POST['hl1'],
            $_POST['hl2'],
            $_POST['hcc1'],
            $_POST['hcc2']
        );
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function FGT_PRINT()
    {
        $data['head'] = $this->FGT->FGT_PRINT_Head($_POST['TID']);
        $data['detail'] = $this->FGT->FGT_PRINT_Details($_POST['TID']);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}
