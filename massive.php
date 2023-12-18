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
        <h3>4. Вывод ассоциативного массива  в обратном порядке без использования array_reverse()</h3>
        <pre>
        $myArray = [
              'key1' => 'value1',
              'key2' => 'value2',
              'key3' => 'value3',
              'key4' => 'value4',
            ];

            $arr_key=array_keys($myArray);
            $elementsCount = count($arr_key) - 1;
            $array_reverse=[];

          for($i = $elementsCount; $i >= 0; $i--){
            $key = $arr_key[$i];
            $array_reverse[$key] = $myArray[$key];
          }
            echo 'Исходный массив: ';
            print_r($myArray);
            echo 'Новый массив: ';
            print_r($array_reverse);
        </pre>
        <?php
            $myArray = [
              'key1' => 'value1',
              'key2' => 'value2',
              'key3' => 'value3',
              'key4' => 'value4',
            ];

            $arr_key=array_keys($myArray);
            $elementsCount = count($arr_key) - 1;
            $array_reverse=[];

          for($i = $elementsCount; $i >= 0; $i--){
            $key = $arr_key[$i];
            $array_reverse[$key] = $myArray[$key];
          }
            echo 'Исходный массив: ';
            print_r($myArray);
            echo '<br>Новый массив: ';
            print_r($array_reverse);

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

