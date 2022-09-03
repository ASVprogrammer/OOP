<?php

namespace App;

class Overview
{
    public $gear;

    const GEAR_AUTOMATIC = 'automatic';
    const GEAR_MANUAL = 'manual';

    public function __construct($gear)
    {
        $this->gear = $gear;
    }
}

$overview = new Overview(Overview::GEAR_AUTOMATIC);
