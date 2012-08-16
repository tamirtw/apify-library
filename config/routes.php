<?php

// Basic routing
$routes[] = new Route('/:controller/:action',
    // params defaults
    array(
        'controller' => 'index'
    ),
    // params validation pattern (regex)
    array(
        ':version' => API_VERSION_SCHEME
    )
);

// Basic routing + api version support
$routes[] = new Route('/:version/:controller/:action',
    // params defaults
    array(
        'controller' => 'index'
    ),
    // params validation pattern (regex)
    array(
        'version' => API_VERSION_SCHEME
    )
);

// Basic routing + api version support + platform support
$routes[] = new Route('/:version/:platform/:controller/:action',
    // params defaults
    array(
        'controller' => 'error'
    ),
    // params validation pattern (regex)
    array(
        'version' => API_VERSION_SCHEME,
        'platform' => SUPPORTED_PLATFORMS
    )
);

return $routes;
