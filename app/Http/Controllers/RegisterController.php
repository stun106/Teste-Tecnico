<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    $user = User::create([
        'nome' => $request->input("nome"),
        'email' => $request->input("email"),
        'cpf' => $request->input("cpf"),
        'perfil' => $request->input("perfil"),
    ]);

    $enderecos = $request->input('enderecos');

    if (!empty($enderecos)) {
        foreach ($enderecos as $endereco) {
            Address::create([
                'user_id' => $user->id,
                'logradouro' => $endereco['logradouro'],
                'cep' => $endereco['cep'],
            ]);
        }
    }

    return response()->json(['message' => 'Usuário registrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }

        $addresses = Address::where('user_id', $id)->get();
        return response()->json($addresses);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->addresses()->delete();
        }
    }
}
