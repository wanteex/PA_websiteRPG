<?php 
	//include("debut.php");
	include("includes/identifiants.php");
	include("includes/functions.php");
	session_start();
							$_SESSION['nameca'] =$_POST['nameca'];
							$_SESSION['age'] =$_POST['age'];
							$_SESSION['eyes'] =$_POST['eyes'];
							$_SESSION['hairs'] =$_POST['hairs'];
							$_SESSION['size'] =$_POST['size'];
							$_SESSION['weight'] =$_POST['weight'];
							$_SESSION['personal'] =$_POST['personal'];
							$_SESSION['money'] =0;
						    $_SESSION['SEX'] =$_POST['sex'];
						    $_SESSION['AFLI'] ="";
 



							$_SESSION['FOR'] =0;
						    $_SESSION['CON'] =0;
						    $_SESSION['TAI'] =0;
						    $_SESSION['INT'] =0;
						    $_SESSION['POU'] =0;
						    $_SESSION['DEX'] =0;
						    $_SESSION['CHA'] =0;
						    $_SESSION['ELAN']=0;

						    $_SESSION['NA'] =0;
						    $_SESSION['id_NA'] =0;
						    $_SESSION['CS1'] =1;
						    $_SESSION['CS2'] =1;
						    $_SESSION['CS3'] =1;
						    $_SESSION['id_CS1'] =1;
						    $_SESSION['id_CS2'] =1;
						    $_SESSION['id_CS3'] =1;
						    $_SESSION['CU'] =0;
						    $_SESSION['PV'] =0;
						    $_SESSION['MS'] =0;

						    $_SESSION['boCO'] =0;
						    $_SESSION['EVaT'] =0;
						    $_SESSION['PS'] =0;
						    $_SESSION['CAR'] =0;
						    $_SESSION['MEM'] =0;
						    $_SESSION['CONdesPLA'] =0;
						    $_SESSION['CONdesPOI'] =0;
						    $_SESSION['ARTI'] =0;
						    $_SESSION['LLC'] =0;
						    $_SESSION['PLC'] =0;
						    $_SESSION['LBM'] =0;
						    $_SESSION['PBM'] =0;
						    $_SESSION['LHM'] =0;
						    $_SESSION['PHM'] =0;
						    $_SESSION['LP'] =0;
						    $_SESSION['PP'] =0;
						    $_SESSION['LM'] =0;
						    $_SESSION['PM'] =0;
						    $_SESSION['LO'] =0;
						    $_SESSION['PO'] =0;

						    $_SESSION['boCOMM'] =0;
						    $_SESSION['CRE'] =0;
						    $_SESSION['ELO'] =0;
						    $_SESSION['PERSU'] =0;
						    $_SESSION['CHAN'] =0;

						    $_SESSION['boMAN'] =0;
						    $_SESSION['JON'] =0;
						    $_SESSION['CRO'] =0;
						    $_SESSION['PASPAS'] =0;
						    $_SESSION['FPI'] =0;
						    $_SESSION['FNE'] =0;

						    $_SESSION['boPERC'] =0;
						    $_SESSION['EQUILI'] =0;
						    $_SESSION['ECOU'] =0;
						    $_SESSION['SEN'] =0;
						    $_SESSION['CHER'] =0;
						    $_SESSION['VOIR'] =0;
						    $_SESSION['GOU'] =0;
						    $_SESSION['PIST'] =0;

						    $_SESSION['boAGI'] =0;
						    $_SESSION['GRI'] =0;
						    $_SESSION['EVI'] =0;
						    $_SESSION['SAU'] =0;
						    $_SESSION['EQUITA'] =0;
						    $_SESSION['NAG'] =0;
						    $_SESSION['CULBU'] =0;

						    $_SESSION['boDIS'] =0;
						    $_SESSION['EMB'] =0;
						    $_SESSION['DISS'] =0;
						    $_SESSION['SCA'] =0;
						    $_SESSION['MOUSI'] =0;
						    $_SESSION['COUBOU'] =0;

						    $_SESSION['boAT'] =0;
						    $_SESSION['boPA'] =0;
						    $_SESSION['boDAM'] ="";
						    $_SESSION['boDAT'] ="";

						    $_SESSION['A1n'] =0;
						    $_SESSION['A1a'] =0;
						    $_SESSION['A1p'] =0;
						    $_SESSION['A1d'] ="";

						    $_SESSION['A2n'] =0;
						    $_SESSION['A2a'] =0;
						    $_SESSION['A2p'] =0;
						    $_SESSION['A2d'] ="";

						    $_SESSION['A3n'] =0;
						    $_SESSION['A3a'] =0;
						    $_SESSION['A3p'] =0;
						    $_SESSION['A3d'] ="";


						    


	if ($_POST['l1'] != $_POST['l2'] && $_POST['l1'] != $_POST['l3'] && $_POST['l1'] != $_POST['l4'] && $_POST['l1'] != $_POST['l5'] && $_POST['l1'] != $_POST['l6'] && $_POST['l1'] != $_POST['l7'] && $_POST['l1'] != $_POST['l8']) {
		if ($_POST['l2'] != $_POST['l3'] && $_POST['l2'] != $_POST['l4'] && $_POST['l2'] != $_POST['l5'] && $_POST['l2'] != $_POST['l6'] && $_POST['l2'] != $_POST['l7'] && $_POST['l2'] != $_POST['l8']) {
			if ($_POST['l3'] != $_POST['l4'] && $_POST['l3'] != $_POST['l5'] && $_POST['l3'] != $_POST['l6'] && $_POST['l3'] != $_POST['l7'] && $_POST['l3'] != $_POST['l8']) {
				if ($_POST['l4'] != $_POST['l5'] && $_POST['l4'] != $_POST['l6'] && $_POST['l4'] != $_POST['l7'] && $_POST['l4'] != $_POST['l8']) {
					if ($_POST['l5'] != $_POST['l6'] && $_POST['l5'] != $_POST['l7'] && $_POST['l5'] != $_POST['l8']) {
						if ($_POST['l6'] != $_POST['l7'] && $_POST['l6'] != $_POST['l8']) {
							if ($_POST['l7'] != $_POST['l8']) {
								define($_POST['l1'], $_SESSION['l1']);
								define($_POST['l2'], $_SESSION['l2']);
								define($_POST['l3'], $_SESSION['l3']);
								define($_POST['l4'], $_SESSION['l4']);
								define($_POST['l5'], $_SESSION['l5']);
								define($_POST['l6'], $_SESSION['l6']);
								define($_POST['l7'], $_SESSION['l7']);
								define($_POST['l8'], $_SESSION['l8']);

								/* reseignement characteristique de base */
								$_SESSION['FOR'] = FORC;
						    	$_SESSION['CON'] = CON;
						    	$_SESSION['TAI'] = TAI;
						   		$_SESSION['INT'] = INTE;
						    	$_SESSION['POU'] = POU;
						    	$_SESSION['DEX'] = DEX;
						    	$_SESSION['CHA'] = CHA;

						    	/*calcul Santé mmental de base ( sans modificateur class et nationalité) */
								$_SESSION['MS'] = $_SESSION['MS'] + 5 * $_SESSION['POU'];

								/* calcul des bonus en fonction de la nationalité*/
						    	$_SESSION['NA'] = $_POST['na'];
						    	switch ($_POST['na']) {
						    		
						    		case 'Melniboné':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,10);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,6);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 3;
						    			$_SESSION['MS'] = $_SESSION['MS'] + 20;
						    			$_SESSION['CS1'] = "Guerrier";
						    			$_SESSION['CS2'] = "Noble";
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS3'] = "Sorcier";
						    			}
						    			break;
						    		case 'Pan_Tang':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,8);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,8);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 1;
						    			$_SESSION['MS'] = $_SESSION['MS'] + 10;
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS1'] = "Sorcier";
						    				$_SESSION['CS2'] = "Prêtre";
						    			}else{
						    				$_SESSION['CS1'] = "Guerrier";
						    			}
						    			$t = rand(1,100);
						    			if ($t <+ 20) {
						    				$_SESSION['CS3'] = "Noble";
						    			}
						    			break;
						    		case 'Myrrhyn':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,6);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,6);
						    			$_SESSION['CHA'] = $_SESSION['CHA'] + rand(1,6);
						    			if ($_SESSION['SEX'] == "F") {
						    				$_SESSION['MS'] = $_SESSION['MS'] + 5;
						    			}
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS3'] = "Sorcier";
						    			}
						    			if ($_SESSION['TAI']>=9) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 2;
						    			}
						    			break;
						    		case 'Dharijor':
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,4);
						    			break;
						    		case 'Jharkor':
						    			$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,4);
						    			$_SESSION['DEX'] = $_SESSION['DEX'] + rand(1,4);	
						    			break;
						    		case 'Shazaar':
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			break;
						    		case 'Tarkesh':
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,4);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 1;
						    			}
						    			break;
						    		case 'Vilmir':
						    			
						    			break;
						    		case 'Ilmiora':
						    			$_SESSION['CHA'] = $_SESSION['CHA'] + rand(1,4);
						    			break;
						    		case 'Nadsokor':
						    			
						    			$_SESSION['CON'] = $_SESSION['CON'] - rand(1,6);
						    			$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,6);
						    			$_SESSION['CS1'] = "Mendiant";
						    			break;
						    		case 'Désert_de_Larmes':
						    			$_SESSION['DEX'] = $_SESSION['DEX'] + rand(1,4);
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,6);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,4);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 1;
						    			}
						    			$_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 80 + rand(1,6);
						    			break;
						    		case 'Eshmir':
						    			$_SESSION['INT'] = $_SESSION['INT'] + rand(1,4);
						    			$_SESSION['POU'] = $_SESSION['POU'] + rand(1,6);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 2;
						    			}
						    			$_SESSION['MS'] = $_SESSION['MS'] + 5;
						    			if (($_SESSION['INT']+$_SESSION['POU']) >= 32) {
						    				$_SESSION['CS3'] = "Sorcier";
						    				$_SESSION['CS1'] = "Prêtre";
						    				if ($_SESSION['FOR'] >= 13) {
						    					$_SESSION['CS2'] = "Guerrier";
						    				}
						    			}
						    			break;
						    		case 'Ile_des_Cités_Pourpres':
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,4);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			break;
						    		case 'Argimiliar':

						    			break;
						    		case 'Pikarayd':
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,4) + rand(1,4);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 1;
						    			break;
						    		case 'Lormyr':
						    			$_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
						    			$_SESSION['TAI'] = $_SESSION['TAI'] + 2;
						    			break;
						    		case 'Filkhar':
						    			$_SESSION['DEX'] = $_SESSION['DEX'] + rand(1,4);
						    			break;
						    		case 'Oin':
						    			if ($_SESSION['INT']>=10) {
						    				$_SESSION['INT'] = $_SESSION['INT'] - rand(1,6);
						    			}
						    			if ($_SESSION['DEX']>=10) {
						    				$_SESSION['DEX'] = $_SESSION['DEX'] - rand(1,6);
						    			}
						    			if ($_SESSION['POU']>=10) {
						    				$_SESSION['POU'] = $_SESSION['POU'] - rand(1,6);
						    			}
						    			$_SESSION['MS'] = $_SESSION['MS'] - 10;
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			break;
						    		case 'Yu':
						    			if ($_SESSION['INT']>=10) {
						    				$_SESSION['INT'] = $_SESSION['INT'] - rand(1,6);
						    			}
						    			if ($_SESSION['CHA']>=10) {
						    				$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,6);
						    			}
						    			if ($_SESSION['POU']>=10) {
						    				$_SESSION['POU'] = $_SESSION['POU'] - rand(1,6);
						    			}
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,6);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,6);
						    			$_SESSION['MS'] = $_SESSION['MS'] - 10;
						    			break;
						    		case 'Org':
						    			if ($_SESSION['POU']>=10) {
						    				$_SESSION['POU'] = $_SESSION['POU'] - rand(1,4) - rand(1,4);
						    			}
						    			if ($_SESSION['CHA']>=10) {
						    				$_SESSION['CHA'] = $_SESSION['CHA'] - rand(1,4) - rand(1,4);
						    			}
						    			if ($_SESSION['INT']>=10) {
						    				$_SESSION['INT'] = $_SESSION['INT'] - rand(1,6);
						    			}
						    			if ($_SESSION['DEX']>=10) {
						    				$_SESSION['DEX'] = $_SESSION['DEX'] - rand(1,6);
						    			}
						    			$_SESSION['FOR'] = $_SESSION['FOR'] + rand(1,4);
						    			$_SESSION['CON'] = $_SESSION['CON'] + rand(1,8);
						    			if ($_SESSION['TAI']>=10) {
						    				$_SESSION['TAI'] = $_SESSION['TAI'] - 2;
						    			}
						    			$_SESSION['MS'] = $_SESSION['MS'] - 20;
						    			$t = rand(1,20);
						    			if ($t == 1) {
						    				$_SESSION['CS1'] = "Noble";
						    			}else {
						    				$_SESSION['CS1'] = "Chasseur";
						    			}
						    			break;
						    	}





						    	
						    	

						    	switch ($_SESSION['NA']) {
						    		
						    		case 'Melniboné':
						    			$_SESSION['id_NA'] = 1;
						    			?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    					
													<h2 style="text-align:center">Choix de la classe (tiré sur 1D100 dans le tableau des nationalité)</h2>
													<p>Votre nationalité vous permet de jouer: <?php echo $_SESSION['CS1'].",".$_SESSION['CS2'].",".$_SESSION['CS3'] ?></p><br>
													<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			
						    			break;
						    		case 'Pan_Tang':
						    			$_SESSION['id_NA'] = 2;
						    			?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
													<h2 style="text-align:center">Choix de la classe (tiré sur 1D100 dans le tableau des nationalité)</h2>
													<p>Votre nationalité vous permet de jouer: <?php echo $_SESSION['CS1'].",".$_SESSION['CS2'].",".$_SESSION['CS3'] ?></p><br>
													<?php if ($_SESSION['CS3']=="Noble") {
						    							echo "<p>De plus vous pourrez jouer un noble ! :) </p><br><br>";
						    							}
						    						?>
													<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Myrrhyn':
						    			
						    			$_SESSION['id_NA'] = 3;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));

						    			if ($SC1 == 'Marin' || $SC1 == 'Voleur' || $SC1 == 'Mendiant') {
						    				$SC1 = 'Guerrier';
						    			}
						    			if ($SC2 == 'Marin' || $SC2 == 'Voleur' || $SC2 == 'Mendiant') {
						    				$SC2 = 'Guerrier';
						    			}?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Dharijor':
						    		$_SESSION['id_NA'] = 4;
						    		$SC1 = SetClass(rand(1,100));
						    		$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			
						    			break;
						    		case 'Jharkor':
						    			$_SESSION['id_NA'] = 5;	
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Shazaar':
						    			$_SESSION['id_NA'] = 6;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php																						
						    			break;
						    		case 'Tarkesh':
						    			$_SESSION['id_NA'] = 7;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Vilmir':
						    			$_SESSION['id_NA'] = 8;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Ilmiora':
						    			$_SESSION['id_NA'] = 9;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Nadsokor':
						    			$_SESSION['id_NA'] = 10;
						    			$_SESSION['CS1'] = "Mendiant";
						    			?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Désert_de_Larmes':
						    			$_SESSION['id_NA'] = 11;
						    			$SC1 = 'Chasseur';
						    			$SC2 = 'Guerrier';
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php

						    			break;
						    		case 'Eshmir':
						    			$_SESSION['id_NA'] = 12;
						    			if ($_SESSION['CS3'] == 0) {
						    				$SC1 = SetClass(rand(1,100));
						    				$SC2 = SetClass(rand(1,100));
						    			}
						    			
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    		<?php if ($_SESSION['CS3'] == 0) {
						    			echo '<p>Votre nationalité vous permet de choisir l\'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>';
						    		}else{
						    			echo '<p>Votre nationalité vous permet de jouer:'.$_SESSION['CS1'].",".$_SESSION['CS2'].",".$_SESSION['CS3'].'</p><br>';
						    		} ?>
						    			

										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Ile_des_Cités_Pourpres':
						    			$_SESSION['id_NA'] = 13;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    			if ($SC1 == 'Chasseur') {
						    				$SC1 = 'Marin';
						    			}
						    			if ($SC2 == 'Chasseur') {
						    				$SC2 = 'Marin';
						    			}
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Argimiliar':
						    			$_SESSION['id_NA'] = 14;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Pikarayd':
						    			$_SESSION['id_NA'] = 15;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Lormyr':
						    			$_SESSION['id_NA'] = 16;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Filkhar':
						    			$_SESSION['id_NA'] = 17;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Oin':
						    			$_SESSION['id_NA'] = 18;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    			if ($SC1 == 'Prêtre' || $SC1 == 'Marin' ) {
						    				$SC1 = 'Fermier';
						    			}
						    			if ($SC2 == 'Prêtre' || $SC2 == 'Marin' ) {
						    				$SC2 = 'Fermier';
						    			}
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Yu':
						    			$_SESSION['id_NA'] = 19;
						    			$SC1 = SetClass(rand(1,100));
						    			$SC2 = SetClass(rand(1,100));
						    			if ($SC1 == 'Prêtre' || $SC1 == 'Marin' || $SC1 == 'Marchand' || $SC1 == 'Négociant' ) {
						    				$SC1 = 'Chasseur';
						    			}
						    			if ($SC2 == 'Prêtre' || $SC2 == 'Marin' || $SC2 == 'Marchand' || $SC2 == 'Négociant' ) {
						    				$SC2 = 'Chasseur';
						    			}
						    		?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    			<p>Votre nationalité vous permet de choisir l'une des classe suivante:</p><select name="class">
																																	<option value= <?php echo $SC1;?> > <?php echo $SC1;?> </option>
																																	<option value= <?php echo $SC2;?> > <?php echo $SC2;?> </option>
																																</select><br><br>
										<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    		case 'Org':
						    			$_SESSION['id_NA'] = 20;
						    			?>
						    			<article class="Farticle">
						    				<form action="character_creation_post_post.php" method="post">
						    					
													<h2 style="text-align:center">Choix de la classe (tiré sur 1D100 dans le tableau des nationalité)</h2>
													<p>Votre nationalité vous permet de jouer: <?php echo $_SESSION['CS1']?></p><br>
													<label for="cult">Vous pouvez maintenant choisir votre culte</label> :
        											    <select name="cult">
        											        <optgroup label="Chaos">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Chaos"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Loyal">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Loyal"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Elementary">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god LIKE "Elementaire%"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>
        											        </optgroup>
        											        <optgroup label="Lord of beasts">
        											            <?php
        											                $reponse = $bdd->query('SELECT * FROM cult WHERE type_god = "Seigneur des bêtes"');
        											                while ($donnees = $reponse->fetch())
        											                {
        											            ?>
        											                    <option value= <?php echo $donnees['id_cu'];?> > <?php echo $donnees['name_cult']; ?></option>
        											            <?php
        											                }
        											            ?>               
        											        </optgroup>
        											    </select>
													<input type="submit" value="check les donées" name="check_les_données">
											</form>
										</article>
										<?php
						    			break;
						    	}
						    	


							}
							else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
						 }
						 else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
					}
					else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
				}
				else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
			}
			else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
		}
		else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
	}else{
	?><article class="Farticle">
								<h2 style="text-align:center">Choix des premières caracteristiques</h2>
								<p>Vous devez impérativement choisir des caractéristiques différentes pour chacun des tirages.</p><br>
							</article><?php
	}
?>
<footer id=footer>
						<section>
							<section>
								<h3>Adresse</h3>
								<p>Rue 8 mai 1945<br />
								Saint-Barthelemy D'Anjou, 49124</p>
							</section>
							<section>
								<h3>Telephone</h3>
								<p><a href="#">00-00-00-00-00</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">test@hotmail.fr</a></p>
							</section>
							<section>
							<h3>&copy; Untitled</h3><h3>Design: <a href="#">ESAIP Administration</a></h3>
							</section>
						</section>
					</footer>
</body>
</html> 