<?php

namespace SRP;

use SRP\DB;

class User
{
  protected $logger;

  function __construct(Logger $logger)
  {
    $this->logger = $logger;
  }

  public function create($data)
  {
    try {
      return DB::create($data);
    } catch (Exception $e) {
      $this->logger->writeToFile($e->getMessage());
    }
  }
}
