<?php
/**
 * @file
 * Contains PokeapiClient.
 * Connects to the pokeApi
 */

class PokeapiClient {

  protected $base_url;

  public function __construct() {
    $this->base_url =  'https://pokeapi.co/api/v2/';
  }

  public function makeGuzzleRequest( $method, $path, $parameters = [], $headers = [] ) {

        $defaultHeaders = [
            'Accept'         => 'application/json',
            'Content-Type'   => 'application/json',
        ];
        $headers        = array_merge( $defaultHeaders, $headers );
        $response       = drupal_http_request( $path, [
            'headers' => $headers,
            'method'  => $method,
            'data'    => $parameters,
            'timeout' => 300
        ] );

        $body = (string) $response->data;;

        return json_decode( $body, true );
    }

    public function getPokemonList(){
        $pokes = $this->makeGuzzleRequest('GET',$this->base_url.'pokemon?limit=120');

        return $pokes;
    }

    public function getPokemonById($pokeId){
        $poke = $this->makeGuzzleRequest('GET',$this->base_url.'pokemon/'.$pokeId);

        return $poke;
    }

}
