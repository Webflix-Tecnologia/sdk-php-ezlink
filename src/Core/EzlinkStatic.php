<?php

namespace Ezlink\Core;

class EzlinkStatic extends EzlinkController {
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::SANDBOX_STATIC,
        ]);
        parent::__construct($config);
    }
}