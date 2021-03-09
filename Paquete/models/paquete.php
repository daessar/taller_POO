<?php 
  class Paquete
  {
    private $tipo;
    private $servicio;
    private $peso;

    public function Paquete($tip, $ser, $pes)
    {
      $this -> tipo = $tip;
      $this -> servicio = $ser;
      $this -> peso = $pes;
    }
    public function CalcularCosto()
    {
      $costo = 0;

      //Carta

      //Mañana
      if ($this -> tipo == "carta" && $this -> servicio == "tomorrow" && $this -> peso <= 5) {
        $costo = $this -> peso * 5100;
      }elseif ($this -> tipo == "carta" && $this -> servicio == "tomorrow" && $this -> peso > 5) {
        $costo = ($this -> peso - 5) * 1900 + 5100;
      //Hoy
      }elseif ($this -> tipo == "carta" && $this -> servicio == "hoy" && $this -> peso <= 5) {
        $costo = $this -> peso * 12650;
      }elseif ($this -> tipo == "carta" && $this -> servicio == "hoy" && $this -> peso > 5) {
        $costo = ($this -> peso - 5) * 4500 + 12650;
      }

      //Caja

      //Mañana
      if ($this -> tipo == "caja" && $this -> servicio == "tomorrow" && $this -> peso <= 5) {
        $costo = $this -> peso * 6300;
      }elseif($this -> tipo == "caja" && $this -> servicio == "tomorrow" && $this -> peso > 5) {
        $costo = ($this -> peso - 5) * 2300 + 6300;
      //Hoy
      }elseif($this -> tipo == "caja" && $this -> servicio == "hoy" && $this -> peso <= 5) {
        $costo = $this -> peso * 14000;
      }elseif($this -> tipo == "caja" && $this -> servicio == "tomorrow" && $this -> peso > 5) {
        $costo = ($this -> peso - 5) * 5100 + 14000;
      }
      return $costo;
    }
  }
?>