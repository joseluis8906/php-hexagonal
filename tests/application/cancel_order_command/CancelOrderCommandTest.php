<?php

namespace Tests\Application\CancelOrderCommand;

use Application\CancelOrderCommand\CancelOrderCommand;
use PHPUnit\Framework\TestCase;

final class CancelOrderCommandTest extends TestCase
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
  public function shouldReturnClassNameWhenCallNameMethod()
  {
    $cancelOrderCommand = new CancelOrderCommand();
    $this->assertEquals(
      'Application\CancelOrderCommand\CancelOrderCommand', 
      $cancelOrderCommand->name());
  }

  /**
   * @test
   */
  public function shouldReturnArrayWithIdWhenCallDataMethod()
  {
    $cancelOrderCommand = new CancelOrderCommand();
    $data = (object)['id' => 1];
    $cancelOrderCommand->data($data);
    $this->assertEquals($data->id, $cancelOrderCommand->data()->id);
  }

  /**
   * @test
   */
  public function shouldThrowAExceptionWhenDataIsInconsistent()
  {
    $cancelOrderCommand = new CancelOrderCommand();
    $data = (object)['name' => 'Jhon Doe'];
    $this->expectExceptionCode(400);
    $cancelOrderCommand->data($data);
  }
}
