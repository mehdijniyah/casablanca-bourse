<?php

class CBApi
{
    private $baseUrl = "http://m.casablanca-bourse.com/";
    private $endpointListeActions = "action/list";
    private $endpointDetailsAction = "action/details";

    public function __construct()
	{

	}
    public function Get($endpoint)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->baseUrl . $endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

    public function Post($endpoint, $postData = "")
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->baseUrl . $endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS , $postData);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

    public function getListeActions()
    {
        $result = $this->Get($this->endpointListeActions);
        $resultJson = json_decode($result);
		return $resultJson->response;
    }

    public function getActionDetails($codeValeur)
	{
		$result = $this->Get($this->endpointDetailsAction . "/" . $codeValeur);
		$resultJson = json_decode($result);
		return $resultJson->response;
	}
}
