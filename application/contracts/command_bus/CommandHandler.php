<?php

namespace Application\Contracts\CommandBus;

interface CommandHandler 
{
  public function handle(Command $command): void;
}
