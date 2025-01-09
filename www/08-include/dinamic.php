<?php
  $nome = "Bruno";
  $products = ["Bannana", "Maça", "Uva", "Pêra"];
?>

<h1>Seja bem-vindo ao nosso site</h1>
<p><?=$nome;?> veja as nossas ofertas</p>

<h2>Confira nossos principais produtos:</h2>

<ul>
  <?php foreach($products as $product): ?>
    <li><?=$product;?></li>
  <?php endforeach; ?>
</ul>