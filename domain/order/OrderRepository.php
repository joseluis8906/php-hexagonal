<?php

namespace Domain\Order;

interface OrderRepository
{
  public function persist(Order $order): Order;
  public function search(int $id): Order;
  public function drop(Order $order): void;
}
