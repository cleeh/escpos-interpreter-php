<?php

namespace Command;

use Error;
use TypeError;

interface CommandInterface
{
  public function toIntArray();
  public function __toString();
  public function toHexString();
  public function toCodeString();

  public function getParams();
  public function getParamsLength();
}

abstract class AbstractCommand implements CommandInterface
{
  public $data = array();

  public function __construct($input)
  {
    $type = gettype($input);
    if ($type == 'string') {
      $this->data = array_values(unpack('C*', $input));
    } else if ($type == 'array') {
      $this->data = $input;
    } else {
      throw new TypeError('Command should be initialized with array<int> or string type data.');
    }
  }

  public function toIntArray()
  {
    return $this->data;
  }
  public function __toString()
  {
    throw new Error('Not implemented');
    return '';
  }
  public function toHexString()
  {
    $hexString = '';
    foreach($this->data as $decimal){
      $hexString .= dechex($decimal);
    }
    return $hexString;
  }
  public function toCodeString()
  {
    throw new Error('Not implemented');
    return '';
  }
}

class Command extends AbstractCommand
{
  public function getParams()
  {
    throw new Error('Not implemented');
    return array();
  }
  public function getParamsLength()
  {
    throw new Error('Not implemented');
    return 0;
  }
}
