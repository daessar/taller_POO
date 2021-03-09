<?php 
  class Viaje 
  {
    private $pasajeros_neira;
    private $pasajeros_aranzazu;
    private $pasajeros_salamina;
    private $pasajeros_pacora;
    private $pasajeros_aguadas;

    public function Viaje($ne, $ar, $sa, $pa, $ag)
    {
      $this -> pasajeros_neira = $ne;
      $this -> pasajeros_aranzazu = $ar;
      $this -> pasajeros_salamina = $sa;
      $this -> pasajeros_pacora = $pa;
      $this -> pasajeros_aguadas = $ag;
    }
    public function ValorPasaje()
    {
      $neira = $this -> pasajeros_neira * 4000;
      $aranzazu = $this -> pasajeros_aranzazu * 8000;
      $salamina = $this -> pasajeros_salamina * 12000;
      $pacora = $this -> pasajeros_pacora* 15000;
      $aguadas = $this -> pasajeros_aguadas * 20000;


      $valor_pasaje = $neira + $aranzazu + $salamina + $pacora + $aguadas;

      return $valor_pasaje;
    }
  }
?>