<?php

//render('artices/show')
function render(string $path){

    ob_start();
    // n'affiche pas réellement , ouvre un tampon
    require('templates/'. $path .'.html.php');
    $pageContent = ob_get_clean();
    require('templates/layout.html.php');
}

