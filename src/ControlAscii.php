<?php

namespace Ascii;

include_once 'systems/Io.php';

use IO\File;

/**
 * this file is part of ascii code: PHP 
 * This software is distributed under the terms of the MIT license. See LICENSE.md
 * for details.
 */
interface Ascii
{
    public static function toAsciiCodeString($code): string;
}

class ControlAscii implements Ascii
{   
    public static function toAsciiCodeString($code): string
    {
        $index = is_int($code) ? "decimal" : "hex";
        $asciiCodes = File::readJson('../data/ascii.json');
        foreach ($asciiCodes as $key => $value) {
            if ($value[$index] == $code) {
                return $value['text'];
            }
        }
        return '';
    }
}
