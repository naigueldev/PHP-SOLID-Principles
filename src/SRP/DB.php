<?php

namespace SRP;

abstract class DB
{
    public function __construct()
    {
        return "Fake connection";
        
    }

    public static function create($data)
    {
        return "Fake Created Data";
    }
}