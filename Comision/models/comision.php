<?php 
  class Comision
  {
    private $venta;

    public function Comision($venta)
    {
      $this -> venta = $venta;
    }
    public function ValorComision()
    {
      

      if ($this -> venta >= 20000 && $this -> venta <= 100000) {
        $valor_pagar = $this -> venta * 0.7;
      }elseif ($this -> venta > 100000 && $this -> venta <= 200000) {
        $valor_pagar = $this -> venta * 1.0;
      }elseif ($this -> venta > 200000) {
        $valor_pagar = $this -> venta * 1.5;
      }else{
        $valor_pagar = 0;
      }
      return $valor_pagar;
    }
  }
?>