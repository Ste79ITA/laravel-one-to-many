<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Vue.js', 'React.js', 'Node.js', 'Bootstrap', 'Tailwind'];

        foreach ($technologies as $technology_name) {

            $new_type = new Technology();

            $new_type->name = $technology_name;
            $new_type->slug = Str::slug($technology_name);

            $new_type->save();
        }
    }
}
