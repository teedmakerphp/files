<?php

namespace TMPHP\Files\Time;

use TMPHP\Files\{
    Time\TimeBase  as TimeBase,
    Time\TimeModel as TimeModel
};

class Modified extends TimeBase implements TimeModel
{
    protected $path = null;
    protected $time = null;

    public function __construct(string $value) {
        parent::__construct($value);
    }

    public function isGreaterThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getMTime() > $object->getMTime();
    }

    public function isLessThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getCTime() < $object->getCTime();
    }
}
