<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
         /* $search = DB::table('equipments')
                   ->join('types', 'equipments.code_type', '=', 'types.id')
                   ->where('equipments.sireal_number', 'like', '%'. $request->value . '%')
                   ->orWhere('types.name', 'like', '%'. $request->value . '%')
                   ->get(); */

         $search['equipment'] = Equipment::where('sireal_number', 'like', '%'. $request->value . '%')->get();

         $search['equipment'] = Type::where('name', 'like', '%'. $request->value . '%')->get();
         
         return $search;
    }
}
