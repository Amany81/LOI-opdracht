<DOCTYPE html>
 <html> <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width">
    <title>Cirkeldiameter</title>
    
 </head>
 <body>
    <h1> Cirkel Diameter </h1>
    <?php
    class Cirkel{
        public float $diameter;
        public function __construct(float $diameter){
            $this->diameter=$diameter;
        }
        public function oppervlakteCirkel():float{
            $straal= $this->diameter/2;
            return pi()* $straal *$straal;
        }
        public function omtrekCirkel():float{
            return pi()* $this->diameter;
        }
    }
    //Demonstreer Drie Opjecten (3 Voorbeelden van Cirkels):
    $autoband = new Cirkel (0.20); //diameter in meters
    $pizza    = new Cirkel(0.09); //diameter in meters
    $Voetbal  = new Cirkel (0.10); //diameter in meters
    
    echo "<h1> De Cirkel van de  autoband heeft een omtrek van "
     .number_format( $autoband ->omtrekCirkel(),2).
      " meter <br>en een oppervlakte van " .
      number_format ($autoband->oppervlakteCirkel(),2)."</h1><br>";
      echo "####";
      echo "<h1> De  Cirkel van de pizza heeft een omtrek van "
      .number_format( $pizza ->omtrekCirkel(), 2).
       " meter <br>en een oppervlakte van " .
       number_format ($pizza->oppervlakteCirkel(),2)."</h1> <br>"; 
       echo "####";
       echo "<h1> De  Cirkel van de voetbal heeft een omtrek van "
      .number_format( $Voetbal ->omtrekCirkel(), 2).
       " meter <br>en een oppervlakte van " .
       number_format ($Voetbal->oppervlakteCirkel(),2)."</h1> "; 
       
     ?>
 </body>
     </html> 