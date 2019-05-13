<?php

namespace TMPHP\Files\Time;

interface TimeModel
{
    public function __construct($object);

    public function isGreaterThan($object);

    public function isLessThan($object);

}
