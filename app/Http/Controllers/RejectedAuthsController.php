<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RejectedAuths;

class RejectedAuthsController extends Controller
{
   public function index()
   {
      return response()->json(RejectedAuths::all(), 200);
   }
   public function getSwitches($switch_id)
   {
      return response()->json(RejectedAuths::where('switch_id', $switch_id)->get(), 200);
   }

   public function storeResponse(Request $request)
   {
       return RejectedAuths::create($request->all());
   }
}
