<?php
    
    namespace App\Http\Controllers\Api;
    
    use App\Http\Controllers\Controller;
    use App\Models\Currency;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    
    class CurrencyController extends Controller
    {
        public function index()
        {
            return Currency::whereDate( 'date', Carbon::today() )
                ->get( [ 'currency', 'date', 'amount' ] );
        }
        
        public function store( Request $requestData )
        {
            $requestData->validate( [
                'currency' => 'required',
                'date' => 'required|date',
                'amount' => 'required|numeric'
            ] );
            
            $currency = Currency::where( 'currency', $requestData[ 'currency' ] )
                ->whereDate( 'date', $requestData[ 'date' ] )
                ->first();
            
            if ( $currency ) {
                return response()->json( [
                    'message' => 'Waluta została już dzisiaj dodana',
                    'currency' => $currency
                ], 422 );
            }
            
            $currency = Currency::create( $requestData->all() );
            
            return response()->json( [
                'message' => 'Waluta została dodana poprawnie',
                'currency' => $currency
            ], 201 );
        }
        
        public function show( $currency )
        {
            return Currency::select( 'currency', 'date', 'amount' )
                ->where( 'currency', $currency )
                ->get();
        }
        
        public function showByCurrency( $currency )
        {
            return Currency::select( 'currency', 'date', 'amount' )
                ->where( 'currency', $currency )
                ->whereDate( 'date', Carbon::today() )
                ->first();
        }
        
        public function showByCurrencyAndDate( $currency, $date )
        {
            $currencyData = Currency::select( 'currency', 'date', 'amount' )
                ->where( 'currency', $currency )
                ->where( 'date', $date )
                ->first();
            
            if ( !$currencyData ) {
                return response()->json( [ 'error' => 'Waluty nie znaleziono' ], 404 );
            }
            return $currencyData;
            
        }
        
        public function showByDate( $date )
        {
            $currencies = Currency::select( 'currency', 'date', 'amount' )
                ->where( 'date', $date )
                ->get();
            
            if ( $currencies->isEmpty() ) {
                return response()->json( [ 'error' => 'Nie znaleziono walut dla podanej daty.' ], 404 );
            }
            
            return $currencies;
        }
        
    }
