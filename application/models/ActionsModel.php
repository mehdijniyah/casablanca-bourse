<?php

class ActionsModel extends CI_Model
{
	public function __construct()
	{
		$this->load->library("CBApi");
	}

	public function getListeActions()
	{
		return $this->cbapi->getListeActions();
	}

	public function getActionDetails($codeValeur)
	{
		return $this->cbapi->getActionDetails($codeValeur);
	}
}
