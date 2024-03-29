<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome'); 
    }

    public function fnEstDetalle($id){
        $xDetAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle', compact('xDetAlumnos')); 
    }

    public function fnEstActualizar($id){
        $xActAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagActualizar', compact('xActAlumnos')); 
    }

    public function fnEliminar($id){
        $deleteAlumno = Estudiante::findOrFail($id);
    $deleteAlumno->delete(); 
    return back()->with('msj','Se ELIMINO con éxito...'); //Regresar con msj
    
    }

    public function fnUpdate(Request $request, $id){

        $xUpdateAlumnos = Estudiante::findOrFail($id);


        //return $request->all();         //Prueba de "token" y datos recibidos
    
           
        $xUpdateAlumnos->codEst = $request->codEst;
        $xUpdateAlumnos->nomEst = $request->nomEst;
        $xUpdateAlumnos->apeEst = $request->apeEst;
        $xUpdateAlumnos->fnaEst = $request->fnaEst;
        $xUpdateAlumnos->turMat = $request->turMat;
        $xUpdateAlumnos->semMat = $request->semMat;
        $xUpdateAlumnos->estMat = $request->estMat;
            
        $xUpdateAlumnos->save();
            
        //$xAlumnos = Estudiante1::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se ACTUALIZO con éxito...'); //Regresar con msj
    }
    
    public function fnRegistrar(Request $request){


        //return $request->all();         //Prueba de "token" y datos recibidos
    
        $request ->validate([
            'codEst' => 'required',
            'nomEst' => 'required',
            'apeEst' => 'required',
            'fnaEst' => 'required',
            'turMat' => 'required',
            'semMat' => 'required',
            'estMat' => 'required'
        ]);
    
        $nuevoEstudiante = new Estudiante;
        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;
            
        $nuevoEstudiante->save();
            
        //$xAlumnos = Estudiante1::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se registro con éxito...'); //Regresar con msj
    }

        

    public function fnLista(){
        $xAlumnos = Estudiante::paginate(4);
        return view('pagLista', compact('xAlumnos')); 
    }

    public function fnGaleria($numero=0){
        return view('pagGaleria', ['valor' =>$numero, 'otro' =>25]);
        //return view('pagGaleria', compact('valor', 'otro')); 
    }


    
  ///////////////////////////////////////////////////////////////////////////  



    public function fnCurso(){
        $xCurso = Curso::paginate(4);
        return view('pagCurso', compact('xCurso')); 
    }

    public function fnRegistrarCurso(Request $request){
        
        $request ->validate([
            'codCur' => 'required',
            'denCur' => 'required',
            'hrsCur' => 'required',
            'creCur' => 'required',
            'plaCur' => 'required',
            'tipCur' => 'required',
            'estCur' => 'required'
        ]);
    
        $nuevoCurso = new Curso;

        $nuevoCurso->codCur = $request->codCur;
        $nuevoCurso->denCur = $request->denCur;
        $nuevoCurso->hrsCur = $request->hrsCur;
        $nuevoCurso->creCur = $request->creCur;
        $nuevoCurso->plaCur = $request->plaCur;
        $nuevoCurso->tipCur = $request->tipCur;
        $nuevoCurso->estCur = $request->estCur;
            
        $nuevoCurso->save();
            
        //$xAlumnos = Estudiante1::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se registro con éxito...'); //Regresar con msj
    }

    public function fnCurDetalle($id){
        $xDetCurso = Curso::findOrFail($id);
        return view('Curso.pagDetalleCurso', compact('xDetCurso')); 
    }

    public function fnCurActualizar($id){
        $xActCurso = Curso::findOrFail($id);
        return view('Curso.pagActualizarCurso', compact('xActCurso')); 
    }

    public function fnEliminarCurso($id){
        $deleteCurso = Curso::findOrFail($id);
    $deleteCurso->delete(); 
    return back()->with('msj','Se ELIMINO con éxito...'); //Regresar con msj
    
    }

    public function fnUpdateCurso(Request $request, $id){
        $xUpdateCurso = Curso::findOrFail($id);


        //return $request->all();         //Prueba de "token" y datos recibidos
    
           
        $xUpdateCurso->codCur = $request->codCur;
        $xUpdateCurso->denCur = $request->denCur;
        $xUpdateCurso->hrsCur = $request->hrsCur;
        $xUpdateCurso->creCur = $request->creCur;
        $xUpdateCurso->plaCur = $request->plaCur;
        $xUpdateCurso->tipCur = $request->tipCur;
        $xUpdateCurso->estCur = $request->estCur;
            
        $xUpdateCurso->save();
            
        //$xAlumnos = Estudiante1::all();                      //Datos de BD
        //return view('pagLista', compact('xAlumnos'));        //Pasar a pagLista
        return back()->with('msj','Se ACTUALIZO con éxito...'); //Regresar con msj
    }
}


    