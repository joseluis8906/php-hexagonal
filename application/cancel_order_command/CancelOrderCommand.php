<?php

namespace Application\CancelOrderCommand;

use Application\Contracts\CommandBus\Command;
use Domain\ValueObjects\Id;
use Exception;

class CancelOrderCommand implements Command
{
  protected $id;

  public function name(): string
  {
    return get_class($this);
  }

  public function data(object $data = null): object
  {
    if ($data !== null && !property_exists($data, 'id')) 
      throw new Exception('Id no sumistrado', 400);

    $this->id = $data->id !== null ? new Id($data->id) : $this->id;
    return (object)['id' => $this->id ? $this->id->value() : null];
  }
}
