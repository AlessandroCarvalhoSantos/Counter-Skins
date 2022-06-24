<?php


namespace Model\ClassPagamento;


require __DIR__.'/config-pix.php';



use Model\ClassPagamento\Payload;
use Model\ClassPagamento\Api;
use Mpdf\QrCode\QrCode;
Use Mpdf\QrCode\Output;


class Pagamento{

    public function gerarQrCode($valores){
        
        $obApiPix = new Api(API_PIX_URL,
        API_PIX_CLIENT_ID,
        API_PIX_CLIENT_SECRET,
        API_PIX_CERTIFICATE);

        $request = [
                'calendario' => [
                'expiracao' => 300
            ],
                'devedor' => [
                'cpf' => $valores['cpf'],
                'nome' => $valores['nome']
            ],
                'valor' => [
                'original' => $valores['valor']
            ],
            'chave' => PIX_KEY,
            'solicitacaoPagador' => 'Pagamento do item '. $valores['nome_item']
        ];

        $resposta['codeID'] = $this->gerarCode();
        //RESPOSTA DA REQUISIÇÃO DE CRIAÇÃO
        $response = $obApiPix->createCob($resposta['codeID'],$request);

    

        //VERIFICA A EXISTÊNCIA DO ITEM 'LOCATION'
        if(!isset($response['location'])){
            return false;
        }

        //INSTANCIA PRINCIPAL DO PAYLOAD PIX
        $obPayload = (new Payload)->setMerchantName(PIX_MERCHANT_NAME)
                    ->setMerchantCity(PIX_MERCHANT_CITY)
                    ->setAmount($response['valor']['original'])
                    ->setTxid("***")
                    ->setUrl($response['location'])
                    ->setUniquePayment(true);

        //CÓDIGO DE PAGAMENTO PIX
        $payloadQrCode = $obPayload->getPayload();

        $resposta['codePiX'] = $payloadQrCode; 

        //QR CODE
        $obQrCode = new QrCode($payloadQrCode);

        //IMAGEM DO QRCODE
        $image = (new Output\Png)->output($obQrCode,400);

        $resposta['image'] = $image; 

        return $resposta;

    }

    public function gerarCode(){
        $code = "COUNTERSKINS147" . mt_rand().mt_rand();
        return $code;
    }

    public function consultarPagamento($codeID){

        //INSTANCIA DA API PIX
        $obApiPix = new Api(API_PIX_URL,
                            API_PIX_CLIENT_ID,
                            API_PIX_CLIENT_SECRET,
                            API_PIX_CERTIFICATE);

        //RESPOSTA DA REQUISIÇÃO DE CRIAÇÃO
        $response = $obApiPix->consultCob($codeID);

        if(!isset($response['location'])){
            return "Houve um erro na consulta do pagamento!";
        }

        if($response['status'] == "ATIVA"){
            return "Pagamento ainda não realizado";
        }

        if($response['status'] == "REMOVIDA_PELO_PSP"){
            return "Pagamento Expirado, realiza outro";
        }

        return true;
    }
}