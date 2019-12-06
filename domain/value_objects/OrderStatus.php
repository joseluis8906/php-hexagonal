<?php

namespace Domain\ValueObjects;

use Domain\Contracts\ValueObjects\StringValueObject;
use Exception;

class OrderStatus implements StringValueObject
{
  protected $value;

  public function __construct(string $value)
  {
    $this->value = $value;
    $this->validate();
  }

  public function validate(): void
  {
    if (
      !preg_match(
        '/^(initiated)*(in progress)*(delivered)*(canceled)*$/g', $this->value)) {
          throw new Exception('Order status not match', 400);
      }
  }

  public function value(): string
  {
    return $this->value;
  }
}
