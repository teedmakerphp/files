<?php

namespace TMFiles\Time;

use TMFiles\{
    TMFile         as TMFile,
    Time\TimeBase  as TimeBase,
    Time\TimeModel as TimeModel
};
use Exception;

class Created extends TimeBase implements TimeModel
{
    protected $path = null;
    protected $time = null;

    public function __construct($object) {
        parent::__construct($object);
    }

    public function isGreaterThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getMTime() > $object->getMTime();
    }

    public function isLessThan($object) {
        $object = $this->generateAObject($object);
        return $this->instance->getMTime() < $object->getMTime();
    }
}
