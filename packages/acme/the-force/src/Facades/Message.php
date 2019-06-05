<?php


namespace Acme\TheForce\Facades;
use \Illuminate\Support\Facades\Facade;

class Message extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'the-force-message';
    }
}