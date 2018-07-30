<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Prestigius</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="keywords" content="<?php echo $palavra; ?>"/>
  <meta name="description" content="<?php echo $descricao; ?>" />
  <meta name="author" content="StudioBR" />


  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/css/kickstart.css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css" media="all" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="<?php echo BASE_URL; ?>js/kickstart.js"></script>



</head>

<body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <?php
  $this->loadViewInTemplate($viewName, $viewData);
  ?>

</body>
</html>

