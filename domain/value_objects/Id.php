<?php

namespace Domain\ValueObjects;

use Domain\Contracts\ValueObjects\IntValueObject;
use Exception;

class Id implements IntValueObject
{
  protected $value;

  public function __construct(int $value)
  {
    $this->value = $value;
    $this->validate();
  }

  public function validate(): void
  {
    if ($this->value <= 0) 
      throw new Exception('Id must be 1 or greater.', 400);
  }

  public function value(): int
  {
    return $this->value;
  }
}
