<?php

namespace Ezlink\Core;

use GuzzleHttp\Client;

class EzlinkHttp {
    protected Client $http;
    protected $config;
    const SANDBOX_HOTEL = "https://test.ezconnect.link/v1/hotel/";
    const PRODUCTION_HOTEL = "";
    const SANDBOX_STATIC = "https://test.ezconnect.link/v1/static/";
    const PRODUCTION_STATIC = "";
           
    public function __construct(array $config = []) {   
        $defaultConfig = array(
            'base_uri' => '',
            'timeout' => 30,
            'headers' => array(
                'content-type' => 'application/json',
            )
        );
        $this->config = array_replace_recursive($defaultConfig, $config);
        $this->http = new Client($this->config);
    }
}
