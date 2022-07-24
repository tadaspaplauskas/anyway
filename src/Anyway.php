<?php

class Anyway
{
    public static function __callStatic(string $name, array $arguments): mixed
    {
        try {
            return $name(...$arguments);
        } catch (TypeError $e) {
            return $name(...array_reverse($arguments));
        }
    }
}
