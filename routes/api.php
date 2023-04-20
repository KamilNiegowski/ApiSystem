<?php
    
    use App\Http\Controllers\Api\AuthController;
    use App\Http\Controllers\Api\CurrencyController;
    use Illuminate\Support\Facades\Route;
    
    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "api" middleware group. Make something great!
    |
    */
    
    // Route group dla autoryzowanych użytkowników
    Route::middleware( 'auth:sanctum' )->group( function () {
        
        // Endpoint dla pobrania kursów walut
        Route::get( '/currencies', [ CurrencyController::class, 'index' ] );
        
        // Endpoint dla dodania kursu waluty
        Route::post( '/currencies', [ CurrencyController::class, 'store' ] )
            ->middleware( 'once-per-day' );
        
    } );

// Endpoint dla autoryzacji tokenu
    Route::post( '/login', [ AuthController::class, 'login' ] );

