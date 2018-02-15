<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\login;
class LoginController extends Controller
{
       protected function validarLogin($request){
       $validator = Validator::make($request->all(),[
           'email' => 'required|email',
           'senha' => 'required|min:5',
           ]);
       return $validator;
       }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contas = login::all();
         return response()->json(['contas'=>$contas], 200);
    }
//


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = $this->validarLogin($request);
        if($validator->fails()){
            return response()->json(['message'=>'Erro', 
                'errors' => $validator->errors()], 
                400);
        }
     $data = $request->only(['email','senha']);
      if($data){
            $logado = login::create($data);
            if($logado){
                return response()->json(['data'=> $logado], 201);
            }else{
                return response()->json(['message'=>'Erro ao criar o veículo', 'data'=> $logado], 201);
            }
        }else{
            return response()->json(['message'=>'Dados inválidos'], 400);
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
            return response()->json(['message'=>'id menor q zero'], 400);

        }

     $login = login::find($id);
     if($login){
      return response()->json([$login], 200);
     }else{
       return response()->json
          (['message'=>'O login com id 
           '.$id.' não existe'], 404);
    }
 }
    
//


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if($id<0){
            return response()->json(['message'=>'id menor q zero'], 400);

        }
         $validator = $this->validarLogin($request);
        if($validator->fails()){
            return response()->json(['message'=>'Erro', 
                'errors' => $validator->errors()], 
                400);
        }
     $data = $request->only(['email', 'senha']);
        if($data){
            $conta = login::find($id);
            if($conta){
                $conta->update($data);
                return response()->json(['data'=> $conta], 200);
            }else{
                return response()->json(['message'=>'A conta com id '.$id.' não existe'], 400);
            }
        }else{
            return response()->json(['message'=>'Dados inválidos'], 400);
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
        if($id<0){
            return response()->json(['message'=>'id menor q zero'], 400);

        }
         $conta = login::find($id);
         if($conta){
            $conta->delete();
            return response()->json([], 204);
        }else{
            return response()->json(['message'=>'a conta com id '.$id.' não existe'], 404);
        }
    }
}
