<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?=$title?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/<?=$css?>.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize/css/register.css"> -->
    <?php if($css=='login'):?>
    <style>
    .login-bg{
    background-image: url('<?=base_url()?>assets/img/flat-bg.jpg');
    }
    </style>
    <?php elseif($css=='register'):?>
      <style>
    .register-bg{
    background-image: url('<?=base_url()?>assets/img/flat-bg.jpg');
    }
    </style>
    <?php endif;?>
  </head>
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column <?=$css?>-bg  blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">

<?=$view?>

    <script src="<?=base_url()?>assets/js/plugins.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/vendors.min.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/custom-script.js" type="text/javascript"></script>
</body>
</html>
