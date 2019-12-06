<?php

namespace Domain\Order;

interface OrderEvents
{
  public function OrderCreated(): void;
  public function OrderHasChangedToInProgress(): void;
  public function OrderHasBeenDelivered(): void;
  public function OrderHasBeenCanceled(): void;
}
