<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Http\Requests\EquipmentRequest;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $equipments = Equipment::with('type')->simplePaginate(5);

        return view('index', compact('equipments'));
    }
    
    public function show(Equipment $equipment)
    {
        return view('showEquipment', compact('equipment'));
    }

    public function create()
    {
        return view('createEquipment');
    }

    public function store(EquipmentRequest $request)
    {
        Equipment::insert($request->value);

        return redirect(route('equipment.index'));
    }

    public function edit(Equipment $equipment)
    {
        return view('updateEquipment', compact('equipment'));
    }

    public function update(EquipmentRequest $request, Equipment $equipment)
    {
        $equipment->update($request->value);

        return redirect(route('equipment.index'));
    }
    
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();

        return redirect(route('equipment.index'));
    }
}
