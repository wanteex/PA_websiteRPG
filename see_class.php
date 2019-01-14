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
                    

                               

                            <section>
                                <?php
                                    $reponse = $bdd->query('SELECT * FROM social_class Where id_SC >= 2');
                                    while ($donnees = $reponse->fetch())
                                     {
                                ?>
                                        <section>
                                        <article id="Allarticle">
                                            <header>
                                                <h1><?php echo $donnees['name'];?></h1>
                                            </header>
                                            <h2>bonus of this class</h2>
                                            <p><?php echo $donnees['bonus']?></p>
                                        </article>
                                    </section>
                                <?php
                                    }
                                ?>





    </body>
</html>