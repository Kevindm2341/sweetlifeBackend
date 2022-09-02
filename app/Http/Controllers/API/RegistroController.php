<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Registro;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function getAll(){
        $data = DB::table('registro')->get()->where('fecha', '=', Carbon::now()->format('Y-m-d'));
        $data1 = array();
        foreach ($data as $data2) {
            array_push($data1, $data2);
        };
        return response()->json($data1, 200);
    }
    public function crear(Request $request){
        $data['fecha'] = $request['fecha'];
        $data['hora'] = $request['hora'];
        $data['contador'] = $request['contador'];
        Registro::create($data);

        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function modificar(Request $request,$id){
        $data['fecha'] = $request['fecha'];
        $data['hora'] = $request['hora'];
        $data['contador'] = $request['contador'];
        Registro::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }
    public function horasDia() {
        return null;
    }
}
