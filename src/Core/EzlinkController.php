<?php

namespace Ezlink\Core;

use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt\PublicKeyLoader;

class EzlinkController extends EzlinkHttp {
    protected $developerKey;

    public function __construct(array $config = []) {        
        parent::__construct($config);
    }

    /**
     * @return mixed
     */
    public function getDeveloperKey()  {
        return $this->developerKey;
    }

    /**
     * @param mixed $developerKey
     */
    public function setDeveloperKey($developerKey) {
        $this->developerKey = $developerKey;
        return $this;
    }
}
