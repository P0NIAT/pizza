<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{

    public function Index()
    {
        $menus = Menu::all();
        return view('menu.menu_index', compact('menus'));
    }

    public function Create()
    {
        return view('menu.menu_create');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'price' => 'required',
            'photo' => 'required',
        ]);

        $data = new Menu();
        $data->name = $request->name;
        $data->ingredients = $request->ingredients;
        $data->price = $request->price;

        $file = $request->file('photo');
        if ($file) {
            @unlink(public_path('upload/menu_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/menu_images'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Menu Item Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('menu.index')->with($notification);
    }

    public function Edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.menu_edit', compact('menu'));
    }

    public function Update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'price' => 'required',
            'photo' => 'required',
        ]);

        $mid = $request->id;

        $menu = Menu::findOrFail($mid);
        $menu->name = $request->name;
        $menu->ingredients = $request->ingredients;
        $menu->price = $request->price;

        $file = $request->file('photo');
        if ($file) {
            @unlink(public_path('upload/menu_images/' . $menu->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/menu_images'), $filename);
            $menu->photo = $filename;
        }

        $menu->save();

        $notification = array(
            'message' => 'Menu Item Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('menu.index')->with($notification);
    }

    public function Destroy($id)
    {
        Menu::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Menu Item Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
