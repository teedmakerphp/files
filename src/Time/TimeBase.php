<?php

namespace TMFiles\Time;

class TimeBase
{
    protected $instance = null;

    public function __construct($object) {
        $this->instance = $this->generateaObject($object);
    }

    /**
     * Getting the TMFile object from the passed
     *
     * @param [type] $object
     * @return void
     */
    protected function generateAObject($object) {
        if (is_string($object)) {
            $object = new TMFile($object);
        }
        if (!is_a($object, 'TMFile')) {
            throw new Exception("The object passed is a invalid type.");
        }
        return $object;
    }

}
