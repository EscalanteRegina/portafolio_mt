<?php
$n = isset($_GET['n']) ? (int)$_GET['n'] : 0;
$hasResult = $n > 0;
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>π por Leibniz</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
  <h1>π por serie de Leibniz</h1>
  <p class="note">Fórmula: π = 4 × Σ (-1)^i / (2i+1)</p>

  <form method="get">
    <label for="n">n (≥ 1):</label>
    <input id="n" name="n" type="number" min="1" value="<?php echo $n ?: 100; ?>" required>
    <button type="submit">Calcular</button>
    <a href="e.php">Ir a e</a>
  </form>

  <?php if ($hasResult): ?>
    <table>
      <thead><tr><th>i</th><th>x (aprox π en i)</th></tr></thead>
      <tbody>
        <?php
        $sum = 0.0;
        for ($i = 0; $i <= $n; $i++) {
          $sum += (($i % 2) ? -1 : 1) / (2 * $i + 1);
          $x = 4 * $sum;
          echo "<tr><td>$i</td><td>" . number_format($x, 10, '.', '') . "</td></tr>";
        }
        ?>
      </tbody>
    </table>
  <?php endif; ?>
</div>
</body>
</html>