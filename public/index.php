<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require_once "../vendor/autoload.php";

$loader = new FilesystemLoader("../templates");
$twig = new Environment($loader, [
    'debug' => true,
    'strict_variables' => true,
    //'cache' => '../var/cache'
]);

$twig->addExtension(new DebugExtension());


// display a note page
echo $twig->render("note.html.twig");