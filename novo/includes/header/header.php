<?php
  include "_app/Config.inc.php";

  $read = new Read();
  $read->ExeRead('configuracao');
  $retConf = $read->getResult();
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $retConf[0]['nome']?></title>

    <?php include "includes/default/default-css.php"; ?>
</head>
<body>

<?php include "includes/menu/menu.php"; ?>
