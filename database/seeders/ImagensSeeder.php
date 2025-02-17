<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Imagem;

class ImagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Imagem::insert([
            [
                'imagem' => 'imagens_fotografias/senhora-b&w.jpg',
                'titulo' => 'Senhora',
                'categoria' => 'Preto e Branco',
            ],
            [
                'imagem' => 'imagens_fotografias/soldier-b&w.jpg',
                'titulo' => 'Soldado',
                'categoria' => 'Preto e Branco',
            ],
            [
                'imagem' => 'imagens_fotografias/kombi-color.jpg',
                'titulo' => 'Kombi',
                'categoria' => 'Colorido',
            ],
            [
                'imagem' => 'imagens_fotografias/motorbike-color.jpg',
                'titulo' => 'Motorbike',
                'categoria' => 'Colorido',
            ]
        ]);
    }
}
