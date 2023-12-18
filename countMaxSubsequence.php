<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP - стажёр</title>
</head>
<body>
  <div class="container">
    <div class="content_container">
      <article>
        <h3>5. Программа подсчёта максимального количества последовательных “1” в массиве.</h3>
        <pre>
        function findMaxConsecutiveOnes($nums) {
    $maxCount = 0;
    $currentCount = 0;
    
    foreach ($nums as $num) {
        if ($num === 1) {
            $currentCount++;
            $maxCount = max($maxCount, $currentCount);
        } else {
            $currentCount = 0;
        }
    }
    
    return $maxCount;
}

$nums = [1, 1, 0, 1, 1, 1];
$maxConsecutiveOnes = findMaxConsecutiveOnes($nums);

echo "Максимальное количество последовательных 1: " . $maxConsecutiveOnes;
        </pre>

        <?php
        function findMaxConsecutiveOnes($nums) {
            $maxCount = 0;
            $currentCount = 0;
            
            foreach ($nums as $num) {
                if ($num === 1) {
                    $currentCount++;
                    $maxCount = max($maxCount, $currentCount);
                } else {
                    $currentCount = 0;
                }
            }
            
            return $maxCount;
        }

        $nums = [1, 1, 0, 1, 1, 1];
        $maxConsecutiveOnes = findMaxConsecutiveOnes($nums);

        echo "Максимальное количество последовательных 1: " . $maxConsecutiveOnes;
        ?>

      </article>
      <nav class="navigation_panel">
        <a class="nav_item" href="index.php" >1 задача</a>
        <a class="nav_item" href="form.php">2 задача</a>
        <a class="nav_item" href="a.php">3 задача</a>
        <a class="nav_item" href="massive.php">4 задача</a>
        <a class="nav_item" href="countMaxSubsequence.php">5 задача</a>
      </nav>
    </div>
  </div>
</body>
</html>