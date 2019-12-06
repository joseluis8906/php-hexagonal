<?php

namespace Domain\Contracts\ValueObjects;

interface BoolValueObject extends ValueObject
{
  public function value(): bool;
}
