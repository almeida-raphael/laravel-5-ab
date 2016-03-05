<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | The database connection used to store the A/B testing information.
    |
    */

    'connection' => 'mysql',

    /*
    |--------------------------------------------------------------------------
    | Experiments
    |--------------------------------------------------------------------------
    |
    | An array of groups of experiment identifiers.
    |
    | Example: [
    |               'body' =>
    |               [
    |                   'big-logo',
    |                   'small-buttons',
    |               ],
    |               'footer-font' =>
    |               [
    |                   'lato',
    |                   'righteous',
    |               ]
    |          ]
    |
    */

    'experiments' => [],

    /*
    |--------------------------------------------------------------------------
    | Goals
    |--------------------------------------------------------------------------
    |
    | A list of goals. This list can contain urls, route names or custom goals.
    |
    | Example: ['pricing/order', 'signup']
    |
    */

    'goals' => [],

);
