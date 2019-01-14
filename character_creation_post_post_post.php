<?php
include("includes/identifiants.php");
include("includes/functions.php");
session_start();


$combat = '';
$i=1;
$idarme = "weapon".$i;

while ( $i<= 3) {
        if ($_POST[$idarme] != 0) {
                $reponse = $bdd->query('SELECT damage FROM weapon WHERE id = '.$_POST[$idarme]);
                $donnees = $reponse->fetch();
                $attarme = 'A'.$i.'a';
                $damarme = $donnees['damage'];
                $pararme = 'A'.$i.'p';
                $combat .= $_POST[$idarme].';'.$_SESSION[$attarme].';'.$damarme.';'.$_SESSION[$pararme].';';
        }
        $i++;
        $idarme = "weapon".$i;
}
$a = $_SESSION['MS'] % 2;
$SFT = ($_SESSION['MS'] + $a) /2;
$_SESSION['Possession'] = "";
$_SESSION['Invocation'] = "";


$per = $bdd->prepare("INSERT INTO personnage (/*id_joueur,*/nom,
        sexe,
        age,
        yeux,
        cheveux,
        id_nationalite,
        id_classe_social1,
        id_classe_social2,
        id_classe_social3,
        id_culte,
        Point_Elan,
        Argent,
        Combat,
        forc,
        constitution,
        taille,
        intelligence,
        pouvoir,
        dexterite,
        charisme,
        sante_mental,
        pv_max,
        pv,
        SFT,
        connaissance_bonus,
        evaluer_tresor,
        premier_soin,
        cartographie,
        memoriser,
        connaissance_plantes,
        connaissance_poisons,
        artisanat,
        LLC,
        PLC,
        LBM,
        PBM,
        LHM,
        PHM,
        LP,
        PP,
        LM,
        PM,
        LO,
        PO,
        perception_bonus,
        equilibre,
        ecouter,
        sentir,
        chercher,
        voir,
        gouter,
        pister,
        communication_bonus,
        credit,
        eloquence,
        persuader,
        chanter,
        manipulation_bonus,
        jongler,
        crocheter,
        passe_passe,
        faire_piege,
        faire_noeud,
        agilite_bonus,
        grimper,
        eviter,
        sauter,
        equitation,
        nager,
        culbuter,
        discretion_bonus,
        embuscade,
        dissimuler,
        se_cacher,
        mouvement_silencieux,
        couper_bourse,
        Possesion,
        Invocation) VALUES(/*id_joueur,*/:nom,
        :sexe,
        :age,
        :yeux,
        :cheveux,
        :id_nationalite,
        :id_classe_social1,
        :id_classe_social2,
        :id_classe_social3,
        :id_culte,
        :Point_Elan,
        :Argent,
        :Combat,
        :forc,
        :constitution,
        :taille,
        :intelligence,
        :pouvoir,
        :dexterite,
        :charisme,
        :sante_mental,
        :pv_max,
        :pv,
        :SFT,
        :connaissance_bonus,
        :evaluer_tresor,
        :premier_soin,
        :cartographie,
        :memoriser,
        :connaissance_plantes,
        :connaissance_poisons,
        :artisanat,
        :LLC,
        :PLC,
        :LBM,
        :PBM,
        :LHM,
        :PHM,
        :LP,
        :PP,
        :LM,
        :PM,
        :LO,
        :PO,
        :perception_bonus,
        :equilibre,
        :ecouter,
        :sentir,
        :chercher,
        :voir,
        :gouter,
        :pister,
        :communication_bonus,
        :credit,
        :eloquence,
        :persuader,
        :chanter,
        :manipulation_bonus,
        :jongler,
        :crocheter,
        :passe_passe,
        :faire_piege,
        :faire_noeud,
        :agilite_bonus,
        :grimper,
        :eviter,
        :sauter,
        :equitation,
        :nager,
        :culbuter,
        :discretion_bonus,
        :embuscade,
        :dissimuler,
        :se_cacher,
        :mouvement_silencieux,
        :couper_bourse,
        :Possesion,
        :Invocation)");


