<?php
function loadLib($class) {
	if(file_exists($file = __DIR__ . "/Lib/" . $class . ".php")) {
		require($file);
	}
}
spl_autoload_register('loadLib');

class Sincere {
	private $initUrl = "http://101.201.171.67/portal/rest/act/init/4739";
	private $jsonpToken = "jQuery22401912203132518815_";
	private $drawUrl = "http://101.201.171.67/portal/rest/act//custom";
	private $openid = "o5CHRvif5WP9DAAaMmLiJFmjMfM4";
	private $openid2 = "o5CHRvtL_wGb3bxVQ48wTikN5jlI";
	private $appid = 4739;
	function __construct() {
		// $this->init();
	}
	function init() {
		$curl = new curl($this->initUrl);
		$curl->setparams(['callback' => $this->jsonpToken, '_' => time()]);
		$curl->exec();
	}
	function bk() {
		// 
	}
	function draw() {
		$time = time();
		$curl = new curl($this->drawUrl);
		$curl->setparams(['id' => $this->appid, 'ticket' => null, 'openId' => $this->openid, 'callback' => $this->jsonpToken . $time, '_' => $time]);
		$curl->exec();
		$time = time();
		$curl = new curl($this->drawUrl);
		$curl->setparams(['id' => $this->appid, 'ticket' => null, 'openId' => $this->openid2, 'callback' => $this->jsonpToken . $time, '_' => $time]);
		$curl->exec();
	}
}
