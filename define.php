<?php
define('ANIMALS', [
  'dog',
  'cat',
  'bird'
]);


echo ANIMALS[1];

define('DB', [
  'host' => 'localhost',
  'user' => 'user',
  'pass' => 'password',
  'dbname' => 'dbname'
]);

echo DB['host'];
echo ANIMALS[1];

