<?php

namespace BuilderBuddy\BuddyMenus\Console\Commands;

use Illuminate\Console\Command;
use BuilderBuddy\BuddyMenus\Models\BuddyMenu;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;

class InsertMenusCommand extends Command
{
    protected $signature = 'buddy-menus:insert';

    protected $description = 'Insert menus into the menu file';

    public function handle()
    {
        $menuFilePath = Config::get('buddymenus.menu_file_path');
        $menuUlClass = Config::get('buddymenus.menu_ul_class');

        $menuItems = BuddyMenu::all();
        $menuHtml = '<ul class="' . $menuUlClass . '">';

        foreach ($menuItems as $menuItem) {
            $menuHtml .= '<li>' . $menuItem->name . '</li>';
        }

        $menuHtml .= '</ul>';

        File::put($menuFilePath, $menuHtml);

        $this->info('Menus inserted successfully!');
    }
}
