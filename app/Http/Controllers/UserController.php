<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class UserController extends Controller
    {
        /**
        * Display a listing of the resource.
        */
       public function index(Request $request)
       {

        $user_all = User::all();

        $dataInicio = $request->input('data_inicio');
        $dataFim = $request->input('data_fim');
        $user = User::whereBetween('created_at', [$dataInicio, $dataFim])->get();

        if ($dataInicio && $dataFim){
            $user;
        }
        else if (!$dataInicio && !$dataFim){
            $user = User::all();
        }
        else if ($user->isEmpty()) {
            return response()->json(['error' => 'Nenhum usuário encontrado.'], 404);
        }
        return $user;
       }

       /**
        * Show the form for creating a new resource.
        */
       public function create()
       {
           //
       }

       /**
        * Store a newly created resource in storage.
        */
       public function store(Request $request)
       {
            //
        }

       /**
        * Display the specified resource.
        */
       public function show (string $id)
       {
           $dados = User::where('cpf', $id)->first();
           if($dados){
               return $dados;
            }

            $detail = User::with('address')->find($id);

            if($detail){
                return $detail;
            }

            $user = User::where('nome','LIKE','%'. $id .'%')->get();

           if($user->isEmpty()){
               return response()->json(['error' => 'Nenhum usuário encontrado.'], 404);
           }
            return $user;


       }


       /**
        * Show the form for editing the specified resource.
        */
       public function edit(string $id)
       {
           //
       }

       /**
        * Update the specified resource in storage.
        */
       public function update(Request $request, string $id)
       {
           $user = User::find($id);
            if($user){
                if ($request->has('nome')) {
                    $user->update(['nome' => $request->input('nome')]);
                }

                if ($request->has('email')) {
                    $user->update(['email' => $request->input('email')]);
                }

                if ($request->has('cpf')) {
                    $user->update(['cpf' => $request->input('cpf')]);
                }
            }
           return $user;
       }

       /**
        * Remove the specified resource from storage.
        */
       public function destroy(string $id)
       {
            $address = Address::find($id);

            $address->delete();

            return response()->json(['message' => 'Endereço excluído com sucesso']);
        }




}
