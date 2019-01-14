<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Club JDR Esaip</title>
    <!-- <link rel="icon" type="image/x-ico" href="favicon.ico" /> -->
</head>

<body>
    <article class="Farticle">
        <h2>Voir ses personnages</h2>
        <?php
                            include("includes/identifiants.php");
                            $reponse1 = $bdd->query('SELECT * FROM personnage');
                        ?>
        <form method="post" action="see_character.php">

            <label for="perso">quel personnage voulez vous voir ?</label>
            <select name="perso" id="perso">
                <?php
                                    while ($donnees1 = $reponse1->fetch())
                                    {
                ?>
                                        <option value=<?php echo $donnees1['id'];?> >
                                            <?php echo $donnees1['nom']; ?>
                                        </option>
                <?php
                                    }
                        ?>
            </select>
            <p><input type="submit" value="Voir" /></p>
            <?php
            if (isset($_POST['perso'])) {
        
                                $reponseperso= $bdd->query('SELECT * FROM personnage Where id ='.$_POST['perso']);
                                $donnees = $reponseperso->fetch();
                                $reponsenatio = $bdd->query('SELECT * FROM nationality Where id_na ='.$donnees['id_nationalite']);
                                $donneesnatio = $reponsenatio->fetch();
                        
                        ?>

            <p1>Nom:
                <?php echo $donnees['nom'] ;?>
            </p1></br>
            <br>
            <fieldset1>
                <legend>SEXE</legend>
                <p>
                    <?php echo $donnees['sexe'] ;?>
                </p>
            </fieldset1>

            <fieldset1>
                <legend>AGE</legend>
                <p>
                    <?php echo $donnees['age'] ;?>
                </p>
            </fieldset1>
            </br>
            <fieldset1>
                <legend>YEUX</legend>
                <p>
                    <?php echo $donnees['yeux'] ;?>
                </p>
            </fieldset1>

            <fieldset1>
                <legend>CHEVEUX</legend>
                <p>
                    <?php echo $donnees['cheveux'] ;?>
                </p>
            </fieldset1>



            <fieldset2>
                <legend>NATIONALITY</legend>
                <p>
                    <?php echo $donneesnatio['name'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>CLASSE SOCIAL</legend>
                <p>
                    <?php 
                                            if ($donnees['id_classe_social1'] != 1) {
                                                $reponseSC = $bdd->query('SELECT * FROM social_class Where id_SC ='.$donnees['id_classe_social1']);
                                                $donneesSC = $reponseSC->fetch();
                                                echo $donneesSC['name'].",";
                                            }
                                            if ($donnees['id_classe_social2'] != 1) {
                                                $reponseSC = $bdd->query('SELECT * FROM social_class Where id_SC ='.$donnees['id_classe_social2']);
                                                $donneesSC = $reponseSC->fetch();
                                                echo $donneesSC['name'].",";
                                            }
                                            if ($donnees['id_classe_social3'] != 1) {
                                                $reponseSC = $bdd->query('SELECT * FROM social_class Where id_SC ='.$donnees['id_classe_social3']);
                                                $donneesSC = $reponseSC->fetch();
                                                echo $donneesSC['name'];
                                            }
                                        ?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>CULTE</legend>
                <p>
                    <?php
                        $reponsecult = $bdd->query('SELECT * FROM cult Where id_cu ='.$donnees['id_culte']);
                        $donneescult = $reponsecult->fetch();
                        echo $donneescult['name_cult'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>CARACTERISTIQUE</legend>
                <p>
                    <?php echo 'FORce: '.$donnees['forc'] ;?>
                </p>
                <p>
                    <?php echo 'CONstitution: '.$donnees['constitution'] ;?>
                </p>
                <p>
                    <?php echo 'TAIlle: '.$donnees['taille'] ;?>
                </p>
                <p>
                    <?php echo 'INTelligence: '.$donnees['intelligence'] ;?>
                </p>
                <p>
                    <?php echo 'POUvoir: '.$donnees['pouvoir'] ;?>
                </p>
                <p>
                    <?php echo 'DEXterité: '.$donnees['dexterite'] ;?>
                </p>
                <p>
                    <?php echo 'CHArisme: '.$donnees['charisme'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>SANTE</legend>
                <p>
                    <?php echo 'Point de vie actuel: '.$donnees['pv'] ;?>
                </p>
                <p>
                    <?php echo 'Point de vie max: '.$donnees['pv_max'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>SANTE MENTAL</legend>
                <p>
                    <?php echo 'Sante mental actuel: '.$donnees['sante_mental'] ;?>
                </p>
                <p>
                    <?php echo 'Seuil de folie temporaire: '.$donnees['SFT'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>CONNAISSANCE</legend>
                <p>
                    <?php echo 'Connaissance bonus:  '.$donnees['connaissance_bonus'] ;?>
                </p>
                <p>
                    <?php echo 'Evaluer un trésors: '.$donnees['evaluer_tresor'] ;?>
                </p>
                <p>
                    <?php echo 'Premier soin: '.$donnees['premier_soin'] ;?>
                </p>
                <p>
                    <?php echo 'Cartographie: '.$donnees['cartographie'] ;?>
                </p>
                <p>
                    <?php echo 'Mémoriser: '.$donnees['memoriser'] ;?>
                </p>
                <p>
                    <?php echo 'Connaissance des plantes: '.$donnees['connaissance_plantes'] ;?>
                </p>
                <p>
                    <?php echo 'Connaissance des poisons: '.$donnees['connaissance_poisons'] ;?>
                </p>
                </br>
                <p>
                    <?php echo 'Language Commun: '.$donnees['LLC'].'/'.$donnees['PLC'] ;?>
                </p>
                <p>
                    <?php echo 'Bas Melnibonéen: '.$donnees['LBM'].'/'.$donnees['PBM'] ;?>
                </p>
                <p>
                    <?php echo 'Haut Melnibonéen: '.$donnees['LHM'].'/'.$donnees['PHM'] ;?>
                </p>
                <p>
                    <?php echo 'Pande: '.$donnees['LP'].'/'.$donnees['PP'] ;?>
                </p>
                <p>
                    <?php echo 'Mabden: '.$donnees['LM'].'/'.$donnees['PM'] ;?>
                </p>
                <p>
                    <?php echo 'Orgien: '.$donnees['LO'].'/'.$donnees['PO'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>Compétence d'armes (attaque // dégats // parade)</legend>
                <?php
                    $weaponskill = explode(";", $donnees['Combat']);
                    $i =0;
                    $j =1;
                    $bob = "";
                    foreach ($weaponskill as $value ) {
                        if ($i == 0 && $value!="") {
                            $reponseatt = $bdd->query('SELECT * FROM weapon Where id ='.$value);
                            $donneesatt = $reponseatt->fetch();
                            $bob .="Compétence d'arme n°".$j." ".$donneesatt['name']." :";
                            $j +=1;
                        }else{
                            $bob .= $value."  //  ";
                        }
                        
                        $i= $i +1;
                        if ($i>=4) {
                            echo "<p>".$bob."</p>";
                            $i =0;
                            $bob="";
                        }
                        
                        
                    }
               ?>
            </fieldset2>

            <fieldset2>
                <legend>Communication</legend>
                <p>
                    <?php echo 'Communication bonus:  '.$donnees['communication_bonus'] ;?>
                </p>
                <p>
                    <?php echo 'Crédit: '.$donnees['credit'] ;?>
                </p>
                <p>
                    <?php echo 'Eloquence: '.$donnees['eloquence'] ;?>
                </p>
                <p>
                    <?php echo 'Persuader: '.$donnees['persuader'] ;?>
                </p>
                <p>
                    <?php echo 'Chanter: '.$donnees['chanter'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>Manipulation</legend>
                <p>
                    <?php echo 'Manipulation bonus:  '.$donnees['manipulation_bonus'] ;?>
                </p>
                <p>
                    <?php echo 'Jongler: '.$donnees['jongler'] ;?>
                </p>
                <p>
                    <?php echo 'Crocheter: '.$donnees['crocheter'] ;?>
                </p>
                <p>
                    <?php echo 'Passe-Passe: '.$donnees['passe_passe'] ;?>
                </p>
                <p>
                    <?php echo 'Faire un piège: '.$donnees['faire_piege'] ;?>
                </p>
                <p>
                    <?php echo 'Faire un noeud: '.$donnees['faire_noeud'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>Perception</legend>
                <p>
                    <?php echo 'Perception bonus:  '.$donnees['perception_bonus'] ;?>
                </p>
                <p>
                    <?php echo 'Equilibre: '.$donnees['equilibre'] ;?>
                </p>
                <p>
                    <?php echo 'Ecouler: '.$donnees['ecouter'] ;?>
                </p>
                <p>
                    <?php echo 'Sentir: '.$donnees['sentir'] ;?>
                </p>
                <p>
                    <?php echo 'Chercher: '.$donnees['chercher'] ;?>
                </p>
                <p>
                    <?php echo 'Voir: '.$donnees['voir'] ;?>
                </p>
                <p>
                    <?php echo 'Goûter: '.$donnees['gouter'] ;?>
                </p>
                <p>
                    <?php echo 'Pister: '.$donnees['pister'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>Agility</legend>
                <p>
                    <?php echo 'Agilité bonus:  '.$donnees['agilite_bonus'] ;?>
                </p>
                <p>
                    <?php echo 'Grimper: '.$donnees['grimper'] ;?>
                </p>
                <p>
                    <?php echo 'Eviter: '.$donnees['eviter'] ;?>
                </p>
                <p>
                    <?php echo 'Sauter: '.$donnees['sauter'] ;?>
                </p>
                <p>
                    <?php echo 'Equitation: '.$donnees['equitation'] ;?>
                </p>
                <p>
                    <?php echo 'Nager: '.$donnees['nager'] ;?>
                </p>
                <p>
                    <?php echo 'Culbuter: '.$donnees['culbuter'] ;?>
                </p>
            </fieldset2>

            <fieldset2>
                <legend>Discretion</legend>
                <p>
                    <?php echo 'Discretion bonus:  '.$donnees['discretion_bonus'] ;?>
                </p>
                <p>
                    <?php echo 'Embuscade: '.$donnees['embuscade'] ;?>
                </p>
                <p>
                    <?php echo 'Dissimuler: '.$donnees['dissimuler'] ;?>
                </p>
                <p>
                    <?php echo 'Se cacher: '.$donnees['se_cacher'] ;?>
                </p>
                <p>
                    <?php echo 'Mouvement silencieux: '.$donnees['mouvement_silencieux'] ;?>
                </p>
                <p>
                    <?php echo 'Couper un bourse: '.$donnees['couper_bourse'] ;?>
                </p>
            </fieldset2>

            </div>
    </article>
            <?php } ?>

</body>

</html>
