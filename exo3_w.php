<?php
$formvalide=false;
$nombre="";
$msg="";
include("fonction_exo3.php");
if (isset($_POST['envoie'])) 
{   if (!empty($_POST['nombre'])) {
    if (!is_number($_POST['nombre'])) 
    {
       $msg="Veuillez saisir un nombre entier positif";
    }else
    {
        $nombre=$_POST['nombre'];
        
        for ($i=1; $i <= $nombre ; $i++) { 
            if (!empty($_POST['nombre'.$i])) {
                var_dump($_POST['nombre'.$i]);
            }
        }
        $formvalide=true;
    }
    
}
   else
   {
    $msg="Veuillez saisir un nombre";
   }
    //var_dump($_POST['nombre']);
    
}   
    if($msg!="")
    {
        echo $msg;
    }     
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>exo3_w</title>
</head>

<body>

    </p>
    <form action="exo3_w.php" method="post" action="">
        <label for="nombre"> nombre:</label>
        <input type="text" name="nombre" value="<?= $nombre ?>"/><br>

        <!--generation d'input-->
        <?php
            if($formvalide)
            {
                for ($i=0; $i <$nombre ; $i++) 
                    { 
        ?>
        <input type="text" name="mot<?php echo $i;?>"><br>
        <?php    
                    }
            }
        ?>
        <input type="submit" name="envoie" value="valider">
        
    </form>
    <?php    
		function testmot($mot){
			if (preg_match("#M|m#",$mot) ) {
				return true;
			}
			else{
						return false;
					}
		}    
        
        if(isset($_POST['envoie']) && isset($_POST['mot1'])){
            for($j=1;$j<$i;$j++){
                $mot = $_POST['mot'.$j];
                if(is_valide($mot) && (count_char_in_string('m',$mot) > 0  || count_char_in_string('M',$mot) > 0) ){
                    echo " ".$mot." ";
                }
            }
            
        }
           /* else{
				$nombre=$_POST['nombre'];
				$n=explode(" ", $nombre);
				$mot=array();
						# code...
						for ($i=0; $i <count($n) ; $i++) { 
							if (testmot($n[$i])) {
								# code...
								echo $n[$i].'<br>';
							}
						}
					}*/
				
          
		
	?>

</body>

</html>