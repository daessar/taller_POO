<?php 
  class Mes
  {
    private $numero;
    private $year;

    public function Mes($num, $ani)
    {
      $this -> numero = $num;
      $this -> year = $ani;
    }
    public function getNumero()
    {
      return $this->numero;
    }
    public function setNumero($num)
    {
      return $this->numero = $num;
    }
    public function getYear()
    {
      return $this->year;
    }
    public function setYear($ani)
    {
      return $this->numero = $ani;
    }
    public function getNombre()
    {
      $mes = "";
      switch ($this -> numero) {
        case '1':
          $mes = "Enero";
          break;
        case '2':
          $mes = "Febrero";
          break;
        case '3':
          $mes = "Marzo";
          break;
        case '4':
          $mes = "Abril";
          break;
        case '5':
          $mes = "Mayo";
          break;
        case '6':
          $mes = "Junio";
          break;
        case '7':
          $mes = "Julio";
          break;
        case '8':
          $mes = "Agosto";
          break;
        case '9':
          $mes = "Septiembre";
          break;
        case '10':
          $mes = "Octubre";
          break;
        case '11':
          $mes = "Noviembre";
          break;
        case '12':
          $mes = "Diciembre";
          break;
      }
      return $mes;
    }
    public function getTipo()
    {
      $dias = "";
      if ($this -> year % 4 != 0 || ($this -> year % 100 == 0 && $this -> year % 400 != 0)) {
        $dias = "No es bisiesto";
      }else {
        $dias = "Si es bisiesto";
      }
      return $dias;
    }
    public function getDias(){
      $can_dias = $this -> getNombre();

      if ($can_dias == "Enero" || $can_dias == "Marzo" || $can_dias == "Mayo" || $can_dias == "Julio" || $can_dias == "Octubre" || $can_dias == "Diciembre") {
        $can_dias = "31 días";
      }elseif ($can_dias == "Abril" || $can_dias == "Junio" || $can_dias == "Septiembre" || $can_dias == "Noviembre") {
        $can_dias = "30 días";
      }elseif ($can_dias == "Febrero" && $this -> getTipo() == "Si es bisiesto") {
        $can_dias = "29 días";
      }else {
        $can_dias = "28 días";
      }
      return $can_dias;
    }
  }
?>