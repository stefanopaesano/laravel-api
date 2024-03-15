<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

use App\Models\Type;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();

        $types = Type::pluck('id');
        
        if ($types->isEmpty()) {
            echo "Nessun tipo trovato. Assicurati di eseguire TypeSeeder prima di ProjectSeeder.\n";
            return;
        }

        foreach (range(1, 12) as $index) {
            DB::table('projects')->insert([
                'title' => $faker->sentence(6, true), 
                'slug' => Str::slug($faker->unique()->sentence(6, true), '-'), 
                'image' => $faker->imageUrl(640, 480, 'projects', true), 
                'description' => $faker->paragraphs(asText: true), 
                'date' => $faker->date(),
                'type_id' => $types->random(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}