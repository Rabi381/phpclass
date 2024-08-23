<?php

namespace core\middleware;


class middleware
{

    const map = [
        'guest' => guest::class,
        'auth' => auth::class
    ];

    public static function resolve($key)
    {
        if (! $key) {
            return;
        }
        $middleware = static::map[$key] ?? false;

        if (! $middleware) {
            throw new \Exception("NO matching found for '{$key}' . ");
        }

        (new $middleware)->handle();
    }
}
