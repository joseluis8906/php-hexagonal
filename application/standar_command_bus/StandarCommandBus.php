<?php

namespace Application\StandarCommandBus;

use Application\Contracts\CommandBus\CommandBus;
use Application\Contracts\CommandBus\Command;
use Application\Contracts\CommandBus\CommandHandlerMap;

class StandardCommandBus implements CommandBus
{
  private $commandHandlerMap;

  public function __construct(CommandHandlerMap $commandHandlerMap)
  {
    $this->commandHandlerMap = $commandHandlerMap;
  }

  public function dispatch(Command $command): void
  {
    $this->commandHandlerMap->getHandler($command->name())->handle($command);
  }
}