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
    $this->arrayData = [97, 98, 99, 32, 100, 101, 102];
    $this->stringData = 'abc def';
    $this->hexArray = ['61', '62', '63', '20', '64', '65', '66'];
    $this->hexString = '61626320646566';
    $this->codeString = 'a b c SP d e f';
  }

  public function testInitializeData()
  {
    $data = new Data($this->arrayData);
    $this->assertSame($this->arrayData, $data->toIntArray(), 'data initialized with decimal array data is different from the expected value');

    $data = new Data($this->stringData);
    $this->assertSame($this->arrayData, $data->toIntArray(), 'data initialized with string data is different from the expected value');
    
    $data = new Data($this->hexArray, true);
    $this->assertSame($this->arrayData, $data->toIntArray(), 'data initialized with hex array data is different from the expected value');

    $data = new Data($this->hexString, true);
    $this->assertSame($this->arrayData, $data->toIntArray(), 'data initialized with hex string data is different from the expected value');
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
