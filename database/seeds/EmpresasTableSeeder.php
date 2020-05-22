<?php

use Illuminate\Database\Seeder;
use App\Empresa;
class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nomefantasia' => 'Norte Dedetização Ltda.',
            'razaosocial'  => 'M. DO PILAR CORREA CARDOSO EIRELI',
            'cnpj' => '11.128.124/0001-73'
        ]);
    }
}
