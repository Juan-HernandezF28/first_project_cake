<?php echo $this->fetch('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $this->fetch('title'); ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>

<!-- Si deseas que menús aparezcan
en todas las vistas, incluyelos aquí -->
<div id="header">
    <div id="menu">...</div>
</div>

<!-- Aquí es donde quieres tus vistas desplegadas -->
<?php echo $this->fetch('content'); ?>

<!-- Añade un pie de página a todas las páginas -->
<div id="footer">...</div>

</body>
</html>