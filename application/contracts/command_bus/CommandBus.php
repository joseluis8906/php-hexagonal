<?php

namespace Application\Contracts\CommandBus;

interface CommandBus
{
  public function dispatch(Command $command): void;
}