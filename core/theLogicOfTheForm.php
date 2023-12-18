<?php
session_start();

 $email = $_POST['email'];
 $name = $_POST['name'];
 $comment = $_POST['comment'];


  if (empty($email)) {
    $_SESSION['email_error'] = "Не заполнено обязательное поле!";

  }elseif ( filter_var($email, FILTER_VALIDATE_EMAIL) === false) { 
    $_SESSION['email_error'] = "Формат почтового ящика неправильный";
  }

  if(empty($name)){
    $_SESSION['name_error'] = 'Не заполнено обязательное поле!';
  }elseif(mb_strlen($name, 'UTF-8') > 20){
    $_SESSION['name_error'] = 'Имя не должно превышать 20 символов!';
  }

  if(empty($_POST['evaluation'])){
    $_SESSION['evaluation_error'] = "Выберите оценку от 0 до 10!";
  }

  if(mb_strlen($comment, 'UTF-8') > 500){
    $_SESSION['comment_error'] = 'Комментарий не должен превышать 500 символов!';
  }


  if(count($_SESSION) === 0){
    $today = date('d.m.Y - h:i:s');
    $formResult = 'Электронная почта: '. $email . ' имя: ' . $name . ' оценка: ' . $_POST['evaluation'] . ' комментарий: ' . $comment . ' время создания файла: ' . $today;
    $filename = 'Результаты формы.txt';
    $file = fopen($filename, 'w');
    fwrite($file, $formResult);
    fclose($file);
    $_SESSION['success'] = 'Результаты успешно записаны в файл, проверьте ядро!';
    header('Location: ../form.php');
  }else{
    header('Location: ../form.php');
  }

?>
