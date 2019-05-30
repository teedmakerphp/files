<?php

namespace TMPHP\Files\Time;

use TMPHPFile;
use Exception;

class TimeBase
{
    protected $instance = null;

    public function __construct($value=null)
    {
        if ($value === null) {
            throw new Exception("[ERROR] Path is null.", 1);
        }
        if (is_string($value)) {
            $this->instance = new TMPHPFile($value);
            return true;
        }
        if (is_a($value, 'TMPHPFile')) {
            $this->instance = $value;
            return true;
        }
        throw new Exception("[ERROR] Object passed to TimeBase is invalid.", 1);
    }

    public function setInstance($object)
    {
        $this->instance = $object;
    }

}
