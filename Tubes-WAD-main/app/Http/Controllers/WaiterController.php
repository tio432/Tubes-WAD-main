<?php

namespace App\Http\Controllers;

use App\Models\Tables;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function indexWaiter(){

        // carikan meja yang memiliki reserve berstatus 0 serta order yang masih antri atau dimasak
        $meja = Tables::whereHas('reserve', function($query){
            $query->where('status', 0)->whereHas('order', function($query){
                $query->where('status', 'diantar');
            });
        })->get();

        return view('pages.waiter.index', compact('meja'));
    }

    public function orderStatus(){
        $id = request('id');
        $status = request('status');

        $order = \App\Models\Orders::find($id);
        $order->status = $status;
        $order->save();

        return redirect()->back();
    }

}
