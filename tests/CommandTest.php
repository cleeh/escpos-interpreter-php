<?php
include_once '../src/Command.php';

use PHPUnit\Framework\TestCase;
use Command\Command;

class CommandTest extends TestCase
{
  protected $arrayData;
  protected $stringData;
  protected $codeString;

  public function setUp(): void
  {
    $this->arrayData = array(27, 33, 48);
    $this->stringData = '!0';
    $this->codeString = 'ESC ! 0';
  }

  public function testInitializeCommand()
  {
    $command = new Command($this->stringData);
    $this->assertSame($this->arrayData, $command->toIntArray());

    $command = new Command($this->arrayData);
    $this->assertSame($this->arrayData, $command->toIntArray());
  }

  public function testToIntArray()
  {
    $command = new Command($this->arrayData);
    $this->assertSame($this->arrayData, $command->toIntArray());
  }
  public function testToString()
  {
    $command = new Command($this->arrayData);
    $this->assertSame($this->stringData, $command->__toString());
  }
  public function testToHexString()
  {
    $command = new Command($this->stringData);
    $this->assertSame("1b2130", $command->toHexString());
  }
  public function testToCodeString()
  {
    $command = new Command($this->arrayData);
    $this->assertSame($this->codeString, $command->toIntArray());
  }
}
