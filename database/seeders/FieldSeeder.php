<?php // database/seeders/FieldSeeder.php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = Contact::all();

        foreach ($contacts as $contact) {
            Field::factory(3)->create([
                'contact_id' => $contact->id,
            ]);
        }
    }
}
