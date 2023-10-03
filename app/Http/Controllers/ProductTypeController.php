<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    //

    function listView() {
        return view("productType.list", ["productTypes" => ProductType::all()]);
    }

    function editView($id) {
        return view("productType.edit", ["pType" => ProductType::find($id)]);
    }

    function newView() {
        return view("productType.new");
    }

    function delView() {
        return view("productType.delete", ["productTypes" => ProductType::all()]);
    }
    
    //API
    function list() {
        return response()->json(ProductType::all());
    }

    function edit(Request $request, $id) {
        $pType = ProductType::find($id);
        $pType->name = $request->name;
        $pType->description = $request->description;
        $pType->cost = $request->cost;
        $pType->save();
        return redirect("/ptype");
    }
    
    function new(Request $request) {
        $pType = new ProductType();
        $pType->name = $request->name;
        $pType->description = $request->description;
        $pType->cost = $request->cost;
        $pType->save();
        return redirect("/ptype");
    }

    function del($id) {
        ProductType::find($id)->delete();
        return redirect("/ptype");
    }
}
