<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Note;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::create([
            'title' => 'Mi primera nota',
            'content' => 'Contenido de la primera nota',
        ]);

    }
}
