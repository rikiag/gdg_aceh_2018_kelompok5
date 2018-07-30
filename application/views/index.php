<!DOCTYPE html>
<html lang="en">
<head>
  <?php if($header) echo $header;?>
</head>
<body>
  <?php
    if($navbar) echo $navbar;
    if($content) echo $content;
    if($modal) echo $modal;
    if($footer) echo $footer;
    if($script) echo $script;
  ?>

</body>
</html>
