<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function confirmationUrl(Request $request){
        info('+++++++++++++++++++++++++++++++++++++++++++++++');
        info('++++++++++++++++++++Confirmation Url+++++++++++++++++++++++++++');
        $payload = json_decode($request->getContent());
        info(collect($payload));
    }


    public function validationUrl(Request $request){
        info('+++++++++++++++++++++++++++++++++++++++++++++++');
        info('++++++++++++++++++++Validation Url+++++++++++++++++++++++++++');
        $payload = json_decode($request->getContent());
        info(collect($payload));
    }


    public function paymentQuery(Request $request){
        info('+++++++++++++++++++++++++++++++++++++++++++++++');
        info('++++++++++++++++++++Transaction Query Response+++++++++++++++++++++++++++');
        $payload = json_decode($request->getContent());
        info(collect($payload));
    }
}
