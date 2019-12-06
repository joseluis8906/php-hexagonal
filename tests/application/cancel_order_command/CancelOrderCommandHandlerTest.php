<?php

namespace Tests\Application\CancelOrderCommand;

use Application\CancelOrderCommand\CancelOrderCommand;
use Application\CancelOrderCommand\CancelOrderCommandHandler;
use PHPUnit\Framework\TestCase;

final class CancelOrderCommandHandlerTest extends TestCase
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
  public function shouldPrintIdOfCancelOrderCommand()
  {
    $cancelOrderComandHandler = new CancelOrderCommandHandler();
    $data = (object)['id' => null];
    $cancelOrderCommand = new CancelOrderCommand();
    $cancelOrderCommand->data($data);
    $this->assertNull($cancelOrderComandHandler->handle($cancelOrderCommand));
  }
}
