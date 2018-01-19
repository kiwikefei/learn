<?php
return [
  'database'    => [
      'connection' => 'mysql:host=127.0.0.1',
      'name'  => 'learn',
      'username'    => 'homestead',
      'password' => 'secret',
      'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
  ]
];