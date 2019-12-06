<?php

namespace Domain\Contracts\ValueObjects;

interface ValueObject
{
  public function validate(): void;
}
