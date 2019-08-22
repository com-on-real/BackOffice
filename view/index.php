<?php

$title = 'Accueil';
$description = 'Bienvenue';


ob_start();
?>

<h1>Content here</h1>

<?php

$content = ob_get_clean();