<?php 

session_start();

session_destroy();

echo '<script>location.href="front.php"</script>';

?>