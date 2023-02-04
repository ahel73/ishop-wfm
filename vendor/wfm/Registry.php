<?php

namespace wfm;

class Registry
{
    use TSinglton;

    protected static array $propirties = [];

    public function setProperty($name, $value)
    {
        self::$propirties[$name] = $value;
    }

    public function getProperty($name)
    {
        return self::$propirties[$name] ?? null;
    }

    public function getproperties(): array
    {
        return self::$propirties;
    }
}
