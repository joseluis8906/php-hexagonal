<?php

namespace Domain\Contracts\ValueObjects;

interface StringValueObject extends ValueObject
{
  public function value(): string;
}
