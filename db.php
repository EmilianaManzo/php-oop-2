<?php

$prodottino1 = new Food(2,'cibo', 12.90 , 'https://arcaplanet.vtexassets.com/arquivos/ids/289263/RC-SPT-DRY-Kitten-MV-2-it_IT.jpg?v=638294122676530000', 'croccantini','Royal Canin', new Animal('gatto'));
$prodottino1->weight = '1kg'; 

$prodottino2 = new Food(2,'cibo', 12.90 , 'https://arcaplanet.vtexassets.com/arquivos/ids/289263/RC-SPT-DRY-Kitten-MV-2-it_IT.jpg?v=638294122676530000', 'croccantini','Royal Canin', new Animal('gatto'));
$prodottino2 -> weight = '2kg';

$prodottino3 = new Toy(3,'giochi', 21.90 , 'https://m.media-amazon.com/images/I/610OPtk7keL.jpg', 'giochi','Monge',  new Animal('cane'));
$prodottino3 -> weight = '0.5kg';




$db = [
  $prodottino1,
  $prodottino2,
  $prodottino3,

  new Accessory(4,'cuccia', 30.90 , 'https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg','cuccia','Alma Natura',new Animal('cane')),
  
  new Toy(5,'giochi', 12.90 , 'https://m.media-amazon.com/images/I/610OPtk7keL.jpg', 'gochi','Purina',  new Animal('cane')),
  
  new Food(6,'cibo', 10.50 , 'https://www.cicalia.com/it/img/imgproducts/37525/l_37525.jpg', 'patè','Pedigree',new Animal('cane')),
  
  new Food(7,'cibo', 13.50 , 'https://molinopisoni.it/56507-large_default/purina-felix-le-ghiottonerie-le-varieta-in-gelatina-12x85g.jpg', 'patè','Purina Felix', new Animal('gatto')),
  
  new Accessory(8,'cuccia', 20.00 , 'https://m.media-amazon.com/images/I/71hK+WBbldL._AC_UF894,1000_QL80_.jpg', 'cuccia','Royal Canin', new Animal('gatto') )
];