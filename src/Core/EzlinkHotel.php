<?php

namespace Ezlink\Core;

class EzlinkHotel extends EzlinkController  {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_HOTEL,
        ]);
        parent::__construct($config);
    }
}