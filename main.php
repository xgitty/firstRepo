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
//comment 4

<<<<<<< HEAD
//new message
=======
//comment conflict

//new branch fix
>>>>>>> fix2
?>

<script>
console.log("hiiii");
</script>
