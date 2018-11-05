<?php

/*
|--------------------------------------------------------------------------
| Subscription Config
|--------------------------------------------------------------------------
*/

return [

    'subscription' => env('SUBSCRIPTION'),

    'subscription_name' => 'Weekend Tips',
    'plans' => [
        'basic' => [
            'name' => 'Weekend Tips',
            'stripe_id' => 'prod_DurQiMV6VKteFD',
            'access' => [
                'some name'
            ],
            'limits' => [
                'Model\Namespace' => 5,
                'pivot_table' => 1
            ],
            'credits' => [
                'column' => 'credits_spent',
                'limit' => 10
            ],
            'custom' => [
                'anything' => 'anything'
            ],
        ],
    ]
];
