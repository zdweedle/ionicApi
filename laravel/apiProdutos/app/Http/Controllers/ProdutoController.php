<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto; 

class ProdutoController extends Controller
{
    public function __construct(){
        header('Access-Control-Allow-Origin: *');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        //
      $produto = Produto::all();
      return response()->json(['data'=>$produto,'status'=>true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $produto = Produto::create($dados);
        if($produto){
            return response()->json(['data'=>$produto, 'status'=>true]);
        }else{
            return response()->json(['data'=>'Erro ao criar o produto', 'status'=>false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $produto = Produto::find($id);
      if($produto){
         return response()->json(['data'=>$produto, 'status'=>true]);
      }else{
           return response()->json(['data'=>'o produto nao foi encotrado', 'status'=>false]);

      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $produto = Produto::find($id);        
        if($produto){
            $produto->update($dados);
            return response()->json(['data'=>$produto, 'status'=>true]);
        }else{
            return response()->json(['data'=>'Erro ao editar o produto', 'status'=>false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        if($produto){
          $produto->delete();
           return response()->json(['data'=>'Produto removido com sucesso', 'status'=>true]);

        }else{
               return response()->json(['data'=>'NAO foi possivel remover', 'status'=>false]);

        }
    }
}
