<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP - стажёр</title>
</head>
<body>
  <? session_start(); 
  ?>
  <div class="container">
    <div class="content_container">
    <article>
        <h3>2. Форма обратной связи для сайта.</h3>
      </article>
    <form class="form" action="core/theLogicOfTheForm.php" method="POST">
    <?php
      if(isset($_SESSION['success'])){
        echo ('<span class="success">'. $_SESSION['success']. '</span>');
        unset($_SESSION['success']);
      }
      ?>
      <label for="email">Электронная почта</label>
      <?php
      if(isset($_SESSION['email_error'])){
        echo ('<span class="error_log">'. $_SESSION['email_error']. '</span>');
        unset($_SESSION['email_error']);
      }
      ?>
      <input name="email" type="text" placeholder="mail@mail.ru">
      
      <label for="name">Ваше имя</label>
      <?php
      if(isset($_SESSION['name_error'])){
        echo ('<span class="error_log">'. $_SESSION['name_error']. '</span>');
        unset($_SESSION['name_error']);
      }
      ?>
      <input name="name" type="text" placeholder="До 20 символов...">

      <fieldset>
      <legend>Насколько вы оцениваете работу страницы?</legend>
      <?php
      if(isset($_SESSION['evaluation_error'])){
        echo ('<span class="error_log">'. $_SESSION['evaluation_error']. '</span>');
        unset($_SESSION['evaluation_error']);
      }
      ?>
      <select name="evaluation">
        <option value="null" selected disabled>Выберите значение...</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
      </fieldset>

      <label for="comment">Комментарий</label>
      <?php
      if(isset($_SESSION['comment_error'])){
        echo ('<span class="error_log">'. $_SESSION['comment_error']. '</span>');
        unset($_SESSION['comment_error']);
      }
      ?>
      <textarea name="comment" placeholder="До 500 символов..."></textarea>

      <button type="submit">Отправить</button>
    </form>
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