<?php

use Illuminate\Database\Seeder;
use App\Funcionario;
class FuncionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionario::create([
            'nome'          => 'Marinho da Silva',
            'rg'            => '409853',
            'cpf'           => '986.698.782-96',
            'profissao'     => 'Pintor',
            'telefone'      => '096992058888',
            'observacao'    => 'registro teste 123',
        ]);
    }
}
