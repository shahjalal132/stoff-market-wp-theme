<?php
/**
 * Class Loader Template
 */

/**
 * Autoloads the required PHP class files based on the class name.
 *
 * @param string $className The name of the class to be autoloaded.
 * @throws No_Exception_Class If the required class file does not exist.
 * @return void
 */
function autoloader( $className ) {
    // Base Directory Path
    $baseDir = __DIR__ . '/../classes/';

    // Convert directory path to file path
    $filePath = $baseDir . str_replace( '\\', '/', $className ) . '.php';

    // check if file exists then require the file
    if ( file_exists( $filePath ) ) {
        require_once $filePath;
    }
}

// Register this autoload function
spl_autoload_register( 'autoloader' );


// Loading Classes
$themeSupport = new Theme_Support();
$navigation   = new Register_Nav_Menu();
$enqueue      = new Enqueue_Assets();