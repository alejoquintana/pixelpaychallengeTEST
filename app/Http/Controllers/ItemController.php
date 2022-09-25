<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public static function get(){
        return Item::all();
    }

    public static function create(Request $request){
        // request: text
        return Item::create([
            'text' => $request->text
        ]);
    }

    public static function update(){
        // request: id,field,value
        $field = $request->field;
        $item = Item::find($request->id);
        $item->$field = $request->value;
        $item->save();
        return $item;
    }

    public static function delete($id){
        return Item::delete();
    }
}
