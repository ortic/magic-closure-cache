<?php

namespace Ortic\MagicClosureCache;

class Cache
{
    public static $dummyCache = [];

    public static function cache(\Closure $closure)
    {
        $hash = ClosureHash::from($closure);
        if (isset(static::$dummyCache[$hash])) {
            return static::$dummyCache[$hash];
        }

        $result = $closure();
        static::$dummyCache[$hash] = $result;

        return $result;
    }

}
