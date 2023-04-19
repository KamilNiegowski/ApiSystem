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
                'tokenable_type' => 'App\Models\User', // Nazwa modelu użytkownika
                'name' => 'TokenAuth', // Nazwa tokenu
                'token' => hash( 'sha256', 'token_autoryzacyjny' ), // Token zahaszowany
                'abilities' => '["*"]', // Uprawnienia tokenu, w tym przypadku wszystkie
                'last_used_at' => now(), // Ostatnie użycie tokenu, w tym przypadku teraz
                'created_at' => now(), // Data utworzenia tokenu
                'updated_at' => now(), // Data ostatniej aktualizacji tokenu
            ] );
        }
    }
