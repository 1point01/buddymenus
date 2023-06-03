<?php

namespace BuilderBuddy\BuddyMenus\Models;

use Illuminate\Database\Eloquent\Model;

class BuddyMenu extends Model
{
    protected $fillable = [
        'name',
        'parent',
        'order',
        'routes',
        'controllers',
        'route_name',
        'is_super_admin',
    ];

    /*public function parentMenu()
    {
        return $this->belongsTo(BuddyMenu::class, 'parent');
    }

    public function childMenus()
    {
        return $this->hasMany(BuddyMenu::class, 'parent');
    }*/
}
