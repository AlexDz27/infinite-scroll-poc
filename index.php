<?php
require_once './php/utils/getInitialDresses.php';

$dresses = getInitialDresses();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/app.css">
  <script src="js/index.js" defer></script>
  <title>Document</title>
</head>
<body>

<h1>Hello from PHP monolith!</h1>

<ul>
  <?php foreach ($dresses as $index => $dress): ?>
    <li <?= $index === 6 ? 'id="target"' : '' ?>>
      <h2><?= $dress['name'] ?></h2>
      <h2><?= $index ?></h2>
      <p><?= $dress['description'] ?></p>
    </li>
  <?php endforeach; ?>
</ul>

</body>
</html>