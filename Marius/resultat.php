<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oppg8</title>
</head>
<body>
    <?php
    
        if (isset($_POST["tall1"]) &&  isset($_POST["tall2"]) && isset($_POST["Op"])){

            $tall1 = $_POST["tall1"];
            $tall2 = $_POST["tall2"];
            $Op = $_POST["Op"];

            
               
                
                
              
              
               
            

                if ($Op == "Pluss"){
                    function pluss ($tall1, $tall2, $Op)
                    {
                        $sumP = $tall1 + $tall2;
                        echo "resultatet av kalkulasjonen Tall 1 $Op Tall 2 = $sumP";
                    }
                    pluss($tall1,$tall2,$Op);
                    
                }
                if ($Op == "Minus"){
                    function minus ($tall1, $tall2, $Op)
                    {
                        $sumM = $tall1 - $tall2;
                        
                        echo "$sumM";
                        
                    }
                    minus($tall1,$tall2,$Op);
                }

                if ($Op == "Gange"){

                    function ganger ($tall1, $tall2, $Op)
                    {
                        $sumG = $tall1 * $tall2;
                        echo"$sumG";
                        return;
                    }
                    ganger($tall1,$tall2,$Op);
                   
                }

                if ($Op == "Dele"){

                    function dele ($tall1, $tall2, $Op)
                    {
                        $sumD = $tall1 / $tall2;
                        echo "$sumD";
                    }
                    dele($tall1,$tall2,$Op);
                }
                if ($Op == "Opphøyd"){
                    function opphøyd ($tall1, $tall2, $Op)
                    {
                        $sumO = pow($tall1,$tall2);
                        echo "$sumO";
    
                        
                    }
                    opphøyd($tall1,$tall2,$Op);
                    
                };

        }
       
    
    
    ?>
</body>
</html>