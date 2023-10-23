<?php

$nome = 'cam " /> <script>alert("teste");</script>';
?>

<!-- htmlentities é para não interpretar código injetado intencionalmente -->
<input type="text" name="<?php echo htmlentities($nome); ?>">

