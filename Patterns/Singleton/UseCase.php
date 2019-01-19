<?php

namespace Patterns\Singleton;

$instance = Proxy::getInstance();
$instance2 = Proxy::getInstance();

return [
  $instance->getId(),
  $instance2->getId()
];




