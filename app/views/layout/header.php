<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title ?? 'CookBook Mini') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,Arial,sans-serif;max-width:900px;margin:2rem auto;padding:0 1rem}
    header,footer{display:flex;justify-content:space-between;align-items:center;margin-bottom:1rem}
    a.button, button{padding:.5rem .8rem;border:1px solid #ccc;border-radius:.5rem;text-decoration:none;cursor:pointer}
    table{width:100%;border-collapse:collapse}
    th,td{border-bottom:1px solid #eee;padding:.6rem .4rem;text-align:left;vertical-align:top}
    .row{display:grid;gap:.8rem}
    .grid-2{grid-template-columns:1fr 1fr}
    .flash{padding:.6rem;border-radius:.4rem;margin:.3rem 0}
    .flash.error{background:#ffe8e8;border:1px solid #f5b1b1}
    .flash.success{background:#e8ffea;border:1px solid #b1f5bd}
    form label{font-weight:600}
    form input, form select, form textarea{width:100%;padding:.5rem;border:1px solid #ccc;border-radius:.4rem}
  </style>
</head>
<body>
<header>
  <h1 style="margin:0">CookBook Mini</h1>
  <nav>
    <a class="button" href="index.php?action=list">Toutes les recettes</a>
    <a class="button" href="index.php?action=add">Ajouter</a>
  </nav>
</header>
<main>
  <?php if (!empty($flashes)): ?>
    <?php foreach ($flashes as $type => $msgs): foreach ($msgs as $m): ?>
      <div class="flash <?= htmlspecialchars($type) ?>"><?= htmlspecialchars($m) ?></div>
    <?php endforeach; endforeach; ?>
  <?php endif; ?>
