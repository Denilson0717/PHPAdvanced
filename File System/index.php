<?php

    echo __DIR__ . '<br>';
    echo __FILE__ . '<br>';

    //crear Directorio
    // mkdir('test');

    // Renombrar Directorio
    // rename('test', 'my_folder');

    // Borrar Directorio
    // rmdir('my_folder');

    //Leer documentos y carpetas dentro de el directorio
    $files = scandir('./');
    echo "<pre>";
    var_dump($files);
    echo "</pre>";
    
    //leer y escribir en un archivo
    echo file_get_contents('document.txt');
    echo file_put_contents('document.txt'); 