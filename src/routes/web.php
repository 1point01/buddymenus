<?php

use Illuminate\Support\Facades\Route;
use BuilderBuddy\BuddyMenus\Models\BuddyMenu;
use BuilderBuddy\BuddyMenus\Http\Controllers\BuddyMenuController;

$menus = BuddyMenu::all();

foreach ($menus as $menu) {
    Route::get($menu->routes, $menu->controllers)->name($menu->route_name);
}

Route::group(['namespace' => 'BuilderBuddy\BuddyMenus\Http\Controllers', 'middleware' => ['web']], function () {
    Route::resource('buddymenus', BuddyMenuController::class);
});
