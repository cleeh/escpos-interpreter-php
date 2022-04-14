<?php
include_once '../src/systems/Io.php';

use IO\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{   
    private $testExistFileOfJson = 'resources/test.json';
    private $testExistFileOfText = 'resources/test.txt';
    private $testNotExistFileOfJson = 'resources/empty.json';
    private $testNotExistFileOfText = 'resources/empty.txt';


    public function testReadJson()
    {   
        $testContentOfJson = File::readJson($this->testExistFileOfJson);
        $this->assertSame('array', gettype($testContentOfJson));
        $this->assertSame('Initialize printer', $testContentOfJson[0]['description']);
        $this->assertSame('ESC @', $testContentOfJson[0]['code']);
        $this->assertSame('1b40', $testContentOfJson[0]['hex']);
        $this->assertSame(array(27, 64), $testContentOfJson[0]['array']);

        $testNotExistContentOfJson = File::readJson($this->testNotExistFileOfJson);
        $this->assertSame(false, $testNotExistContentOfJson);
    }

    public function testReadAllText()
    {   
        $testContentOfText = File::readAllText($this->testExistFileOfText);
        $this->assertSame('string', gettype($testContentOfText));
        $this->assertSame('this is text', $testContentOfText);

        $testNotExistContentOfText = File::readJson($this->testNotExistFileOfJson);
        $this->assertSame(false, $testNotExistContentOfText);
    }
}