<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('actionsmodel');
		$this->load->helper('url');
	}

	public function details($codeValeur = null)
	{
		// Css
		$data["css"] = array(
			base_url("assets/css/action_details.css"),
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css ",
			"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		);

		$data["js"] = array(
			"https://code.jquery.com/jquery-3.3.1.slim.min.js",
			"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js",
			"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js",
			"https://cdn.jsdelivr.net/npm/vue/dist/vue.js",
			base_url("assets/js/action_details.js"),
			base_url("assets/js/watchlist.js")
		);

		if($codeValeur == null)
		{
			echo "sorry!";
		}
		else
		{
			$data['data'] = json_encode($this->actionsmodel->getActionDetails($codeValeur));
			$this->load->view('Action/details', $data);
		}
	}
}
