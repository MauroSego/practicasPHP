<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Condicionales</title>
</head>
<body>
  <?php
    $a = 5; $b = 3; $c = -7; $D = 5;
    $msg = "";
    $a==5 ? $msg = 'A es 5 <br/>': $msg = 'A no es 5 <br/>';
    echo $msg;

    $a < $b ? $msg = 'A es menor que B<br/>': $msg='A es mayor o igual que B</br>';
    echo $msg;

    $b < $c ? $msg = 'B es menor que C<br/>': $msg='B es mayor o igual que C<br/>';
    echo $msg;

  ?>
</body>
</html>