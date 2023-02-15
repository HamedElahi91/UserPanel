<?php

class PaymentService{
      private $merchant_id;
      private $client;
      public function __construct()
      {
           $this->merchant_id = '1f560ebc-9a76-4b01-9db1-6324c1668c59'; 
           $this->client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
      }

      public function request_payment($params){
            $amount = $params['amount'];
            $description = $params['description'];
            $callback = $params['callback'];

            $result = $this->client->PaymentRequest([
                'MerchantID' => $this->merchant_id,
                'Amount'  => $amount,
                'Description' => $description,
                'CallbackURL' => $callback
            ]);

            $_SESSION['up_amount'] = $amount;
            if($result->Status == 100){
                  wp_redirect('https://www.zarinpal.com/pg/StartPay/' . $result->Authority);
                  exit;
            }
      }
      public function verify_payment(){
            $Authority = $_GET['Authority'];
            if($_GET['Status'] == 'OK'){
                  $result = $this->client->PaymentVerification([
                        'MerchantID' => $this->merchant_id,
                        'Authority'  => $Authority,
                        'Amount' => $_SESSION['up_amount']
                    ]);
                  
                  if($result->Status == 100){
                        return [true, $result->RefID] ;
                  }else{
                        return [true, $result->Status];
                  }                   
            }else{
                  return [true, 'Transaction canceled by user'];
            }
      }
}