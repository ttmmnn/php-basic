<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $user_name = '侍太郎';
    echo $user_name;

    echo '<br/>';
    $user_name = '侍花子';
    echo $user_name;
    ?>
  </p>
  <p>
    <?php
    $number = 3;
    echo $number - 1.2;
    echo '<br/>';
    $my_name = '侍一郎';
    echo "私の名前は{$my_name}です";
    ?>
  </p>
</body>

</html>