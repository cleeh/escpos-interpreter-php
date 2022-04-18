<?php

namespace Interpreter;

use Error;

interface InterpreterInterface
{
  public function parse($data);
}

abstract class AbstractInterpreter implements InterpreterInterface
{
  public function __construct()
  {
  }
}

class Interpreter extends AbstractInterpreter
{
  public function parse($data)
  {
    throw new Error('Not implemented');
  }
}
