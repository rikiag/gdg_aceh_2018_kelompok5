<!DOCTYPE html>
<html lang="en">
<head>
  <?php if($header) echo $header;?>
</head>
<body class="grey lighten-3">
  <?php
    if($navbar) echo $navbar;
    if($content) echo $content;
    if($modal) echo $modal;
    if($footer) echo $footer;
    if($script) echo $script;
  ?>

</body>
</html>
