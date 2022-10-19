<!DOCTYPE html>
<html>
<head>
<title>Demo Application</title>
</head>
<body bgcolor=lightgreen>

<div>This is pure HTML message.</div>
<div>Next, we’ll display today’s date and day by PHP!</div>

<h3>PHP version</h3>
<br>Here are ... <a href=version.php>details</a></br>
<?php  echo 'Current PHP version on this box: ' . phpversion(); ?>
<div>
<?php
echo 'Today’s date is <b>' . date('Y/m/d') . '</b> and it’s a <b>'.date('l').'</b> today!';
?>
</div>

<div>Again, this is static HTML content.</div>
</body>
</html>
