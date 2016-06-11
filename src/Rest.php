<?php
namespace Tszy\Rest;

class Rest{
    //Adres URL zapytania do Stream API Twittera
    protected $Apiurl = "https://api.twitter.com/1.1/search/tweets.json?";
    //tablica przechowująca pobrane dane
    protected $odpowiedz;
    protected $statystyki =array();
   
   
         //metoda wysyła zapytanie i odczytuje odpowiedz w formacie JSON i zapisuje w $odpowiedz
    public function wyslijzapytanie(){
            require "vendor/autoload.php";
            $connection = new \Abraham\TwitterOAuth\TwitterOAuth('apKYon4anxyXYb3PgqMPcJCqR','o79mvGviCvd4MeWDnMHXjVzaWrM3MSUu2VjKdKq5fyIDf0zzvp','741210965123993600-dr285JUwrPxB4yTvG5j9KBQZhdtmOPk','lxfF33JJfKWo9gQIRVPB6bpnu91HKH4MpUtngp5HIBSe0');
            $content = $connection->get("account/verify_credentials");
            
            $statu = $connection->setDecodeJsonAsArray(true);
            $statu = $connection->get("search/tweets", ["q" => "golang"]);
            $this->odpowiedz = $statu;
            echo "<pre>";print_r($this->odpowiedz['statuses']); echo "</pre>";
    }
    //funkcja odpowiedzialna za aktualizację wyników
    public function obserwuj(){
        
    }
    //wyświetlanie wyników
      public function wyswietlstatystyki(){     
       
            for($i=0;$i<count($this->odpowiedz['statuses']);$i++){               
                if(!isset($this->statystyki[$this->odpowiedz['statuses'][$i]['user']['name']])){
                  $this->statystyki[$this->odpowiedz['statuses'][$i]['user']['name']]=[['Ilosc twittow:',1],['Ilosc followersow',$this->odpowiedz['statuses'][$i]['user']['followers_count']]];              
                }else{$this->statystyki[$this->odpowiedz['statuses'][$i]['user']['name']][0][1]++;} 
            
        }
        json_encode($this->statystyki);
       echo "<pre>";print_r($this->statystyki); echo "</pre>"; 
    }
        
}