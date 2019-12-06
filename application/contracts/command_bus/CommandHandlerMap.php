<?php

namespace Application\Contracts\CommandBus;

interface CommandHandlerMap
{
  public function forCommand(string $command): CommandHandlerMap;
  public function handleWith(CommandHandler $commandHandler): void;
  public function getHandler(string $commandName): CommandHandler;
}
