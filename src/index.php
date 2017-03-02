<?php
phpinfo();

$con = mysqli_connect('mysql','root','root','vika_logic') or die(mysqli_error());
echo '<pre>';
print_r($con);
echo '</pre>';