<?php

namespace Rest\Controllers\Get;

use Slion\Http\Response;

/**
 * Description of MainResponse
 *
 * @author andares
 *
 * @property array $result
 */
class MainResponse extends Response {
    protected static $_default = [
        'result'    => [],
    ];
}
