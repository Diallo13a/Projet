<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>exo4_b</title>
</head>

<body>


    <p>Ecrire un programme qui permet de remplir un tableau N de phrases. Chaque phrase pourra
        contenir 200 caractères. Le programme enlève tous les espaces inutiles puis réaffiche
        les phrases corrigées dans un autre textArea. CRÉER VOS PROPRES FONCTIONS
        <br>NB: <br>
        ● Une phrase commence par lettre majuscule et se termine par un point.<br>
        ● Les phrases sont saisies dans un textArea
    </p>
    <form action="exo4_b.php" method="post">

        <label for="variable">Phrase:</label>
        <!--	<input type="text" name="variable" /> -->
        <textarea name="variable" id="variable" rows="10" cols="50"></textarea>

        <input type="submit" name="bouton" value="afficher">

    </form>
    <?php    
		function testmot($mot){
            $pattern="/[.!?]+[^0-9]/";
            $parts=preg_match($pattern,$mot); // preg_match: permet de tester l'exixtence d'un pater dans une chaine mais ne le supprime pas
            foreach ($parts as $part) {
                echo $part . "<br>";
            }	
        }  
        
        function F2($text){
            $pattern = "/[\.]+/";
            //$text = "My favourite colors are red, green and blue";
            $parts = preg_split($pattern, $text);
            
            // Loop through parts array and display substrings
            foreach($parts as $part){
                echo $part . "<br>";
            }
            }
            
            function F3($text){
                $v=$_POST['variable']; 
                $pattern = "/\s\s/";  // A chaque fois qu'on a au mois deux espaces proches on le remplace par un seul espace
                                        // exemple: " Sidi     va à l'  ecole   .  Maman va au marché      .     .  ?   !       ."
                $replacement = "\s";
                //$text = " Il travaille         !  ?     Elle travaille   .   .    .  ";
                //$text = "  Sidi     va à l'  ecole.      .     .  ?   !       .";
                //$text = " Il travaille         !  ?     Elle travaille  , Moussa l '  appelle par son n om   ;   .   .    .  ";
                echo  str_replace ( "\s\s", "\s", $text);// preg_replace() est un regex permettant de rechercher et de remplacer qlqs choses
                                                        //dans une chaine suivant le pattern:
                                                        //1. Le pattern qui definit ce qu'on cherche
                                                        //2. le paramettre avec lequel on remplace
                                                        //3. le texte dans lequel on doit remplacer
                                /*'/\s{2,}/'   
                                \s : désigne les caractères de types espaces (l'espace lui-même, la tabulation, ...).
                                {2,} : signifie au moins deux occurences successives
                                Donc \s{2,} : au moins deux caractères de types espaces successifs */
                }
            function F3avance($text) {
                $pattern = "#(?<=[.?!])\s*(?=[A-Z])#i";
                $replacement = "\s";
                $text = " Il travaille         !  ?     Elle achete 2.  5 kg de poivre  , Moussa l '  appelle par son nom   ;   .   .    .  ";
                echo preg_replace("#(?<=[.?!])\s*(?=[A-Z])#i"," ", $text);
            }



    if (isset($_POST['bouton'])) {
		
    if (empty($_POST['variable'])) {
    echo '<p>Votre champ est vide</p>';
    }
    /* elseif($n<20){ echo 'Le mot saisi doit avoir 20 caracteres' ; } */ 
              else{ 
				  $v=$_POST['variable']; 
				  $n=explode(" ", $v);
				 // $r=testmot($mot);
				 // var_dump($r);
				 
                  var_dump(F3avance($v));
				//$mot=array();

			/*	echo 'Les phrases commençant par une lettre majuscule et se terminant par (.ou?ou!) <br>';
				for ($i=0; $i <count($n) ; $i++) { 
					if (testmot($n[$i])) {
						# code...
						echo $n[i].'<br>';
                        
					}
				}*/
				
                
            }
            
        }
		
	?>
	<script>
	function variable()
        {
            var variable = document.getElementById("variable").value;
            alert(variable);
        }    
	</script>

</body>
</html>