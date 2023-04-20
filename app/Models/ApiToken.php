<?php
    
    namespace App\Models;
    
    use Laravel\Sanctum\PersonalAccessToken;
    
    class ApiToken extends PersonalAccessToken
    {
        protected $table = 'personal_access_tokens';
        
        public static function findToken( $token )
        {
            $apiToken = ApiToken::where( 'token', $token )->first();
            if ( !$apiToken ) return null;
            
            return $apiToken;
        }
    }
