<?php
include_once '../src/systems/Io.php';
include_once '../src/ControlAscii.php';

use PHPUnit\Framework\TestCase;
use IO\File;
use Ascii\ControlAscii;

class CommandJsonTest extends TestCase
{
  private $commandJson;

  public function setUp(): void
  {
    $this->commandJson = File::readJson("../data/command.json");
  }

  public function testHex()
  {
    foreach ($this->commandJson as $command) {
      $hex = '';
      foreach ($command["array"] as $decimal) {
        $hex .= str_pad(dechex($decimal), 2, '0', STR_PAD_LEFT);
      }

      $this->assertSame($hex, $command["hex"]);
    }
  }

  public function testCode()
  {
    foreach ($this->commandJson as $command) {
      $codes = array_map(function ($decimal) {
        return ControlAscii::toAsciiCodeString($decimal);
      }, $command["array"]);

      $this->assertSame(implode(' ', $codes), $command["code"]);
    }
  }
}
