<?php
    include("includes/identifiants.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Club JDR Esaip</title>
        <!-- <link rel="icon" type="image/x-ico" href="favicon.ico" /> -->
    </head>
 
    
    <form action="character_registration_post.php" method="post">

        <p>
                <p1>Personage</p1> </br>
        <label for="nom">nom</label> : <input type="text" name="nom" id="nom" /><br />
        <label for="sexe">sexe</label> :
            <select name="sexe">
                <option value="M">Male</option>
                <option value="F">Femelle</option>
            </select>
    </br>
        <label for="age">age</label> :  <input type="number" name="age" id="age" /><br />
        <label for="yeux_couleur">yeux_couleur</label> :  <input type="text" name="yeux_couleur" id="yeux_couleur" /><br />
        <label for="cheveux">cheveux</label> :  <input type="text" name="cheveux" id="cheveux" /><br />
        <label for="id_nationalite">nationalite</label> :
        <select name="id_nationalite">
                <?php
                $reponse = $bdd->query('SELECT * FROM nationality');
                while ($donnees = $reponse->fetch())
                {
            ?>
                    <option value= <?php echo $donnees['id_na'];?> > <?php echo $donnees['name']; ?></option>
            <?php
                }
            ?>
        </select><br/>
		<label for="SC1">classe social n°1</label> :  
        <select name="SC1">
                <?php
                $reponse = $bdd->query('SELECT * FROM social_class');
                while ($donnees = $reponse->fetch())
                {
            ?>
                    <option value= <?php echo $donnees['id_SC'];?> > <?php echo $donnees['name']; ?></option>
            <?php
                }
            ?>
        </select><br/>
        <label for="SC2">classe social n°2</label> :  
        <select name="SC2">
                <?php
                $reponse = $bdd->query('SELECT * FROM social_class');
                while ($donnees = $reponse->fetch())
                {
            ?>
                    <option value= <?php echo $donnees['id_SC'];?> > <?php echo $donnees['name']; ?></option>
            <?php
                }
            ?>
        </select><br/>
        <label for="SC3">classe social n°3</label> :  
        <select name="SC3">
                <?php
                $reponse = $bdd->query('SELECT * FROM social_class');
                while ($donnees = $reponse->fetch())
                {
            ?>
                    <option value= <?php echo $donnees['id_SC'];?> > <?php echo $donnees['name']; ?></option>
            <?php
                }
            ?>
        </select><br/>
        <label for="cult">cult</label> :
            <select name="cult">
                <option value=0>Aucun</option>
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
    </br>    
        <label for="Point_Elan">Point_Elan</label> :  <input type="number" name="Point_Elan" id="Point_Elan" /><br />
        <label for="Argent">Argent(GB)</label> :  <input type="number" name="Argent" id="Argent" /><br />
    </br>
                <p1>Combat</p1></br>
                <label for="idarme1">Arme n°1:</label>
                <select name="idarme1">
        <?php
                $reponse = $bdd->query('SELECT id,name FROM weapon');
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']; ?></option>
        <?php
                }
        ?>
                </select><input type="number" name="attarme1" id="attarme1" placeholder="attaque" /><input type="text" name="damarme1" id="damarme1" placeholder="dammage" /><input type="number" name="pararme1" id="pararme1" placeholder="parade" /></br>


                <label for="idarme2">Arme n°2:</label> 
                <select name="idarme2">
        <?php
                $reponse = $bdd->query('SELECT id,name FROM weapon');
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']; ?></option>
        <?php
                }
        ?>
                </select></select><input type="number" name="attarme2" id="attarme2" placeholder="attaque" /><input type="text" name="damarme2" id="damarme2" placeholder="dammage" /><input type="number" name="pararme2" id="pararme2" placeholder="parade" /></br>


                <label for="idarme3">Arme n°3:</label> 
                <select name="idarme3">
        <?php
                $reponse = $bdd->query('SELECT id,name FROM weapon');
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']; ?></option>
        <?php
                }
        ?>
                </select></select><input type="number" name="attarme3" id="attarme3" placeholder="attaque" /><input type="text" name="damarme3" id="damarme3" placeholder="dammage" /><input type="number" name="pararme3" id="pararme3" placeholder="parade" /></br>


                <label for="idarme4">Arme n°4:</label> 
                <select name="idarme4">
        <?php
                $reponse = $bdd->query('SELECT id,name FROM weapon');
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']; ?></option>
        <?php
                }
        ?>
                </select></select><input type="number" name="attarme4" id="attarme4" placeholder="attaque" /><input type="text" name="damarme4" id="damarme4" placeholder="dammage" /><input type="number" name="pararme4" id="pararme4" placeholder="parade" /></br>


                <label for="idarme5">Arme n°5:</label> 
                <select name="idarme5">
        <?php
                $reponse = $bdd->query('SELECT id,name FROM weapon');
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']; ?></option>
        <?php
                }
        ?>
                </select></select><input type="number" name="attarme5" id="attarme5" placeholder="attaque" /><input type="text" name="damarme5" id="damarme5" placeholder="dammage" /><input type="number" name="pararme5" id="pararme5" placeholder="parade" /></br>


                <label for="idarme6">Arme n°6:</label> 
                <select name="idarme6">
        <?php
                $reponse = $bdd->query('SELECT id,name FROM weapon');
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']; ?></option>
        <?php
                }
        ?>
                </select></select><input type="number" name="attarme6" id="attarme6" placeholder="attaque" /><input type="text" name="damarme6" id="damarme6" placeholder="dammage" /><input type="number" name="pararme6" id="pararme6" placeholder="parade" /></br>
          
        </br>          
                <p1>Characteristique</p1></br>
        <label for="forc">forc</label> :  <input type="number" name="forc" id="forc" /><br />
        <label for="constitution">constitution</label> :  <input type="number" name="constitution" id="constitution" /><br />
        <label for="taille">taille</label> :  <input type="number" name="taille" id="taille" /><br />
        <label for="intelligence">intelligence</label> :  <input type="number" name="intelligence" id="intelligence" /><br />
        <label for="pouvoir">pouvoir</label> :  <input type="number" name="pouvoir" id="pouvoir" /><br />
        <label for="dexterite">dexterite</label> :  <input type="number" name="dexterite" id="dexterite" /><br />
        <label for="charisme">charisme</label> :  <input type="number" name="charisme" id="charisme" /><br />
    </br>
				<p1>Vitalite</p1> </br>
        <label for="pv_max">max</label> :  <input type="number" name="pv_max" id="pv_max" /><br />
        <label for="pv">pv</label> :  <input type="number" name="pv" id="pv" /><br />
    </br>
                <p1>Sante_mental</p1> </br>
        <label for="sante_mental">sante_mental</label> :  <input type="number" name="sante_mental" id="sante_mental" /><br />
        <label for="SFT">SFT</label> :  <input type="number" name="SFT" id="SFT" /><br />
    </br>
				<p1>Connaissance</p1></br>
		<label for="connaissance_bonus">connaissance_bonus</label> :  <input type="number" name="connaissance_bonus" id="connaissance_bonus" /><br />
        <label for="evaluer_tresor">evaluer_tresor</label> :  <input type="number" name="evaluer_tresor" id="evaluer_tresor" /><br />
        <label for="premier_soin">premier_soin</label> :  <input type="number" name="premier_soin" id="premier_soin" /><br />
        <label for="cartographie">cartographie</label> :  <input type="number" name="cartographie" id="cartographie" /><br />
        <label for="memoriser">memoriser</label> :  <input type="number" name="memoriser" id="memoriser" /><br />
        <label for="connaissance_plantes">connaissance_plantes</label> :  <input type="number" name="connaissance_plantes" id="connaissance_plantes" /><br />
        <label for="connaissance_poisons">connaissance_poisons</label> :  <input type="number" name="connaissance_poisons" id="connaissance_poisons" /><br />
        <label for="artisanat">artisanat</label> :  <input type="number" name="artisanat" id="artisanat" /><br />
    </br>
	             <p1>Langage</p1></br>
        <label for="Langage commun">Langage commun</label> :  <input type="number" name="LLC" id="LLC" placeholder="Lire/Ecrire" /> <input type="number" name="PLC" id="PLC" placeholder="Parler" /><br />
        <label for="Bas Melniboneen">Bas Melnibonéen</label> :  <input type="number" name="LBM" id="LBM" placeholder="Lire/Ecrire" /> <input type="number" name="PBM" id="PMB" placeholder="Parler" /><br />
        <label for="Haut_Melniboneen">Haut Melnibonéen</label> :  <input type="number" name="LHM" id="LHM" placeholder="Lire/Ecrire" /> <input type="number" name="PHM" id="PHM" placeholder="Parler" /><br />
        <label for="Pande">Pande</label> :  <input type="number" name="LP" id="LP" placeholder="Lire/Ecrire" /> <input type="number" name="PP" id="PP" placeholder="Parler" /><br />
        <label for="Mabden">Mabden</label> :  <input type="number" name="LM" id="LM" placeholder="Lire/Ecrire" /> <input type="number" name="PM" id="PM" placeholder="Parler" /><br />
        <label for="Orgien">Orgien</label> :  <input type="number" name="LO" id="LO" placeholder="Lire/Ecrire" /> <input type="number" name="PO" id="PO" placeholder="Parler" /><br /> 
    </br>
	           <p1>Competences</p1></br>
        <label for="communication">communication</label> :  <input type="number" name="communication" id="communication" /><br />
        <label for="manipultion">manipulation</label> :  <input type="number" name="manipulation" id="manipulation" /><br />
        <label for="perception">perception</label> :  <input type="number" name="perception" id="perception" /><br />
        <label for="agilite">agilite</label> :  <input type="number" name="agilite" id="agilite" /><br />
        <label for="discretion">discretion</label> :  <input type="number" name="discretion" id="discretion" /><br />
    </br>
	           <p1>Perception</p1></br>
		<label for="perception_bonus">perception_bonus</label> :  <input type="number" name="perception_bonus" id="perception_bonus" /><br />
        <label for="equilibre">equilibre</label> :  <input type="number" name="equilibre" id="equilibre" /><br />
        <label for="ecouter">ecouter</label> :  <input type="number" name="ecouter" id="ecouter" /><br />
        <label for="sentir">sentir</label> :  <input type="number" name="sentir" id="sentir" /><br />
        <label for="chercher">chercher</label> :  <input type="chercher" name="chercher" id="chercher" /><br />
        <label for="voir">voir</label> :  <input type="number" name="voir" id="voir" /><br />
        <label for="gouter">gouter</label> :  <input type="number" name="gouter" id="gouter" /><br />
        <label for="pister">pister</label> :  <input type="number" name="pister" id="pister" /><br />
    </br>
	           <p1>Communication</p1></br>
		<label for="communication_bonus">communication_bonus</label> :  <input type="number" name="communication_bonus" id="communication_bonus" /><br />
        <label for="credit">credit</label> :  <input type="number" name="credit" id="credit" /><br />
        <label for="persuader">persuader</label> :  <input type="number" name="persuader" id="persuader" /><br />
        <label for="eloquence">eloquence</label> :  <input type="number" name="eloquence" id="eloquence" /><br />
        <label for="chanter">chanter</label> :  <input type="number" name="chanter" id="chanter" /><br />
    </br>
				<p1>Manipulation</p1></br>
        <label for="manipulation_bonus">manipulation_bonus</label> :  <input type="number" name="manipulation_bonus" id="manipulation_bonus" /><br />
		<label for="jongler">jongler</label> :  <input type="number" name="jongler" id="jongler" /><br />
        <label for="crocheter">crocheter</label> :  <input type="number" name="crocheter" id="crocheter" /><br />
        <label for="passe_passe">passe_passe</label> :  <input type="number" name="passe_passe" id="passe_passe" /><br />
        <label for="faire_piege">faire_piege</label> :  <input type="number" name="faire_piege" id="faire_piege" /><br />
        <label for="faire_noeud">faire_noeud</label> :  <input type="number" name="faire_noeud" id="faire_noeud" /><br />
    </br>
                <p1>Agilite</p1></br>
        <label for="agilite_bonus">agilite_bonus</label> :  <input type="number" name="agilite_bonus" id="agilite_bonus" /><br />
		<label for="grimper">grimper</label> :  <input type="number" name="grimper" id="grimper" /><br />
        <label for="eviter">eviter</label> :  <input type="number" name="eviter" id="eviter" /><br />
        <label for="sauter">sauter</label> :  <input type="number" name="sauter" id="sauter" /><br />
        <label for="equitation">equitation</label> :  <input type="number" name="equitation" id="equitation" /><br />
        <label for="nager">nager</label> :  <input type="number" name="nager" id="nager" /><br />
        <label for="culbuter">culbuter</label> :  <input type="number" name="culbuter" id="culbuter" /><br />
    </br>
                <p1>Discretion</p1></br>
        <label for="discretion_bonus">discretion_bonus</label> :  <input type="number" name="discretion_bonus" id="discretion_bonus" /><br />
		<label for="embuscade">embuscade</label> :  <input type="number" name="embuscade" id="embuscade" /><br />
        <label for="dissimuler">dissimuler</label> :  <input type="number" name="dissimuler" id="dissimuler" /><br />
        <label for="se_cacher">se_cacher</label> :  <input type="number" name="se_cacher" id="se_cacher" /><br />
        <label for="mouvement_silencieux">mouvement_silencieux</label> :  <input type="number" name="mouvement_silencieux" id="mouvement_silencieux" /><br />
        <label for="couper_bourse">couper bourse</label> :  <input type="number" name="couper_bourse" id="couper_bourse" /><br />
    </br>
        <label for="Possession">Possession</label> : <textarea rows="4" cols="50" name="Possession" id="Possession"></textarea>
        <label for="Invocation">Invocation</label> : <textarea rows="4" cols="50" name="Invocation" id="Invocation"></textarea><br />
    </p>
    </br>
            <input type="submit" value="Envoyer" name="Envoyer">
	</p>
    </form>
    </body>
</html>