<?php

namespace TMPHP\Files\Time;

use TMPHPFile;
use Exception;

class TimeBase
{
    protected $instance = null;

    public function __construct(string $path=null) {
        if($path!==null) {
            $this->instance = new TMPHPFile($path);
        }
    }

    public function setInstance($object) {
        $this->instance = $object;
    }

}
