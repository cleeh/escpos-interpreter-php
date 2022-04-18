<?php

namespace Data;

use Error;
use TypeError;

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

  public function __construct($input)
  {
    $inputType = gettype($input);
    if ($inputType == 'string') {
      $this->input = array_values(unpack('C*', $input));
    } else if ($inputType == 'array') {
      $this->input = $input;
    } else {
      throw new TypeError('Data input should be initialized with array<int> or string type data.');
    }
  }
}

class Data extends AbstractData
{
  public function toIntArray()
  {
    throw new Error('Not implemented');
  }

  public function __toString()
  {
    throw new Error('Not implemented');
  }

  public function toHexString()
  {
    throw new Error('Not implemented');
  }

  public function toCodeString()
  {
    throw new Error('Not implemented');
  }
}
