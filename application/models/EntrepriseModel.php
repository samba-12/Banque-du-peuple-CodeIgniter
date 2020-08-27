<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrepriseModel extends CI_Model {

    public function __construct(){
        $this->load->database();
    }
	public function index()
	{
		$this->load->view('entreprise');
    }
    public function createDate(){
        $data = array(
            'nom_entreprise' => $this -> input->post('nom_entreprise'),
            'adresse' => $this -> input->post('adresse'),
            'email' => $this -> input->post('email'),
            'telephone' => $this -> input->post('telephone'),
            'compte' => $this -> input->post('compte'),
            'ninea' => $this -> input->post('ninea'),
            'numero' => $this -> input->post('numero'),
        );
        $this->db->insert('Entreprise', $data);
    }
    function getAllData(){
        $query = $this->db->query('SELECT * FROM Entreprise');
        return $query->result();
    }
}
