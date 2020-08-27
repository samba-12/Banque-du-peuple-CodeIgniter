<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseController extends CI_Controller {
    public function __construct(){
       parent:: __construct();
       $this->load->model('EntrepriseModel');
    }
 /*    public function __construct(){
        $this->load->database();
    } */

	
	public function index()
	{
        $data['result'] = $this->EntrepriseModel->getAllData();
		$this->load->view('entreprise', $data);
    }

    public function create()
	{
        $this->EntrepriseModel->createDate();
        redirect("EntrepriseController");
    }
    public function list()
	{
       $data['result'] = $this->EntrepriseModel->getAllData();
        $this->load->view('listentreprise', $data);

    }

}
