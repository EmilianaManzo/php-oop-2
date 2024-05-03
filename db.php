<?php

require_once __DIR__ . '/Models/Products.php';


$db = [
  new Products(1, 'cibo', 10.90 , new Animals('gatto')),
  new Products(2, 'crocchette', 12.90 , new Animals('cane')),
];