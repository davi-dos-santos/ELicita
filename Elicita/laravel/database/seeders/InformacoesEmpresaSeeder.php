<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InformacoesEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\InformacoesEmpresa::factory(19)->create();
    }
}
