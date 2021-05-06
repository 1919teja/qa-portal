<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuditReports extends CI_Controller {
	public function __construct(){
		parent::__construct();
		  $this->load->library(['session']);
			$this->load->database();

			$this->load->model('AuditReportsModel', 'report');
	}

  public function index()
  {
		$result = $this->report->getReports();
		$data = array("records" => $result);
  	$this->load->view('audit/index', $data);
  }

  public function getStatus(){
	  
  }
}
