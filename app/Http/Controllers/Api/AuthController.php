<?php
    
    namespace App\Http\Controllers\Api;
    
    use App\Http\Controllers\Controller;
    use App\Models\ApiToken;
    use Illuminate\Http\Request;
    
    class AuthController extends Controller
    {
        public function login( Request $request )
        {
            // Pobierz przesłany token z nagłówka
            $token = $request->header( 'Authorization' );
            
            // Sprawdź, czy token został przesłany
            if ( !$token ) {
                return response()->json( [ 'error' => 'Brak tokenu autoryzacyjnego' ], 401 );
            }
            
            // Znajdź token na podstawie przesłanego tokenu
            $apiToken = ApiToken::findToken( $token );
            
            // Sprawdź, czy token istnieje
            if ( !$apiToken ) {
                return response()->json( [ 'error' => 'Nieprawidłowy token autoryzacyjny' ], 401 );
            }
            
            return response()->json( [ 'message' => 'Poprawny token' ], 200 );
        }
    }
