<?php 
  class Llamada
  {
		private $indicativo;
		private $duracion;

		public function Llamada($ind, $dur)
    {
			$this->indicativo = $ind;
			$this->duracion = $dur;
		}

		public function getIndicativo()
    {
			return $this->indicativo;
		}

		public function getDuracion()
    {
			return $this->duracion;
		}

		public function zona()
    {
			$zona = "";
			switch ($this->indicativo) {
				case 12:
					$zona = "América del Norte";
					break;
				case 15:
					$zona = "América Central";
					break;
				case 18:
					$zona = "América del Sur";
					break;
				case 19:
					$zona = "Europa";
					break;
				case 23:
					$zona = "Asia";
					break;
				case 25:
					$zona = "África";
					break;
				case 29:
					$zona = "Oceanía";
					break;
			}
			return $zona;
		}	

		public function totalAPagar()
    {
			$total = 0;
			$resta = 0;
			if($this->indicativo == "12" && $this->duracion <= 4){
				$total = $this->duracion * 200;
			}

			if($this->indicativo == "12" && $this->duracion > 4){
				$resta = $this->duracion - 4;
				$total = 4 * 200 + $resta * 150;
			}

			if($this->indicativo == "15" && $this->duracion <= 4){
				$total = $this->duracion * 220;
			}

			if($this->indicativo == "15" && $this->duracion > 4){
				$resta = $this->duracion - 4;
				$total = 4 * 220 + $resta * 180;
			}

			if($this->indicativo == "18" && $this->duracion <= 4){
				$total = $this->duracion * 450;
			}
			
			if($this->indicativo == "18" && $this->duracion > 4){
				$resta = $this->duracion - 4;
				$total = 4 * 450 + $resta * 350;
			}

			if($this->indicativo == "19" && $this->duracion <= 4){
				$total = $this->duracion * 350;
			}
			
			if($this->indicativo == "19" && $this->duracion > 4){
				$resta = $this->duracion - 4;
				$total = 4 * 350 + $resta * 270;
			}

			if($this->indicativo == "23" && $this->duracion <= 4){
				$total = $this->duracion * 600;
			}
			
			if($this->indicativo == "23" && $this->duracion > 4){
				$resta = $this->duracion - 4;
				$total = 4 * 600 + $resta * 460;
			}

			if($this->indicativo == "25" && $this->duracion <= 4){
				$total = $this->duracion * 600;
			}
			
			if($this->indicativo == "25" && $this->duracion > 4){
				$resta = $this->duracion - 4;
				$total = 4 * 600 + $resta * 460;
			}

			if($this->indicativo == "29" && $this->duracion <= 4){
				$total = $this->duracion * 500;
			}
			
			if($this->indicativo == "29" && $this->duracion > 4){
				$resta = $this->duracion - 4;
				$total = 4 * 500 + $resta * 390;
			}
			return $total;
    }
	}
?>