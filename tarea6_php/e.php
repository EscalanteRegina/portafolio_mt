<?php
$n = isset($_GET['n']) ? (int)$_GET['n'] : 0;
$hasResult = $n > 0;
function fact($k){
  $f = 1.0;
  for ($i=2; $i <= $k; $i++) $f *= $i;
  return $f;
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>e por serie 1/i!</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <h1>e por serie 1/i!</h1>
  <p class="note">Fórmula: e = Σ 1 / i!</p>

  <form method="get">
    <label for="n">n (≥ 1):</label>
    <input id="n" name="n" type="number" min="1" value="<?php echo $n ?: 15; ?>" required>
    <button type="submit">Calcular</button>
    <a href="pi.php">Ir a π</a>
  </form>

  <?php if ($hasResult): ?>
    <table>
      <thead><tr><th>i</th><th>x (aprox e en i)</th></tr></thead>
      <tbody>
        <?php
        $x = 0.0;
        for ($i = 0; $i <= $n; $i++) {
          $x += 1.0 / fact($i);
          echo "<tr><td>$i</td><td>" . number_format($x, 10, '.', '') . "</td></tr>";
        }
        ?>
      </tbody>
    </table>
  <?php endif; ?>
</div>
</body>
</html>