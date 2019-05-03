<?php

namespace TMPHP\Files\Time;

class TimeBase
{
    protected $instance = null;

    public function __construct($object) {
        $this->instance = $this->generateaObject($object);
    }

    /**
     * Getting the TMPHPFile object from the passed
     *
     * @param [type] $object
     * @return void
     */
    protected function generateAObject($object) {
        if (is_string($object)) {
            $object = new TMPHPFile($object);
        }
        if (!is_a($object, 'TMPHPFile')) {
            throw new Exception("The object passed is a invalid type.");
        }
        return $object;
    }

}
