<?php

namespace BuilderBuddy\BuddyMenus;

use Illuminate\Support\Facades\Facade;

class BuddyMenusFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'buddy-menus';
    }
}
