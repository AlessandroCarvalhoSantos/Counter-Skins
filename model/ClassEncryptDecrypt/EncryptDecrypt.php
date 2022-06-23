<?php

namespace Model\ClassEncryptDecrypt;

class EncryptDecrypt{

    private $algoritmo = 'AES-256-CBC';
    private $chave = 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855';
    private $iv = "AdASdhASdhKASAGd";

    public function encrypt($value){
       $cod = openssl_encrypt($value, $this->algoritmo, $this->chave, OPENSSL_RAW_DATA, $this->iv);
       return str_replace(['+','/','='], ['-','_',''], base64_encode($cod));
    }

    public function decrypt($value){
        return openssl_decrypt(base64_decode(str_replace(['-','_'], ['+','/'], $value)), $this->algoritmo, $this->chave, OPENSSL_RAW_DATA, $this->iv);
    }
}


?>