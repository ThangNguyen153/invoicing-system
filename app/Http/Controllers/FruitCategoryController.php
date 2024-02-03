<?php

namespace App\Http\Controllers;

use App\Models\FruitCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FruitCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'fruitCategory', 'addFruitCategory'
        ]);
    }

    public function fruitCategory()
    {
        $fruitCategories = FruitCategory::all();
        return view('fruit_category', [
            'fruitCategories' => $fruitCategories,
        ]);
    }

    public function addFruitCategory(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
        ]);
        if($credentials)
        {
            FruitCategory::create([
                'name' => $request->name
            ]);
            return redirect()->route('fruitCategory')
                ->withSuccess('Create new Fruit Category successfully');
        }
        return back()->withErrors([
            'name' => 'Invalid data',
        ])->onlyInput('name');
    }
}
