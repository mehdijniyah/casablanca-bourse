<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watchlist extends CI_Controller
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
			base_url("assets/css/actions.css"),
			base_url("assets/css/actions_details.css"),
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css",
		);

		$data["js"] = array(
			"https://code.jquery.com/jquery-3.3.1.slim.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
			"https://cdn.jsdelivr.net/npm/vue/dist/vue.js",
			"https://kit.fontawesome.com/2b28bccfd5.js",
			base_url("assets/js/listeactions.js"),
			base_url("assets/js/watchlist.js")
		);

		$data['data'] = json_encode($this->actionsmodel->getListeActions());

		$this->load->view('Watchlist\index', $data);
	}
}
