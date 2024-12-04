<html>
    <head>
        <title>Halaman <?php echo isset($data['judul']) ?$data['judul']: ''; ?></title>
        <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
    </head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASEURL; ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>">Home<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASEURL; ?>/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>