<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Menu;

class PizzaController extends Controller
{

    public function Index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.pizzas_index', compact('pizzas'));
    }

    public function Create()
    {
        $menus = Menu::all();
        return view('pizzas.pizzas_create', compact('menus'));
    }
    public function Order()
    {
        $menus = Menu::all();
        return view('frontend.order', compact('menus'));
    }

    public function StoreOrder(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'base' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'toppings' => 'required',
        ]);

        Pizza::create([
            'type' => $request->type,
            'base' => $request->base,
            'name' => $request->name,
            'price' => $request->price,
            'phone' => $request->phone,
            'address' => $request->address,
            'toppings' => $request->toppings,
            // 'size' => $request->size,
        ]);

        $notification = array(
            'message' => 'Pizza Order Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('welcome')->with($notification);
    }

    public function Show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.pizzas_show', compact('pizza'));
    }


    public function Store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'base' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'toppings' => 'required',
        ]);

        Pizza::create([
            'type' => $request->type,
            'base' => $request->base,
            'name' => $request->name,
            'price' => $request->price,
            'phone' => $request->phone,
            'address' => $request->address,
            'toppings' => $request->toppings,
            // 'size' => $request->size,
        ]);

        $notification = array(
            'message' => 'Pizza Order Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('pizzas.index')->with($notification);
    }

    public function Edit($id)
    {
        $menus = Menu::all();
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.pizzas_edit', compact('pizza', 'menus'));
    }

    public function Update(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'base' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'toppings' => 'required',
        ]);

        $pid = $request->id;

        Pizza::findOrFail($pid)->update([
            'type' => $request->type,
            'base' => $request->base,
            'name' => $request->name,
            'price' => $request->price,
            'phone' => $request->phone,
            'address' => $request->address,
            'toppings' => $request->toppings
        ]);

        $notification = array(
            'message' => 'Pizza Order Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('pizzas.index')->with($notification);
    }

    public function Destroy($id)
    {
        Pizza::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Pizza Order Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
