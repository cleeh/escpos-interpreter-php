<?php
include_once '../src/systems/Io.php';

use IO\File;
use PHPUnit\Framework\TestCase;

class FileTest extends TestCase
{   
    private $fileName = '../data/command.json';

    public function testReadJson()
    {   
        $this->assertSame('array', gettype(File::readJson($this->fileName)));
    }

    public function testReadAllText()
    {   
        $this->assertSame('string', gettype(File::readAllText($this->fileName)));
    }
}