<?php
namespace Command;

include_once 'ControlAscii.php';

use Error;
use TypeError;
use Ascii\ControlAscii;

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
  protected $determinant = [];
  protected $params = [];

  public function __construct($determinant, $params)
  {
    $determinantType = gettype($determinant);
    if ($determinantType == 'string') {
      $this->determinant = array_values(unpack('C*', $determinant));
    } else if ($determinantType == 'array') {
      $this->determinant = $determinant;
    } else {
      throw new TypeError('Command determinant should be initialized with array<int> or string type data.');
    }

    $paramsType = gettype($params);
    if ($paramsType == 'string') {
      $this->params = array_values(unpack('C*', $params));
    } else if ($paramsType == 'array') {
      $this->params = $params;
    } else {
      throw new TypeError('Command params should be initialized with array<int> or string type data.');
    }
  }

  public function toIntArray()
  {
    return array_merge($this->determinant, $this->params);
  }

  public function __toString()
  {
    $ascii = '';
    foreach ($this->determinant as $decimal) {
      $ascii .= chr($decimal);
    }
    foreach ($this->params as $decimal) {
      $ascii .= chr($decimal);
    }
    return $ascii;
  }

  public function toHexString()
  {
    $hexString = '';
    foreach ($this->determinant as $decimal) {
      $hexString .= dechex($decimal);
    }
    foreach ($this->params as $decimal) {
      $hexString .= dechex($decimal);
    }
    return $hexString;
  }

  public function toCodeString()
  {
    $codeString = '';
    foreach ($this->determinant as $decimal) {
      $codeString .= ($decimal >= 0 && $decimal <= 31 || $decimal == 127) ? ControlAscii::toAsciiCodeString($decimal) . ' ' : chr($decimal) . ' ';
    }
    foreach ($this->params as $decimal) {
      $codeString .= ($decimal >= 0 && $decimal <= 31 || $decimal == 127) ? ControlAscii::toAsciiCodeString($decimal) . ' ' : chr($decimal) . ' ';
    }
    return trim($codeString);
  }

  public function getDeterminant()
  {
    return $this->determinant;
  }

  public function getDeterminantLength()
  {
    return count($this->determinant);
  }

  public function getParams()
  {
    return $this->params;
  }

  public function getParamsLength()
  {
    return count($this->params);
  }
}

class Command extends AbstractCommand
{
}
