<?php

namespace Data;

include_once '../src/ControlAscii.php';

use TypeError;
use Ascii\ControlAscii;

interface DataInterface
{
  public function toIntArray();
  public function __toString();
  public function toHexString();
  public function toCodeString();
}

abstract class AbstractData implements DataInterface
{
  protected $input;

  public function __construct($input, $isHex = false)
  {
    $inputType = gettype($input);
    if ($inputType == 'string') {
      $this->input = $isHex ? array_map(function ($hex) {
        return hexdec($hex);
      }, str_split($input, 2)) : array_values(unpack('C*', $input));
    } else if ($inputType == 'array') {
      $this->input = $isHex ? array_map(function ($hex) {
        return hexdec($hex);
      }, $input) : $input;
    } else {
      throw new TypeError('Data input should be initialized with array<int> or string type data.');
    }
  }

  public function toIntArray()
  {
    return $this->input;
  }

  public function __toString()
  {
    $ascii = '';
    foreach ($this->input as $decimal) {
      $ascii .= chr($decimal);
    }
    return $ascii;
  }

  public function toHexString()
  {
    $hexString = '';
    foreach ($this->input as $decimal) {
      $hexString .= dechex($decimal);
    }
    return $hexString;
  }

  public function toCodeString()
  {
    $codeString = '';
    foreach ($this->input as $decimal) {
      $codeString .= ControlAscii::toAsciiCodeString($decimal) . ' ';
    }
    return trim($codeString);
  }
}

class Data extends AbstractData
{
}
