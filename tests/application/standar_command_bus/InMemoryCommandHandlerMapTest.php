<?php

namespace Tests\Application\StandarComandBus;

use Application\CancelOrderCommand\CancelOrderCommand;
use Application\CancelOrderCommand\CancelOrderCommandHandler;
use Application\StandarCommandBus\InMemoryCommandHandlerMap;
use PHPUnit\Framework\TestCase;

final class InMemoryCommandHandlerMapTest extends TestCase
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
  public function shouldReturnAComandHandlerThatMatch()
  {
    $cancelOrderCommand = new CancelOrderCommand();
    $data = (object)['id' => 1];
    $cancelOrderCommand->data($data);
    $cancelOrderCommandHandler = new CancelOrderCommandHandler();
    $inMemoryCommandHandlerMap = new InMemoryCommandHandlerMap();
    $inMemoryCommandHandlerMap->forCommand(CancelOrderCommand::class)
                              ->handleWith($cancelOrderCommandHandler);
    $this->assertEquals(
      $cancelOrderCommandHandler, 
      $inMemoryCommandHandlerMap->getHandler($cancelOrderCommand->name()));
  }

  /**
   * @test
   */
  public function shouldThrowAExceptionWhenCommandNotFound()
  {
    $cancelOrderCommand = new CancelOrderCommand();
    $data = (object)['id' => 1];
    $cancelOrderCommand->data($data);
    $inMemoryCommandHandlerMap = new InMemoryCommandHandlerMap();
    $this->expectExceptionCode(400);
    $inMemoryCommandHandlerMap->getHandler($cancelOrderCommand->name()); 
  }
}
