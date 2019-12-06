<?php

namespace Domain\Contracts\ValueObjects;

interface IntValueObject extends ValueObject
{
  public function value(): int;
}
