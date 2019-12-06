<?php

namespace Tests\Domain\ValueObject;

use Domain\ValueObjects\Id;
use PHPUnit\Framework\TestCase;

class IdTest extends TestCase
{
  public function setUp(): void
  {
    parent::setUp();
  }

  public function tearDown(): void
  {
    parent::tearDown();
  }

  /**
   * @test
   */
  public function shouldThrowExceptionWhenIdValueIsNotInt()
  {
    $this->expectExceptionCode(400);
    $id = new Id(0);
  }
}
