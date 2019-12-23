<?php

class User
{
  protected $logger;
  protected $db;

  function __construct(Logger $logger, Database $db)
  {
    $this->logger = $logger;
    $this->db = $db;
  }

  public function create(array $data)
  {
    try {
      $this->db->create($data);
    } catch (DatabaseException $e) {
      $this->logger->writeToFile($e->getMessage());
    }
  }
}
