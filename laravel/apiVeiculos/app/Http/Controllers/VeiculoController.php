<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use Validator;
use Illuminate\Pagination\Paginator;

class VeiculoController extends Controller
{
 protected function validarVeiculo($request){
        $validator = Validator::make($request->all(),[
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|numeric|min:0',
            'preco' => 'required|numeric|min:0',
            ]);
        return $validator;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $qtd = $request['qtd'];
       $page = $request['page'];
       Paginator::currentPageResolver
           (function () use ($page) {
           return $page;
       });
       $veiculos = Veiculo::paginate($qtd);
       $veiculos = $veiculos->appends
           (Request::capture()->except('page')); 
       return response()->json
             (['veiculos'=>$veiculos], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          try{
        $validator = $this->validarVeiculo($request);
        if($validator->fails()){
            return response()->json(['message'=>'Erro', 
                'errors' => $validator->errors()], 
                400);
        }
        $data = $request->only(['marca', 'modelo', 'ano', 'preco']);
        if($data){
            $veiculo = Veiculo::create($data);
            if($veiculo){
                return response()->json(['data'=> $veiculo], 201);
            }else{
                return response()->json(['message'=>'Erro ao criar o veículo', 'data'=> $veiculo], 201);
            }
        }else{
            return response()->json(['message'=>'Dados inválidos'], 400);
        }     
        }catch (\Exception $e){
            return response()->json(['message'=>'Ocorreu um erro no servidor'], 500);
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
        if($id<0){
           return response()->json(['message'=>'valor menor q zero'], 400);
          }
        $veiculo = Veiculo::find($id);
        if($veiculo){
            return response()->json([$veiculo], 200);

        }else{
            return response()->json(['message'=>'o veiculo com id '.$id.' N existe'], 404);
 
        }
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $validator = $this->validarVeiculo($request);
    if($validator->fails()){
      return response()->json
         (['message'=>'Erro', 
      'errors' => $validator->errors()], 
       400);
    }
    $data = $request->only
      (['marca', 'modelo', 'ano', 'preco']);
    if($data){
    $veiculo = Veiculo::find($id);
    if($veiculo){
      $veiculo->update($data);
      return response()->json
         (['data'=> $veiculo], 200);
    }else{
      return response()->json
         (['message'=>'O veículo com
           id '.$id.' não existe'], 400);
    }
   }else{
      return response()->json
          (['message'=>'Dados inválidos'], 400);
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
      if($id < 0){
       return response()->json
          (['message'=>'ID menor que zero, por favor, 
           informe um ID válido'], 400);
   }
   $veiculo = Veiculo::find($id);
   if($veiculo){
     $veiculo->delete();
      return response()->json([], 204);
   }else{
     return response()->json
        (['message'=>'O veículo com id 
        '.$id.' não existe'], 404);
   }
 }
}
