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
                 
                    <body>
                    

                            <article id="Allarticle">
                                <header>
                                    <h2>Les Cultes</h2>
                                </header>
                                <p>Le culte de votre personnage va influencer sur la façons de penser et d'agir de celui-ci.</br>
                                    ................................................................</p>
                            </article>

                            <section>
                                <?php
                                    $reponse = $bdd->query('SELECT * FROM cult Where id_cu >=1');
                                    while ($donnees = $reponse->fetch())
                                     {
                                ?>
                                        <section>
                                        <article id="Allarticle">
                                            <header>
                                                <h1><?php echo $donnees['name_cult'];?></h1>
                                            </header>
                                            <h2>type of god</h2>
                                            <p><?php echo $donnees['type_god']?></p>
                                            <h2>duty</h2>
                                            <p><?php echo $donnees['duty']; ?></p>
                                        </article>
                                    </section>
                                <?php
                                    }
                                ?>
                    </div>




    </body>
</html>