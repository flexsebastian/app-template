<?php
return array(
    /*
     * Application ID generated by AppStore
     */
    'appId' => '',

    /*
     * Secret generated by AppStore
     */
    'appSecret' => '',

    /*
     * AppStore Secret generated by AppStore
     */
    'appstoreSecret' => '',


    'db' => array(
        /*
         * PDO DSN
         */
        'connection' => 'mysql:host=127.0.0.1;dbname=app',

        /*
         * PDO Database username
         */
        'user' => '',

        /*
         * PDO Database password
         */
        'pass' => ''
    ),

    /*
     * Path to log file or false to disable debug
     */
    'debug' => false,

    /*
     * timezone of the application
     *
     * Value is passed to date_default_timezone_set function
     */
    'timezone' => 'Europe/Warsaw',

    'php' => array(
        /*
         * This determines whether errors should be printed to the screen as
         * part of the output or if they should be hidden from the user
         *
         * Value is passed to ini_set function
         */
        'display_errors' => 'off'
    )
);