<?php
include_once '../src/Data.php';

use PHPUnit\Framework\TestCase;
use Data\Data;

class DataTest extends TestCase
{
  private $arrayData;
  private $stringData;
  private $hexString;
  private $codeString;

  public function setUp(): void
  {
    $this->arrayData = [1, 2, 3];
    $this->stringData = 'Need to be filled in';
    $this->hexString = 'Need to be filled in';
    $this->codeString = 'Need to be filled in';
  }

  public function testToIntArray()
  {
    $data = new Data($this->arrayData);
    $this->assertSame($this->arrayData, $data->toIntArray());
  }
  public function testToString()
  {
    $data = new Data($this->arrayData);
    $this->assertSame($this->stringData, $data->__toString());
  }
  public function testToHexString()
  {
    $data = new Data($this->arrayData);
    $this->assertSame($this->hexString, $data->toHexString());
  }
  public function testToCodeString()
  {
    $data = new Data($this->arrayData);
    $this->assertSame($this->codeString, $data->toCodeString());
  }
}
