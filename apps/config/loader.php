    <?php
    $loader = new \Phalcon\Loader();

    /**
    * We're a registering a set of directories taken from the configuration file
    */
    $loader->registerNamespaces(array(
        'Multiple\Models' => $config->application->modelsDir,
        'Multiple\Controllers' => $config->application->controllersDir,

    ))->register();