<?php

namespace Domain\Order;

use Domain\ValueObjects\FullName;
use Domain\ValueObjects\Id;
use Domain\ValueObjects\OrderStatus;

class Order
{
  protected $id;
  protected $client;
  protected $status;

  public function myIdentityIs(Id $id = null): Id
  {
    $this->id = $id !== null ? $id : $this->id;
    return $this->id;
  }

  public function myClientIs(FullName $client): FullName
  {
    $this->client = $client !== null ? $client : $this->client;
    return $this->client;
  }

  public function iAmInStatus(OrderStatus $status): OrderStatus
  {
    $this->status = $status !== null ? $status : $this->status;
    return $this->status;
  }
}
