<?php
    
    namespace Database\Seeders;
    
    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    
    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            DB::table( 'personal_access_tokens' )->insert( [
                'tokenable_id' => 1, // ID użytkownika, który będzie miał dostęp do API, w tym przypadku 1
                'tokenable_type' => 'KRGroup', // Nazwa modelu użytkownika
                'name' => 'TokenAuth', // Nazwa tokenu
                'token' => 'token_autoryzacyjny', // Token autoryzacyjny
                'abilities' => '["*"]', // Uprawnienia tokenu, w tym przypadku wszystkie
                'last_used_at' => now(), // Ostatnie użycie tokenu, w tym przypadku teraz
                'created_at' => now(), // Data utworzenia tokenu
                'updated_at' => now(), // Data ostatniej aktualizacji tokenu
            ] );
        }
    }
