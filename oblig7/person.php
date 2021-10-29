<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class person {

        var $name;
        var $alder;
        var $mobil;
        var $epost;

        function __construct($name, $alder, $mobil, $epost){
            $this->name = $name;
            $this->alder = $alder;
            $this->mobil = $mobil;
            $this->epost = $epost;

        }

        function get_name(){

            return $this->name;
            
        }

        function get_alder(){

            return $this->alder;
            
        }

        function get_mobil(){

            return $this->mobil;
            
        }

        function get_epost(){

            return $this->epost;
            
        }

        // echo "hele navet til clausen er: " .$clausen->get_name() . "<br>";
        // echo " alderen til Clausen er: " .$clausen->get_alder()) . "<br>";
        // echo "Nummere til Clausen er: " .$clausen->get_mobil() . "<br>";
        // echo "Eposten til Clausen er: " .$clausen->get_epost() . "<br>";
    }
    
    ?>
</body>
</html>