<?php
class curl {
	private $baseurl;
	private $requesturl;
	private $header = [];
	private $params;
	function __construct($baseurl) {
		$this->baseurl = $baseurl;
	}
	function setpath($path) {
		$this->requesturl = $this->baseurl . $path;
	}
	function setheader($header) {
		$this->header = $header;
	}
	function setparams($params) {
		$this->params = $params;
	}
	function exec($data = '') {
		$this->setpath('?' . http_build_query($this->params));
		echo $this->requesturl . PHP_EOL;
		$ch = curl_init($this->requesturl);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$res = curl_exec($ch);
		echo $res . PHP_EOL;
		echo curl_error($ch);
		return $res;
	}
}