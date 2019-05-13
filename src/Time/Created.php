<?php

namespace TMPHP\Files\Time;

use TMPHP\Files\{
    Time\TimeBase  as TimeBase,
    Time\TimeModel as TimeModel
};

class Created extends TimeBase implements TimeModel
{
    protected $path = null;
    protected $time = null;

    public function __construct($object) {
        parent::__construct($object);
    }

    public function isGreaterThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getCTime() > $object->getCTime();
    }

    public function isLessThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getCTime() < $object->getCTime();
    }
}
