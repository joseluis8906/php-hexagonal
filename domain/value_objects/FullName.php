<?php

namespace Domain\ValueObjects;

use Domain\Contracts\ValueObjects\StringValueObject;
use Exception;

class FullName implements StringValueObject
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
        '/^([a-zA-Z]+\s+[a-zA-Z]+\s*[a-zA-Z]*\s*[a-zA-Z]*)$/g', $this->value)) {
          throw new Exception('Full name not match', 400);
      }
  }

  public function value(): string
  {
    return $this->value;
  }
}
