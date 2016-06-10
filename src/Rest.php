<?php

namespace Tszy\Rest;
class Rest{
    //Adres URL zapytania do Stream API Twittera
    protected $Apiurl = "https://api.twitter.com/1.1/search/tweets.json?q=golang";
    //tablica przechowująca pobrane dane
    protected $odpowiedz = array();
        //metoda wysyła zapytanie i odczytuje odpowiedz w formacie JSON i zapisuje w $odpowiedz
    public function wyslijzapytanie(){
	return 'world';
    }
    //funkcja odpowiedzialna za aktualizację wyników
    public function obserwuj(){
        
    }
    //wyświetlanie wyników
    public function wyswietlstatystyki(){
        
    }
        
}