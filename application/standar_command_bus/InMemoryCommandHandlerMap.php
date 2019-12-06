<?php

namespace Application\StandarCommandBus;

use Application\Contracts\CommandBus\CommandHandler;
use Application\Contracts\CommandBus\CommandHandlerMap;
use Exception;

class InMemoryCommandHandlerMap implements CommandHandlerMap
{
  private $handlerMap;
  private $tmpCommandClass;

  public function __construct()
  {
    $this->handlerMap = array();
  }

  public function forCommand(string $commandClass): CommandHandlerMap
  {
    $this->tmpCommandClass = $commandClass;
    return $this;
  }

  public function handleWith(CommandHandler $commandHandler): void
  {
    $this->handlerMap[$this->tmpCommandClass] = $commandHandler;
    $this->tmpCommandClass = null;
  }

  public function getHandler(string $commandClass): CommandHandler
  {
    $handler = $this->handlerMap[$commandClass];
    if ($handler === null) 
      throw new Exception('No handler found for command.', 400);

    return $handler;
  }
}