$per->execute(array('nom' => $_SESSION['nameca'],
                                        'sexe' => $_SESSION['SEX'],
                                        'age' => $_SESSION['age'],
                                        'yeux' => $_SESSION['eyes'],
                                        'cheveux' => $_SESSION['hairs'],
                                        'id_nationalite' => $_SESSION['id_NA'],
                                        'id_classe_social1' => $_SESSION['id_CS1'],
                                        'id_classe_social2' => $_SESSION['id_CS2'],
                                        'id_classe_social3' => $_SESSION['id_CS3'],
                                        'id_culte' => $_SESSION['CU'],
                                        'Point_Elan' => $_SESSION['ELAN'],
                                        'Argent' => $_SESSION['money'],
                                        'Combat' => $combat,
                                        'forc' => $_SESSION['FOR'],
                                        'constitution' => $_SESSION['CON'],
                                        'taille' => $_SESSION['TAI'],
                                        'intelligence' => $_SESSION['INT'],
                                        'pouvoir' => $_SESSION['POU'],
                                        'dexterite' => $_SESSION['DEX'],
                                        'charisme' => $_SESSION['CHA'],
                                        'sante_mental' => $_SESSION['MS'],
                                        'pv_max' => $_SESSION['PV'],
                                        'pv' => $_SESSION['PV'],
                                        'SFT' => $SFT,
                                        'connaissance_bonus' => $_SESSION['boCO'],
                                        'evaluer_tresor' => $_SESSION['EVaT'],
                                        'premier_soin' => $_SESSION['PS'],
                                        'cartographie' => $_SESSION['CAR'],
                                        'memoriser' => $_SESSION['MEM'],
                                        'connaissance_plantes' => $_SESSION['CONdesPLA'],
                                        'connaissance_poisons' => $_SESSION['CONdesPOI'],
                                        'artisanat' => $_SESSION['ARTI'],
                                        'LLC' => $_SESSION['LLC'],
                                        'PLC' => $_SESSION['PLC'],
                                        'LBM' => $_SESSION['LBM'],
                                        'PBM' => $_SESSION['PBM'],
                                        'LHM' => $_SESSION['LHM'],
                                        'PHM' => $_SESSION['PHM'],
                                        'LP' => $_SESSION['LP'],
                                        'PP' => $_SESSION['PP'],
                                        'LM' => $_SESSION['LM'],
                                        'PM' => $_SESSION['PM'],
                                        'LO' => $_SESSION['LO'],
                                        'PO' => $_SESSION['PO'],
                                        'perception_bonus' => $_SESSION['boPERC'],
                                        'equilibre' => $_SESSION['EQUILI'],
                                        'ecouter' => $_SESSION['ECOU'],
                                        'sentir' => $_SESSION['SEN'],
                                        'chercher' => $_SESSION['CHER'],
                                        'voir' => $_SESSION['VOIR'],
                                        'gouter' => $_SESSION['GOU'],
                                        'pister' => $_SESSION['PIST'],
                                        'communication_bonus' => $_SESSION['boCOMM'],
                                        'credit' => $_SESSION['CRE'],
                                        'eloquence' => $_SESSION['ELO'],
                                        'persuader' => $_SESSION['PERSU'],
                                        'chanter' => $_SESSION['CHAN'],
                                        'manipulation_bonus' => $_SESSION['boMAN'],
                                        'jongler' => $_SESSION['JON'],
                                        'crocheter' => $_SESSION['CRO'],
                                        'passe_passe' => $_SESSION['PASPAS'],
                                        'faire_piege' => $_SESSION['FPI'],
                                        'faire_noeud' => $_SESSION['FNE'],
                                        'agilite_bonus' => $_SESSION['boAGI'],
                                        'grimper' => $_SESSION['GRI'],
                                        'eviter' => $_SESSION['EVI'],
                                        'sauter' => $_SESSION['SAU'],
                                        'equitation' => $_SESSION['EQUITA'],
                                        'nager' => $_SESSION['NAG'],
                                        'culbuter' => $_SESSION['CULBU'],
                                        'discretion_bonus' => $_SESSION['boDIS'],
                                        'embuscade' => $_SESSION['EMB'],
                                        'dissimuler' => $_SESSION['DISS'],
                                        'se_cacher' => $_SESSION['SCA'],
                                        'mouvement_silencieux' => $_SESSION['MOUSI'],
                                        'couper_bourse' => $_SESSION['COUBOU'],
                                        'Possesion' => $_SESSION['Possession'],
                                        'Invocation' => $_SESSION['Invocation']
 ))

                                                    $_SESSION['nameca'] ="";
                                                    $_SESSION['age'] =0;
                                                    $_SESSION['eyes'] ="";
                                                    $_SESSION['hairs'] ="";
                                                    $_SESSION['size'] =0;
                                                    $_SESSION['weight'] =0;
                                                    $_SESSION['personal'] ="";
                                                    $_SESSION['money'] =0;
                                                    $_SESSION['SEX'] ="";
                                                    $_SESSION['AFLI'] ="";*/

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
                                                    $_SESSION['id_CS1'] =0;
                                                    $_SESSION['id_CS2'] =0;
                                                    $_SESSION['id_CS3'] =0;
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
                                                    $_SESSION['COUBOU'] =0;*
?>
