<?php
include_once '../src/Command.php';

use PHPUnit\Framework\TestCase;
use Command\Command;

class CommandTest extends TestCase
{
  protected $arrayDeterminant;
  protected $stringDeterminant;
  protected $codeString;

  public function setUp(): void
  {
    $this->arrayDeterminant = [27, 33];
    $this->arrayParams = [48];
    $this->stringDeterminant = '!';
    $this->stringParams = '0';

    $this->arrayData = [27, 33, 48];
    $this->stringData = '!0';
    $this->codeString = 'ESC ! 0';
    $this->hexString = '1b2130';
  }

  public function testInitializeCommand()
  {
    $command = new Command($this->stringDeterminant, $this->stringParams);
    $this->assertSame($this->arrayDeterminant, $command->getDeterminant(), '<determinant> of command initialized with <string determinant & string params> is different from the expected value');
    $this->assertSame($this->arrayParams, $command->getParams(), '<params> of command initialized with <string determinant & string params> is different from the expected value');

    $command = new Command($this->stringDeterminant, $this->arrayParams);
    $this->assertSame($this->arrayDeterminant, $command->getDeterminant(), '<determinant> of command initialized with <string determinant & array params> is different from the expected value');
    $this->assertSame($this->arrayParams, $command->getParams(), '<params> of command initialized with <string determinant & array params> is different from the expected value');

    $command = new Command($this->arrayDeterminant, $this->arrayParams);
    $this->assertSame($this->arrayDeterminant, $command->getDeterminant(), '<determinant> of command initialized with <array determinant & string params> is different from the expected value');
    $this->assertSame($this->arrayParams, $command->getParams(), '<params> of command initialized with <array determinant & string params> is different from the expected value');

    $command = new Command($this->arrayDeterminant, $this->arrayParams);
    $this->assertSame($this->arrayDeterminant, $command->getDeterminant(), '<determinant> of command initialized with <array determinant & array params> is different from the expected value');
    $this->assertSame($this->arrayParams, $command->getParams(), '<params> of command initialized with <array determinant & array params> is different from the expected value');
  }

  public function testGetDeterminant()
  {
    $command = new Command($this->arrayDeterminant, []);
    $this->assertSame($this->arrayDeterminant, $command->getDeterminant());
  }

  public function testGetDeterminantLength()
  {
    $command = new Command($this->arrayDeterminant, []);
    $this->assertSame(count($this->arrayDeterminant), $command->getDeterminantLength());
  }

  public function testGetParams()
  {
    $command = new Command([], $this->arrayParams);
    $this->assertSame($this->arrayParams, $command->getParams());
  }

  public function testGetParamsLength()
  {
    $command = new Command([], $this->arrayParams);
    $this->assertSame(count($this->arrayParams), $command->getParamsLength());
  }

  public function testToIntArray()
  {
    $command = new Command($this->arrayDeterminant, $this->arrayParams);
    $this->assertSame($this->arrayData, $command->toIntArray());
  }
  public function testToString()
  {
    $command = new Command($this->arrayDeterminant, $this->arrayParams);
    $this->assertSame($this->stringData, $command->__toString());
  }
  public function testToHexString()
  {
    $command = new Command($this->arrayDeterminant, $this->arrayParams);
    $this->assertSame($this->hexString, $command->toHexString());
  }
  public function testToCodeString()
  {
    $command = new Command($this->arrayDeterminant, $this->arrayParams);
    $this->assertSame($this->codeString, $command->toCodeString());
  }
}
