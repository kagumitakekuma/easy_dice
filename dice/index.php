<?php

$dice1 = mt_rand(1,6);
$dice2 = mt_rand(1,6);
$zorome = ($dice1 == $dice2) ? true : false;

?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>サイコロ</title>
  </head>
  <body>
    <h1>サイコロ</h1>
    <p>サイコロの目は「<?php echo $dice1; ?>」「<?php echo $dice2; ?>」でした！
    <?php if($zorome) : ?>
      ゾロ目です！
    <?php endif; ?>
  </p>

  <P?<?php    ?>回目でぞろ目になりました</p>
    <p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一度！</a>

  </body>
</html>
