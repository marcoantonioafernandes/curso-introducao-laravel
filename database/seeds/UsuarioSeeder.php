<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $dados = [
            'name' => 'Marco Antônio de Almeida Fernandes',
            'email' => 'admin@mail.com',
            'password' => bcrypt('12345')
        ];

        if(User::where('email','=', $dados['email'])->count()){
            $usuario = User::where('email','=', $dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario alterado\n";
        }else{
            User::create($dados);
            echo "Usuario criado\n";
        }
    }
}
