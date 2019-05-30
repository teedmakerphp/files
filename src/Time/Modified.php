<?php

namespace TMPHP\Files\Time;

use TMPHP\Files\{
    Time\TimeBase  as TimeBase,
    Time\TimeModel as TimeModel
};

use TMPHPFile;

class Modified extends TimeBase implements TimeModel
{
    public function __construct($value) {
        parent::__construct($value);
    }

    public function isGreaterThan($value) {
        $object = is_string($value) ? new TMPHPFile($value) : $value;
        return $this->instance->getMTime() > $object->modified()->instance->getMTime();
    }

    public function isLessThan($value) {
        $object = is_string($value) ? new TMPHPFile($value) : $value;
        return $this->instance->getMTime() < $object->modified()->instance->getMTime();
    }
}
