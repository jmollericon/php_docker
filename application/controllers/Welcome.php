<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

class Welcome extends CI_Controller
{
	public function __construct() {
        parent::__construct();
		$this->load->model('mainModel');
    }

	public function index() {
		$data['users'] = $this->mainModel->getUsers();
		$this->load->view('welcome_message', $data);
	}
	public function pdf() {
		$options = new Options();
		$options->set('defaultFont', 'Courier');
		$dompdf = new Dompdf($options);
		$dompdf->loadHtml('<h1>PHP, Mysql and Apache with Docker</h1>');
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream("PHP, Mysql, Apache with Docker.pdf", array("Attachment" => false));
	}
}
