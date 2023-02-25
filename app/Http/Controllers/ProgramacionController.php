<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class ProgramacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function program(Request $request){
        $id = $request->id;
        $NumeroTrimestre = $request->id2;
        $k = auth()->user()->email;
        $ver = DB::table('instructors')
        ->where('instructors.Instruct_EmailAlternativo','=',$k)
        ->get();
        $ficha = DB::table('fichas')
        ->where('fichas.id', '=', $id)
        ->get();
        foreach($ficha as $infof){
            $foren = $infof->RutaFormacionId ;
        }
        $ruta = DB::table('ruta__formacions')
        ->where('ruta__formacions.id','=',$foren)
        ->get();

        foreach($ruta as $forer){
            $idr = $forer->id;
        }
        $detalleruta = DB::table('detalle_rutas')
        ->where('detalle_rutas.RutaFormacionId','=',$idr)
        ->get();

        $inst = App\Instructor::all();

        $ambi = App\Ambientes::all();
        return view('Programacion.programar',compact('detalleruta','ver','ambi','inst','ficha','NumeroTrimestre'));
    }

    public function index(){
        if($r = auth()->user()->rol == 'Administrador'){
            $k = auth()->user()->email;
            $ver = DB::table('instructors')
            ->where('instructors.Instruct_EmailAlternativo','=',$k)
            ->get();
            $verAm = app\Ambientes::all();
            $verF = app\Ficha::all();
            $verI = app\Instructor::all();
            $programa = app\Programa::all();
            $programacion = app\ficha::all();
            $TipoPrograma = app\Tipo_Programa::all();

            return view('Programacion.index',compact('verAm','verF','verI','ver','programa','TipoPrograma'));
        }
        if($r = auth()->user()->rol == 'Instructor'){
            $k = auth()->user()->email;
            $ver = DB::table('instructors')
            ->where('instructors.Instruct_EmailAlternativo','=',$k)
            ->get();

            foreach($ver as $info){
                $id = $info->id;
            }

            $programa = DB::table('programacions')
            ->where('programacions.InstructorId','=',$id)
            ->get();

            return view('maestros.Programacion.programacion',compact('ver','programa'));
        }
        if($r = auth()->user()->rol == 'Aprendiz'){
            $k = auth()->user()->email;
            $ver = DB::table('aprendizs')
            ->where('aprendizs.Aprend_Email','=',$k)
            ->get();

            foreach($ver as $ifn){
                $fr = $ifn->FichaId;
            }

            $fichav = DB::table('fichas')
            ->where('fichas.id','=',$fr)
            ->get();

            foreach($fichav as $infof){
                $idfh = $infof->id;
            }
            $programf = DB::table('programacions')
            ->where('programacions.FichaId','=',$idfh)
            ->get();

            $ambientes = App\Ambientes::all();
            $instructor = App\Instructor::all();

            return view('aprendiz.programacion',compact('programf','ver','ambientes','fichav','instructor'));
        }

    }

    public function programacionficha(){
        if($r = auth()->user()->rol == 'Instructor'){
            $k = auth()->user()->email;
            $ver = DB::table('instructors')
            ->where('instructors.Instruct_EmailAlternativo','=',$k)
            ->get();

            foreach($ver as $info){
                $id = $info->id;
            }

            $ficha = DB::table('fichas')
            ->where('fichas.InstructorId','=',$id)
            ->get();

            foreach($ficha as $as){
                $idf = $as->id;
            }


            $fic = App\Ficha::all();

            $programa = App\Programacion::all();

            return view('maestros.Programacion.ficha',compact('ver','programa','ficha','id','fic'));
        }
    }

    public function indexl(){
        if($r = auth()->user()->rol == 'Administrador'){
            $k = auth()->user()->email;
            $ver = DB::table('instructors')
            ->where('instructors.Instruct_EmailAlternativo','=',$k)
            ->get();
            $verPcion = app\Programacion::all();
            $verFichas = app\Ficha::all();
            $verPrograma = app\Programa::all();
            $verTipoPrograma = app\Tipo_Programa::all();
            return view('Programacion.lista',compact('verPcion','ver','verFichas','verPrograma','verTipoPrograma'));
        }

    }

    public function GuardarPro(Request $request){

        // return $request;
       $ambientes =  $request->ambientesIdAmbientes;
        for($i = 0; $i < count($ambientes); $i++){
            if($r = auth()->user()->rol == 'Administrador'){
                $k = auth()->user()->email;
                $ver = DB::table('instructors')
                ->where('instructors.Instruct_EmailAlternativo','=',$k)
                ->get();
                $GuardarP = new App\Programacion();
                $GuardarP->Program_FechaInicio = $request->FechaInicio;
                $GuardarP->Program_FechaFinal = $request->FechaFin;
                $GuardarP->Program_Trimestre = $request->Program_Trimestre;
                $GuardarP->Program_Dia = $request->DiaProgramacion[$i];
                $GuardarP->Program_HoraInicio = $request->HoraInicion[$i];
                $GuardarP->Program_HoraFinal = $request->HoraFin[$i];
                $GuardarP->Program_Franja = $request->Program_Franja[$i];
                $GuardarP->ambientesIdAmbientes = $request->ambientesIdAmbientes[$i];
                $GuardarP->FichaId = $request->FichaId;
                $GuardarP->InstructorId = $request->InstructorId[$i];
                $GuardarP->save();


            }
        }
        return view('programacion.lista',compact('ver'));


    }

    public function resultjson(){
        $verf = App\Programacion::All();
        $datos = array('data' => $verf);
        return $datos;
    }

    public function delectePro($id){
        $deleteFicha = App\Programacion::FindOrFail($id);
        $deleteFicha->delete();
        return redirect('programacion/lista');
    }
    public function updatePro($id,$id2){
        if($r = auth()->user()->rol == 'Administrador'){
            $k = auth()->user()->email;
            $ver = DB::table('instructors')
            ->where('instructors.Instruct_EmailAlternativo','=',$k)
            ->get();
            $verAm = app\Ambientes::all();
            $verF = app\Ficha::all();
            $verI = app\Instructor::all();

            $updatePro = DB::table('programacions')
            ->join('ambientes','ambientes.id','=','programacions.ambientesIdAmbientes')
            ->join('instructors','instructors.id','=','programacions.InstructorId')
            ->join('fichas','fichas.id','=','programacions.FichaId')
            ->select('programacions.*','ambientes.Ambien_Nombres','instructors.Instruct_Nombres','fichas.Ficha_Numero')
            ->where('programacions.Program_Trimestre','=',$id2)
            ->where('programacions.FichaId','=',$id)
            ->get();

            foreach($updatePro as $info){
                $NFicha = $info->Ficha_Numero;
                $NmInstructor = $info->Instruct_Nombres;
                $NmAmbiente = $info->Ambien_Nombres;
            }

            // return $updatePro;

            if($updatePro == "[]"){
                $mensaje = '<script>console.log("hola")</script>';
                return redirect()->back() ->with('mensaje');
            }else{
                return view('programacion/actualizar',compact('updatePro','verAm','verF','verI','ver','id','NFicha','NmInstructor','NmAmbiente'));
            }

            // return view('programacion/actualizar',compact('updatePro','verAm','verF','verI','ver','id','NFicha','NmInstructor','NmAmbiente'));
        }

    }
    public function updateBDPro(Request $request){

        $ActualizarPro = App\Programacion::FindOrFail($request->id);
        $ActualizarPro->Program_Dia = $request->dia;
        $ActualizarPro->Program_HoraInicio = $request->inicio;
        $ActualizarPro->Program_HoraFinal = $request->fin;
        $ActualizarPro->Program_Franja = $request->franja;
        $ActualizarPro->ambientesIdAmbientes = $request->IdAmbiente;
        $ActualizarPro->InstructorId = $request->IdInstructor;
        $ActualizarPro->update();
        return redirect('programacion/lista');
    }

    public function JsonInstructor($id){
        $instructor = DB::table('programacions')
        ->join('instructors','programacions.InstructorId','=','instructors.id')
        ->where('programacions.InstructorId','=',$id)
        ->get();

        return $instructor;
    }

    public function JsonAmbiente($id){
        $ambientes = DB::table('programacions')
        ->join('ambientes','programacions.ambientesIdAmbientes','=','ambientes.id')
        ->where('programacions.ambientesIdAmbientes','=',$id)
        ->get();

        return $ambientes;
    }

    public function JsonActualizar($id){
        // $events = array();
        $updatePro = App\Programacion::FindOrFail($id);

            // $events[] = [
            //     'title' => $updatePro->Program_Dia,
            //     'daysOfWeek' => [1],
            //     'startTime' => $updatePro->Program_HoraInicio,
            //     'endTime' => $updatePro->Program_HoraFinal,
            //     'display' => 'background',
            // ];




        return $updatePro;
    }
}
