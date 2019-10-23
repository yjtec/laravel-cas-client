<?php
namespace Yjtec\CasClient;
use Illuminate\Support\Facades\Facade;
class CasFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cas';
    }
}