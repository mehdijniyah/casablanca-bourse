<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('actionsmodel');
		$this->load->helper('url');
	}
	public function index($codeValeur = null)
	{
		// Css
		$data["css"] = array(
			base_url("assets/css/about.css"),
			base_url("assets/css/sideBar.css"),
 			"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css",
		);

		$data["js"] = array(
			"https://cdn.jsdelivr.net/npm/vue/dist/vue.js",
			"https://kit.fontawesome.com/2b28bccfd5.js",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
			"https://code.jquery.com/jquery-3.3.1.slim.min.js",
			base_url("assets/js/about.js")
		);

		$this->load->view('About/index', $data);

	}
}
