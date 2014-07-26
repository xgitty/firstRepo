<?php

require_once('FirePHPCore/FirePHP.class.php');
ob_start();
$firephp = FirePHP::getInstance(true);
$firephp->log('Hello', 'World');

require_once('FirePHPCore/fb.php');
$var='test';
fb($var);
FB::send($var);

ob_end_flush();
//comment 2

//comment 3

//new branch fix
?>

<script>
console.log("hiiii");
</script>
