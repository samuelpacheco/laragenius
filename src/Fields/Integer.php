<?php

namespace S4mpp\Laragenius\Fields;

use S4mpp\Laragenius\Stub;
use S4mpp\Laragenius\Contracts\FakerInterface;

class Integer implements FakerInterface
{
    public function getFaker(string $field_name): Stub
    {
        return new Stub('factory/fakers/random-number');
    }
}
