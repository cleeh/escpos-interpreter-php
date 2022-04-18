<?php
include_once '../src/Interpreter.php';
include_once '../src/Command.php';
include_once '../src/Data.php';

use PHPUnit\Framework\TestCase;
use Interpreter\Interpreter;
use Command\Command;
use Data\Data;

class InterpreterTest extends TestCase
{
  private $parsed;
  private $stringData;

  public function setUp(): void
  {
    $this->parsed = [
      new Command([1, 2, 3], [4, 5, 6]),
      new Data([7, 8, 9])
    ];
    $this->stringData = 'Need to filled in';
  }

  public function testParse()
  {
    $interpreter = new Interpreter();
    $this->assertSame($this->parsed, $interpreter->Parse($this->stringData));
  }
}
