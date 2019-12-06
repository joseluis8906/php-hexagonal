<?php

namespace Tests\Application\StandarComandBus;

use Application\CancelOrderCommand\CancelOrderCommand;
use Application\CancelOrderCommand\CancelOrderCommandHandler;
use Application\StandarCommandBus\InMemoryCommandHandlerMap;
use Application\StandarCommandBus\StandardCommandBus;
use Mockery;
use PHPUnit\Framework\TestCase;

final class StandarCommandBusTest extends TestCase
{
  public function setUp(): void
  {
    parent::setUp();
  }

  public function tearDown(): void
  {
    Mockery::close();
    parent::tearDown();
  }
  
  /**
   * @test
   */
  public function shouldDispatchAGivenCommand()
  {
    $cancelOrderCommand = new CancelOrderCommand();
    $data = (object)['id' => 1];
    $cancelOrderCommand->data($data);
    $cancelOrderCommandHandler = new CancelOrderCommandHandler();
    $inMemoryCommandHandlerMap = new InMemoryCommandHandlerMap();
    $standardCommandBus = new StandardCommandBus($inMemoryCommandHandlerMap);
    $inMemoryCommandHandlerMap->forCommand(CancelOrderCommand::class)
                              ->handleWith($cancelOrderCommandHandler);
    $this->assertNull($standardCommandBus->dispatch($cancelOrderCommand));
  }
}
