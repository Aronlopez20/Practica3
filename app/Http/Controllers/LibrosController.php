<?php

namespace App\Http\Controllers;
use App\Models\Libros;
use Exception;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    //
    public function listLibros(){
        $libros = Libros::get();

        return response()->json([
            'libros' => $libros,
            'status' => true
        ]);
    }

    public function guardarLibros(Request $request){
        try{
            $libros = new Libros;
            $libros->titulo = $request->titulo_libros;
            $libros->autor = $request->autor_libros;
            $libros->año_publicacion = $request->año_publicacion_libros;
            $libros->genero = $request->genero_libros;
            $libros->precio = $request->precio_libros;
            $libros->descripcion = $request->descripcion_libros;
            $libros->editorial = $request->editorial_libros;
            $libros->idioma = $request->idioma_libros;
            $libros->estado = $request->estado_libros;

            $libros-> save();

            return response()->json([
                'mensaje' => 'libro creado correctamente! ;)',
                'status' => true
            ]);
        }catch(Exception $e){
            return response()->json([
                'mensaje' => 'error en la api de guardar libro',
                'status' => false
            ]);
        }
    }

    public function buscarLibros ($codigo_libros){
        $Libros = Libros::findOrfail($codigo_libros);
        return response()->json([
            'libro_buscado' => $Libros,
            'status' => true
        ]);
    }

    public function actualizarlibros (Request $request, $codigo_libros){
        try{
            $Libros = Libros::findOrFail($codigo_libros);

            $Libros->titulo = $request->titulo_libros;
            $Libros->autor = $request->autor_libros;
            $Libros->año_publicacion = $request->año_publicacion_libros;
            $Libros->genero = $request->genero_libros;
            $Libros->precio = $request->precio_libros;
            $Libros->descripcion = $request->descripcion_libros;
            $Libros->editorial = $request->editorial_libros;
            $Libros->idioma = $request->idioma_libros;
            $Libros->estado = $request->estado_libros;

            $Libros -> update();

            return response()->json([
                'mensaje' => 'libros actualizados correctamente;',
                'status' => true
            ]);

        }catch(Exception $e){
                return response()->json([
                    'mensaje' => 'Error en la api en actualizar libros',
                    'status' => false

                ]);
            }
        }

        public function eliminarlibros($codigo_libros)
        {
            try{
                $libros = Libros::findOrfail($codigo_libros);
                $libros -> delete();

                return response()->json([
                    'mensaje' => 'libro eliminado correctamente',
                    'status' => true
                ]);
            }catch(Exception $e){
                return response()->json([
                    'mensaje' => 'Error en la api de eliminar el libro',
                    'status' => false
                ]);
            }
        }
    }
