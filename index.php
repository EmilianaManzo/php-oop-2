<?php 
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';
require_once __DIR__ . '/Models/Animal.php';
require_once __DIR__ . '/db.php';

var_dump($db);


include_once __DIR__ . '/partials/head.php';
?>

<body>
  <div class="container py-5 ">
    <h1 class=" text-success text-center mb-3 fw-bold ">ANIMALS SHOP</h1>

    <div class="row row-cols-4 ">

    <?php foreach ($db as $prodotti) : ?>
      <div class="col p-3 " mb-3 >

        <div class="card" style="width: 18rem;">
          <div class="img p-2 ">
            <img class="card-img-top" src="<?php echo $prodotti->image ?>" alt="...">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $prodotti->name ?></h5>
            <p><?php echo $prodotti->brand ?></p>
            <span><?php echo $prodotti->name_category?></span>
            <p class="card-title"><?php echo $prodotti->price ?>&euro;</p>
            <p class="card-text"><?php echo $prodotti->animal->icon ?></p>
            <p class="card-text"><?php echo ($prodotti->weight ??  ' ') ?></p>
          </div>

        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>