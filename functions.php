<?php
function productAutoLoader($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
   
    $pathToClassFile = $className . '.class.php';
    $pathToInterfaceFile = $className . '.interface.php';

    if (file_exists($pathToClassFile)) {
        include "$pathToClassFile";
    } 
}

function coreAutoLoader($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    $pathToClassFile = 'core' . DIRECTORY_SEPARATOR . $className . '.class.php';
    
    if (file_exists($pathToClassFile)) {
        include "$pathToClassFile";
    } 
}

spl_autoload_register('productAutoLoader');
spl_autoload_register('coreAutoLoader');