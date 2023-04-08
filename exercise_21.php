<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Object</title>
</head>
<body>
    <?php
        class Carro
        {
            public $color;
            private $anio;
            protected $nombre;

            public function __construct($color, $anio)
            {
               $this->color = $color;
               $this->anio = $anio;
            }

            public function mensaje(){
               return 'Mi carro es color ' . $this->color . ' y del año ' . $this->anio;
            }
        }

        class Modelo extends Carro{
         public function __construct($nombre, $anio)
         {
            $this->nombre = $nombre;
            $this->anio = $anio;
         }

         public function mensaje2(){
            return "Mi carro es de color: ". $this->anio . " y su modelo es " . $this->nombre;
         }
        }

        $micarro = new Carro('rojo', 2023);
      //   echo $micarro->mensaje();
        echo '<br>';
       
        $mimodelo = new Modelo('Toyota', 2023);
        echo $mimodelo->mensaje();
        echo '<br>';

        $micarro = new Carro('plateado', 2024);
      //   echo $micarro->mensaje();
        echo '<br>';

        $mimodelo = new Modelo('Chrevolet', 2023);
        echo $mimodelo->mensaje2();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>