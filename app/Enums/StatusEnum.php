<?php

namespace App\Enums;

enum StatusEnum:string
{

    case AVAILABLE = 'available';
    case RESERVED = 'reserved';
    case SOLD = 'sold';

}
