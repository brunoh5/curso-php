<?php include_once "helpers/url.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>
  <!-- Não funciona no codespaces -->
  <!-- <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css"> -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet" />

</head>

<body>
  <header>
    <a href="/" id="logo">
      <img src="img/logo.svg" alt='Blog Codar' />
    </a>
    <nav>
      <ul id='navbar'>
        <li>
          <a class='nav-link' href='/'>Home</a>
        </li>
        <li>
          <a class='nav-link' href='#'>Categorias</a>
        </li>
        <li>
          <a class='nav-link' href='#'>Sobre</a>
        </li>
        <li>
          <a class='nav-link' href='contact.php'>Contato</a>
        </li>
      </ul>
    </nav>
  </header>