<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('actionsmodel');
		$this->load->helper('url');
	}

	public function index()
	{
		// Css
		$data["css"] = array(
			base_url("assets/css/investir.css"),
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css ",
		);

		$data["js"] = array(
			"https://code.jquery.com/jquery-3.3.1.slim.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
			"https://cdn.jsdelivr.net/npm/vue/dist/vue.js",
			"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js",
			"https://kit.fontawesome.com/2b28bccfd5.js",
			base_url("assets/js/investir.js")
		);

		$this->load->view('Investir\index', $data);
	}
}