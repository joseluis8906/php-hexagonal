<?php

namespace Application\Contracts\CommandBus;

interface Command 
{ 
  public function name(): string;
  public function data(object $data = null): object;
}
