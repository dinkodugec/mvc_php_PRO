<?php

namespace App;

/**
 * Application configuration
 *
 * 
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvc_pro';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

     /**
     * Show or hide error messages on screen
     * @var boolean
     */
    /* const SHOW_ERRORS = false;   //user mode */ 
    const SHOW_ERRORS = true;   //dev mode
}
