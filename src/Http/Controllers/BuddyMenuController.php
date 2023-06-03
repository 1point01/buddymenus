<?php

namespace BuilderBuddy\BuddyMenus\Http\Controllers;

use Illuminate\Http\Request;
use BuilderBuddy\BuddyMenus\Models\BuddyMenu;

class BuddyMenuController extends Controller
{
    public function index()
    {
        $menus = BuddyMenu::all();

        return view('buddymenus::index', compact('menus'));
    }

    public function create()
    {
        return view('buddymenus::create');
    }

    public function store(Request $request)
    {
        $menu = BuddyMenu::create($request->all());

        return redirect()->route('buddymenus.index')->with('success', 'Menu created successfully!');
    }

    public function edit(BuddyMenu $menu)
    {
        return view('buddymenus::edit', compact('menu'));
    }

    public function update(Request $request, BuddyMenu $menu)
    {
        $menu->update($request->all());

        return redirect()->route('buddymenus.index')->with('success', 'Menu updated successfully!');
    }

    public function destroy(BuddyMenu $menu)
    {
        $menu->delete();

        return redirect()->route('buddymenus.index')->with('success', 'Menu deleted successfully!');
    }
}
