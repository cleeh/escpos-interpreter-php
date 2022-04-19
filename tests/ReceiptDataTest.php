<?php
include_once '../src/systems/Io.php';

use PHPUnit\Framework\TestCase;
use IO\File;

class ReceiptDataTest extends TestCase
{
  public function testBaeminReceiptValidation()
  {
    $baemins = File::readJson('../data/baemin.json');
    foreach ($baemins as $baemin) {
      $concatenated = '';
      foreach ($baemin['label'] as $label) {
        $concatenated .= $label['hex'];
        $this->assertTrue($label['type'] == 'command' || $label['type'] == 'data', 'label type should be `command` or `data`');
      }
      $this->assertSame(strtoupper($baemin['hex']), strtoupper($concatenated), 'labeled wrong hex');
    }
  }

  public function testYogiyoReceiptValidation()
  {
    $yogiyoes = File::readJson('../data/yogiyo.json');
    foreach ($yogiyoes as $yogiyo) {
      $concatenated = '';
      foreach ($yogiyo['label'] as $label) {
        $concatenated .= $label['hex'];
        $this->assertTrue($label['type'] == 'command' || $label['type'] == 'data', 'label type should be `command` or `data`');
      }
      $this->assertSame(strtoupper($yogiyo['hex']), strtoupper($concatenated), 'labeled wrong hex');
    }
  }

  public function testCoupangeatsReceiptValidation()
  {
    $coupangs = File::readJson('../data/coupangeats.json');
    foreach ($coupangs as $coupang) {
      $concatenated = '';
      foreach ($coupang['label'] as $label) {
        $concatenated .= $label['hex'];
        $this->assertTrue($label['type'] == 'command' || $label['type'] == 'data', 'label type should be `command` or `data`');
      }
      $this->assertSame(strtoupper($coupang['hex']), strtoupper($concatenated), 'labeled wrong hex');
    }
  }
}
