# laravel-cas-client
cas 客户端调用

## Guard配置

> config/auth.php

## guard  存在用户表

```
'guards'    => [
    'cas' => [
            'driver'   => 'cas',
            'provider' => 'account',
        ],
]


...
'providers' => [

        'account' => [
            'driver' => 'eloquent',
            'model'  => Yjtec\Rbac\Models\User::class,
        ],
    ],
```

## guard  没有用户表，要基本信息
```
'guards'    => [
    'cas' => [
            'driver'   => 'cas',
            'provider' => 'cas',
        ],
]


...
'providers' => [

        'cas' => [
            'driver' => 'cas',
        ],
    ],
```


