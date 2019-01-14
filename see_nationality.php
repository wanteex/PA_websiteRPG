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
                                    <h2>Les Nationalités</h2>
                                </header>
                                <p>La nationalité de votre personnage vas lui apporter différents bonus. </br>
                                    ................................................................</p>
                            </article>

                            <section>
                                <?php
                                    $reponse = $bdd->query('SELECT * FROM nationality ');
                                    while ($donnees = $reponse->fetch())
                                     {
                                ?>
                                        <section>
                                        <article id="Allarticle">
                                            <header>
                                                <h1><?php echo $donnees['name'];?></h1>
                                            </header>
                                            <p><?php echo $donnees['description']?></p>
                                            <h2>bonus de nationalité</h2>
                                            <p><?php echo $donnees['bonus']; ?></p>
                                        </article>
                                    </section>
                                <?php
                                    }
                                ?>
                    </div>


    </body>
</html>