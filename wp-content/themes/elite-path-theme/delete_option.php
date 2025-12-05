<?php
require_once __DIR__ . '/../../../wp-load.php';

if ( ! defined( 'WPINC' ) ) {
    echo "Failed to load WordPress (wp-load.php).\n";
    exit(1);
}

$option_name = 'elite_path_primary_menu_fixed';
$exists = get_option( $option_name, null );
if ( $exists === null ) {
    echo "Option '$option_name' does not exist.\n";
    exit(0);
}

$deleted = delete_option( $option_name );
if ( $deleted ) {
    echo "Option '$option_name' deleted successfully.\n";
} else {
    echo "Failed to delete option '$option_name'.\n";
}
