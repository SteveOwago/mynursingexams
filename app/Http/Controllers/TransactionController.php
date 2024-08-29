<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function confirmationUrl(Request $request)
    {
        info('+++++++++++++++++++++++++++++++++++++++++++++++');
        info('++++++++++++++++++++Confirmation Url+++++++++++++++++++++++++++');
        $payload = json_decode($request->getContent());
        info(collect($payload));
    }


    public function validationUrl(Request $request)
    {
        info('+++++++++++++++++++++++++++++++++++++++++++++++');
        info('++++++++++++++++++++Validation Url+++++++++++++++++++++++++++');
        $payload = json_decode($request->getContent());
        info(collect($payload));
    }


    public function transactionStatusQuery(Request $request)
    {
        info('+++++++++++++++++++++++++++++++++++++++++++++++');
        info('++++++++++++++++++++Transaction Query Response+++++++++++++++++++++++++++');
        $payload = json_decode($request->getContent());
        info(collect($payload));
        if (property_exists($payload, 'Result') && $payload->Result->ResultCode == '0') {

            //Perform Data Validation (Payment)
            ## Confirm the transaction against Student Order
            // Accessing ResultParameters
            $resultParameters = $payload->Result->ResultParameters->ResultParameter;
            $parameters = [];
            foreach ($resultParameters as $parameter) {
                $key = $parameter->Key;
                $value = isset($parameter->Value) ? $parameter->Value : null;
                $parameters[$key] = $value;
            }
            $TransactionID = $parameters['ReceiptNo'] ?? null;
            info('+++++++++++++++++++++++++++++++++++++++++++++++');
            info($TransactionID);
            info('+++++++++++++++++++++++++++++++++++++++++++++++');

            $this->setFailed(false);
        } else {
            $this->setFailed(true);
        }

        $this->setResponse($payload);

        return $this;
    }
}
