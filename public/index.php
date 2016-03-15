<?php

    error_reporting(E_ALL);

    try {

        /**
         * Read the configuration
         */
        $config = include __DIR__ . "/../apps/config/config.php";

        /**
         * Read auto-loader in Moudel in backeend vs forntend
         */
        //include __DIR__ . "/../apps/econfig/loader.php";

        /**
         * Read services
         */
        include __DIR__ . "/../apps/config/services.php";

    } catch (Exception $e) {
        echo $e->getMessage(), '<br>';
        echo nl2br(htmlentities($e->getTraceAsString()));
    }