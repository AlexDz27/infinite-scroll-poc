<?php

require_once 'connect.php';

function getDresses() {
  global $pdo;

  $stmt = $pdo->query("SELECT * FROM dresses LIMIT 8 OFFSET 8");

  $dresses = $stmt->fetchAll();
  foreach ($dresses as &$dress) {
    $dress['photos'] = json_decode($dress['photos']);
    $dress['details'] = json_decode($dress['details']);
    $dress['sizes'] = json_decode($dress['sizes']);
  }
  
  return $dresses;
}