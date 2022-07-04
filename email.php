<?php
    require('login.php');
    $destino = "<script>document.write(document.querySelector('#email-input')).value</script>";

    echo $destino;
?>