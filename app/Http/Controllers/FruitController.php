<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\FruitCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FruitController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'fruit', 'addFruit'
        ]);
    }

    public function fruit()
    {
        $fruits = Fruit::with('category')->get();
        $fruitCategories = FruitCategory::all();
        return view('fruit', [
            'fruits' => $fruits,
            'fruitCategories' => $fruitCategories,
        ]);
    }

    public function addFruit(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ]);
        if($credentials)
        {
            Fruit::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'unit' => $request->unit,
                'price' => $request->price,
            ]);
            return redirect()->route('fruit')
                ->withSuccess('Create new Fruit successfully');
        }
        return back()->withErrors([
            'name' => 'Invalid data',
        ])->onlyInput('name');
    }
}
