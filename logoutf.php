
<?php

session_start();
unset($_SESSION['user']);
if (!(isset($_SESSION['user']))) {
    echo "<script>window.location.href='homef.php'</script>";
}

?>