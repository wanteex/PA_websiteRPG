<?php 
	//include("debut.php");
	include("includes/identifiants.php");
     include("includes/varcreatchar.php");
     include("includes/functions.php");
     session_start();
	$x=0;
    if (!isset($_SESSION['l1'])) {
          $_SESSION['l1'] = 0;
          $_SESSION['l2'] = 0;
          $_SESSION['l3'] = 0;
          $_SESSION['l4'] = 0;
          $_SESSION['l5'] = 0;
          $_SESSION['l6'] = 0;
          $_SESSION['l7'] = 0;
          $_SESSION['l8'] = 0;
          $_SESSION['n1'] = 0;
          $_SESSION['n2'] = 0;
          $_SESSION['hp1'] = 0;
          $_SESSION['hp2'] = 0;
    }

     if ( $_SESSION['l1'] ==0 && $_SESSION['l2'] ==0 && $_SESSION['l3'] ==0 && $_SESSION['l4'] ==0 && $_SESSION['l5'] ==0 && $_SESSION['l6'] ==0 && $_SESSION['l7'] ==0 ) {
          while ( $x < 4) {
               $_SESSION['l1'] = $_SESSION['l1'] + rand(1,6);
               $_SESSION['l2'] = $_SESSION['l2'] + rand(1,6);
               $_SESSION['l3'] = $_SESSION['l3'] + rand(1,6);
               $_SESSION['l4'] = $_SESSION['l4'] + rand(1,6);
               $_SESSION['l5'] = $_SESSION['l5'] + rand(1,6);
               $_SESSION['l6'] = $_SESSION['l6'] + rand(1,6);
               $_SESSION['l7'] = $_SESSION['l7'] + rand(1,6);
               $_SESSION['l8'] = $_SESSION['l8'] + rand(1,6);
               $x++;   
          }
          $_SESSION['n1'] = rand(1,100);
          $_SESSION['n2'] = rand(1,100);
          $_SESSION['hp1'] =rand(1,100);
          $_SESSION['hp2'] =rand(1,100);
     }  
	
     
	
?>
<article class="Farticle">
    <h2 style="text-align:center">Choix des premières caracteristiques</h2>
    <p> Nous vous donnons 7 lancés de 4 dés à vous de les répartir dans la FORce,CONstitution,TAIlle,INTelligence,POUvoir,DEXterité ou le CHArisme sachant que l'un des lancé est inutile.</p><br>
    <form action="character_creation_post.php" method="post">
        <center><label>
                <?php echo $_SESSION['l1'];?></label><select id="l1" name="l1">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br>
            <label>
                <?php echo $_SESSION['l2']?></label><select name="l2">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br>
            <label>
                <?php echo $_SESSION['l3']?></label><select name="l3">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br>
            <label>
                <?php echo $_SESSION['l4']?></label><select name="l4">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br>
            <label>
                <?php echo $_SESSION['l5']?></label><select name="l5">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br>
            <label>
                <?php echo $_SESSION['l6']?></label><select name="l6">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br>
            <label>
                <?php echo $_SESSION['l7']?></label><select name="l7">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br>
            <label>
                <?php echo $_SESSION['l8']?></label><select name="l8">
                <option value="Non"> NON-utilisé </option>
                <option value="FORC"> FORce </option>
                <option value="CON"> CONstitution </option>
                <option value="TAI"> TAIlle </option>
                <option value="INTE"> INTelligence </option>
                <option value="POU"> POUvoir </option>
                <option value="DEX"> DEXterité </option>
                <option value="CHA"> CHArisme </option>
            </select><br><br>
            <label>Choissisez votre sex: </label><select name="sex">
                <option value="F"> Femme </option>
                <option value="M"> Homme </option>
            </select><br><br>

            <label>Vous avez le choix entre deux nationalitées: </label><select name="na">
                <option value=<?php echo SetNationality($_SESSION['n1']);?> >
                    <?php echo SetNationality($_SESSION['n1']);?>
                </option>
                <option value=<?php echo SetNationality($_SESSION['n2']);?> >
                    <?php echo SetNationality($_SESSION['n2']);?>
                </option>
            </select><br>
            <label>pour voir la description et les diffférents bonus de la nationalité vous pouvez <a href="national.php">venir ici</a></label>
            <br>
            <label>Vous avez le choix entre deux histoire personnelles: </label><select name="personal">
                <option value=<?php echo $_SESSION['hp1'];?> >
                    <?php echo SetHistoirePerso($_SESSION['hp1']);?>
                </option>
                <option value=<?php echo $_SESSION['hp2'];?> >
                    <?php echo SetHistoirePerso($_SESSION['hp2']);?>
                </option>
            </select><br><br>
            <label for="nameca">character name</label> : <input type="text" name="nameca" id="nameca" /><br />
            <label for="age">age</label> : <input type="number" name="age" id="age" /><br />
            <label for="eyes">eyes colors</label> : <input type="text" name="eyes" id="eyes" /><br />
            <label for="hairs">hairs colors</label> : <input type="text" name="hairs" id="hairs" /><br />
            <label for="size">size</label> : <input type="number" step="any" name="size" id="size" /><br />
            <label for="weight">weight</label> : <input type="number" step="any" name="weight" id="weight" /><br />
            <input type="submit" value="check les donées" name="check_les_données"></center>
    </form>

</article>
<script src="../js/cours.js"></script>

</body>

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
            <p><a href="#">ESAIPLan@hotmail.fr</a></p>
        </section>
        <section>
            <h3>&copy; Untitled</h3>
            <h3>Design: <a href="#">ESAIP Administration</a></h3>
        </section>
    </section>
</footer>

</html>
