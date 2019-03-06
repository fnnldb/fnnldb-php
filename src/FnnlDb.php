<?php

namespace FnnlDb;

class FnnlDb
{
	/**
	 * API URL
	 *
	 * @var string
	 */
	private $api_url = 'https://api.fnnldb.com/v1/';

	/**
     * API Key
     *
     * @var string
     */
	private $key;

	/**
     * Create a new FnnlDb instance.
     *
     * @return void
     */
	public function __construct($key)
	{
		$this->key = $key;
	}

	/**
     * Send request to the API
     *
     * @return object
     */
	private function request($route, $data = [], $method = 'GET') {
		if ($method == 'GET') {
			$url = $this->api_url . $route . '&' . http_build_query($data);
		} else {
			$url = $this->api_url . $route . '&';
		}

		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);

		if ($method == 'POST') {
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
		}

		$response = curl_exec($curl);

		curl_close($curl);

		return $response;
	}

	/**
     * Create Lead
     *
     * @return object
     */
	public function createLead(Array $data)
	{
		$data['key'] = $this->key;
		return $this->request('leads/create', $data, 'POST');
	}

	/**
     * Create Order
     *
     * @return object
     */
	public function createOrder(Array $data)
	{
		$data['key'] = $this->key;
		return $this->request('orders/create', $data, 'POST');
	}

	/**
     * Send Order Confirmation
     *
     * @return object
     */
	public function confirmOrder(Array $data)
	{
		$data['key'] = $this->key;
		return $this->request('orders/confirm', $data, 'POST');
	}
}
