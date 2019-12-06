<?php

namespace Application\CancelOrderCommand;

use Application\Contracts\CommandBus\Command;
use Application\Contracts\CommandBus\CommandHandler;
use Exception;

class CancelOrderCommandHandler implements CommandHandler
{
  public function handle(Command $command): void
  {
    $command->data()->id;
  }
}
