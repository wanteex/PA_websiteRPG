<?php 
	//include("debut.php");
	include("includes/identifiants.php");
        include("includes/functions.php");
        session_start();
$_SESSION['CU'] = $_POST['cult'];

if (isset($_POST['class'])) {
	$_SESSION['CS1']=$_POST['class'];
	$_SESSION['CS3']=1;
	$_SESSION['CS2']=1;
}

if ($_SESSION['CS1'] != 1) {
        switch ($_SESSION['CS1']) {
        case 'Guerrier':
                $_SESSION['id_CS1']=2;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 50;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 50;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 40;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 40;
                $_SESSION['A3a'] = $_SESSION['A3a'] + 30;
                $_SESSION['A3p'] = $_SESSION['A3p'] + 30;
                $test = rand(1,100);
                if ($test <= 60) {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
                }else {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 25;
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
                ?>

                <?php
        case 'Assassin':
                $_SESSION['id_CS1']=3;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 50;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 50;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 40;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 40;
                $_SESSION['A3a'] = $_SESSION['A3a'] + 30;
                $_SESSION['A3p'] = $_SESSION['A3p'] + 30;
                $test = rand(1,100);
                if ($test <= 60) {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
                }else {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] +25;
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
                $_SESSION['CONdesPOI'] = $_SESSION['CONdesPOI'] +30;
                $_SESSION['CHER'] = $_SESSION['CHER'] +25;
                $_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
                $_SESSION['SCA'] = $_SESSION['SCA'] +40;
                $_SESSION['EMB'] = $_SESSION['EMB'] +50;
                $_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        case 'Marchand':
                $_SESSION['id_CS1']=4;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 20;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 20;
                $_SESSION['LLC'] =$_SESSION['LLC'] +70;
                $_SESSION['PLC'] =$_SESSION['PLC'] +70;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +50;
                $_SESSION['CRE'] =$_SESSION['CRE'] +40;
                $_SESSION['EVaT'] =$_SESSION['EVaT'] +80;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Négociant': 
                $_SESSION['id_CS1']=5;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 40;
                $_SESSION['LLC'] = $_SESSION['LLC'] +70;
                $_SESSION['PLC'] = $_SESSION['PLC'] +70;
                $_SESSION['PERSU'] = $_SESSION['PERSU'] +50;
                $_SESSION['CRE'] = $_SESSION['CRE'] +40;
                $_SESSION['EVaT'] = $_SESSION['EVaT'] +80;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Marin':
                $_SESSION['id_CS1']=6;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1a'] + 40;
                $_SESSION['NAG'] = $_SESSION['NAG'] +50;
                $_SESSION['FNE'] = $_SESSION['FNE'] +50;
                $_SESSION['GRI'] = $_SESSION['GRI'] +50;
                $_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +50;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'] ;
        case 'Second':
                $_SESSION['id_CS1']=7; 
                $_SESSION['A1a'] = $_SESSION['A1a'] + 42;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 42;;
                $_SESSION['NAG'] = $_SESSION['NAG'] +53;
                $_SESSION['FNE'] = $_SESSION['FNE'] +74;
                $_SESSION['GRI'] = $_SESSION['GRI'] +42;
                $_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +53;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Capitaine': 
                $_SESSION['id_CS1']=8;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 44;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 44;
                $_SESSION['NAG'] = $_SESSION['NAG'] +53;
                $_SESSION['FNE'] = $_SESSION['FNE'] +77;
                $_SESSION['GRI'] = $_SESSION['GRI'] +44;
                $_SESSION['EQUILI'] = $_SESSION['EQUILI'] +53;
                $_SESSION['money']= (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Chasseur': 
                $_SESSION['id_CS1']=9;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 30;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 30;
                $_SESSION['FPI'] =  $_SESSION['FPI'] +44;
                $_SESSION['EMB'] = $_SESSION['EMB'] +50;
                $_SESSION['PIST'] =$_SESSION['PIST'] +50;
                $_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100);
        case 'Fermier': 
                $_SESSION['id_CS1']=10;
                $_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
                $_SESSION['PIST'] =$_SESSION['PIST'] +20;
                $_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +20;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'];
        case 'Prêtre':
                $_SESSION['id_CS1']=11;
                $_SESSION['LLC'] = $_SESSION['LLC'] +80;
                $_SESSION['PLC'] = $_SESSION['PLC'] +80;
                $_SESSION['LBM'] =$_SESSION['LBM'] +60;
                $_SESSION['PBM'] =$_SESSION['PBM'] +60;
                $_SESSION['LHM'] =$_SESSION['LHM'] +40;
                $_SESSION['PHM'] =$_SESSION['PHM'] +40;
                $_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +40;
                $_SESSION['PS'] =$_SESSION['PS'] +40;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +25;
                $_SESSION['CRE'] =$_SESSION['CRE'] +25;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100);
                $_SESSION['ELAN'] = $_SESSION['ELAN'] + rand(1,6) + rand(1,6);
        case 'Noble': 
                $_SESSION['id_CS1']=12;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 40;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 20;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 20;
                $_SESSION['CRE'] = $_SESSION['boCOMM'] + $_SESSION['CRE'] +40;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100)*100;
        case 'Voleur': 
                $_SESSION['id_CS1']=13;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 35;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 35;
                $_SESSION['LLC'] =  $_SESSION['LLC'] +25;
                $_SESSION['PLC'] =  $_SESSION['PLC'] +25;
                $_SESSION['GRI'] =  rand(1,100) + $_SESSION['GRI'];
                $_SESSION['SAU'] = rand(1,100) + $_SESSION['SAU'];
                $_SESSION['CRO'] = rand(1,100) + $_SESSION['CRO'];
                $_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
                $_SESSION['VOIR'] = rand(1,100) + $_SESSION['VOIR'];
                $_SESSION['CHER'] = rand(1,100) + $_SESSION['CHER'];
                $_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
                $_SESSION['COUBOU'] = rand(1,100) + $_SESSION['COUBOU'];
                $_SESSION['EVaT'] = $_SESSION['EVaT'] +50;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) ;
        case 'Mendiant': 
                $_SESSION['id_CS1']=14;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +60;
                $_SESSION['VOIR'] = $_SESSION['VOIR'] + 60;
                $_SESSION['CHER'] = $_SESSION['CHER'] + 25;
                $_SESSION['CRO'] = $_SESSION['CRO'] + 50;
                $number = rand(1,20);
                $_SESSION['AFLI'] = $_SESSION['AFLI'] +SetAFLI($number);
                if ($number == 20) {
                        $_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,6);
        case 'Artisan':
                $_SESSION['id_CS1']=15;
                $_SESSION['boMAN'] = $_SESSION['boMAN'] +70;
                $_SESSION['A1a'] = $_SESSION['A1a'] + rand(1,100);
                $_SESSION['A1p'] = $_SESSION['A1p'] + rand(1,100);
                $_SESSION['A2a'] = $_SESSION['A2a'] + 15;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 15;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['DEX'];
        }
}
if ($_SESSION['CS2'] != 1) {
	switch ($_SESSION['CS2']) {
        case 'Guerrier':
                $_SESSION['id_CS2']=2;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 50;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 50;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 40;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 40;
                $_SESSION['A3a'] = $_SESSION['A3a'] + 30;
                $_SESSION['A3p'] = $_SESSION['A3p'] + 30;
                $test = rand(1,100);
                if ($test <= 60) {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
                }else {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 25;
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
                ?>

                <?php
        case 'Assassin':
                $_SESSION['id_CS2']=3;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 50;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 50;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 40;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 40;
                $_SESSION['A3a'] = $_SESSION['A3a'] + 30;
                $_SESSION['A3p'] = $_SESSION['A3p'] + 30;
                $test = rand(1,100);
                if ($test <= 60) {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
                }else {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] +25;
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
                $_SESSION['CONdesPOI'] = $_SESSION['CONdesPOI'] +30;
                $_SESSION['CHER'] = $_SESSION['CHER'] +25;
                $_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
                $_SESSION['SCA'] = $_SESSION['SCA'] +40;
                $_SESSION['EMB'] = $_SESSION['EMB'] +50;
                $_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        case 'Marchand':
                $_SESSION['id_CS2']=4;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 20;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 20;
                $_SESSION['LLC'] =$_SESSION['LLC'] +70;
                $_SESSION['PLC'] =$_SESSION['PLC'] +70;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +50;
                $_SESSION['CRE'] =$_SESSION['CRE'] +40;
                $_SESSION['EVaT'] =$_SESSION['EVaT'] +80;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Négociant': 
                $_SESSION['id_CS2']=5;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 40;
                $_SESSION['LLC'] = $_SESSION['LLC'] +70;
                $_SESSION['PLC'] = $_SESSION['PLC'] +70;
                $_SESSION['PERSU'] = $_SESSION['PERSU'] +50;
                $_SESSION['CRE'] = $_SESSION['CRE'] +40;
                $_SESSION['EVaT'] = $_SESSION['EVaT'] +80;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Marin':
                $_SESSION['id_CS2']=6;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1a'] + 40;
                $_SESSION['NAG'] = $_SESSION['NAG'] +50;
                $_SESSION['FNE'] = $_SESSION['FNE'] +50;
                $_SESSION['GRI'] = $_SESSION['GRI'] +50;
                $_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +50;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'] ;
        case 'Second':
                $_SESSION['id_CS2']=7; 
                $_SESSION['A1a'] = $_SESSION['A1a'] + 42;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 42;;
                $_SESSION['NAG'] = $_SESSION['NAG'] +53;
                $_SESSION['FNE'] = $_SESSION['FNE'] +74;
                $_SESSION['GRI'] = $_SESSION['GRI'] +42;
                $_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +53;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Capitaine': 
                $_SESSION['id_CS2']=8;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 44;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 44;
                $_SESSION['NAG'] = $_SESSION['NAG'] +53;
                $_SESSION['FNE'] = $_SESSION['FNE'] +77;
                $_SESSION['GRI'] = $_SESSION['GRI'] +44;
                $_SESSION['EQUILI'] = $_SESSION['EQUILI'] +53;
                $_SESSION['money']= (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Chasseur': 
                $_SESSION['id_CS2']=9;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 30;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 30;
                $_SESSION['FPI'] =  $_SESSION['FPI'] +44;
                $_SESSION['EMB'] = $_SESSION['EMB'] +50;
                $_SESSION['PIST'] =$_SESSION['PIST'] +50;
                $_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100);
        case 'Fermier': 
                $_SESSION['id_CS2']=10;
                $_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
                $_SESSION['PIST'] =$_SESSION['PIST'] +20;
                $_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +20;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'];
        case 'Prêtre':
                $_SESSION['id_CS2']=11;
                $_SESSION['LLC'] = $_SESSION['LLC'] +80;
                $_SESSION['PLC'] = $_SESSION['PLC'] +80;
                $_SESSION['LBM'] =$_SESSION['LBM'] +60;
                $_SESSION['PBM'] =$_SESSION['PBM'] +60;
                $_SESSION['LHM'] =$_SESSION['LHM'] +40;
                $_SESSION['PHM'] =$_SESSION['PHM'] +40;
                $_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +40;
                $_SESSION['PS'] =$_SESSION['PS'] +40;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +25;
                $_SESSION['CRE'] =$_SESSION['CRE'] +25;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100);
                $_SESSION['ELAN'] = $_SESSION['ELAN'] + rand(1,6) + rand(1,6);
        case 'Noble': 
                $_SESSION['id_CS2']=12;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 40;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 20;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 20;
                $_SESSION['CRE'] = $_SESSION['boCOMM'] + $_SESSION['CRE'] +40;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100)*100;
        case 'Voleur': 
                $_SESSION['id_CS2']=13;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 35;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 35;
                $_SESSION['LLC'] =  $_SESSION['LLC'] +25;
                $_SESSION['PLC'] =  $_SESSION['PLC'] +25;
                $_SESSION['GRI'] =  rand(1,100) + $_SESSION['GRI'];
                $_SESSION['SAU'] = rand(1,100) + $_SESSION['SAU'];
                $_SESSION['CRO'] = rand(1,100) + $_SESSION['CRO'];
                $_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
                $_SESSION['VOIR'] = rand(1,100) + $_SESSION['VOIR'];
                $_SESSION['CHER'] = rand(1,100) + $_SESSION['CHER'];
                $_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
                $_SESSION['COUBOU'] = rand(1,100) + $_SESSION['COUBOU'];
                $_SESSION['EVaT'] = $_SESSION['EVaT'] +50;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) ;
        case 'Mendiant': 
                $_SESSION['id_CS2']=14;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +60;
                $_SESSION['VOIR'] = $_SESSION['VOIR'] + 60;
                $_SESSION['CHER'] = $_SESSION['CHER'] + 25;
                $_SESSION['CRO'] = $_SESSION['CRO'] + 50;
                $number = rand(1,20);
                $_SESSION['AFLI'] = $_SESSION['AFLI'] +SetAFLI($number);
                if ($number == 20) {
                        $_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,6);
        case 'Artisan':
                $_SESSION['id_CS2']=15;
                $_SESSION['boMAN'] = $_SESSION['boMAN'] +70;
                $_SESSION['A1a'] = $_SESSION['A1a'] + rand(1,100);
                $_SESSION['A1p'] = $_SESSION['A1p'] + rand(1,100);
                $_SESSION['A2a'] = $_SESSION['A2a'] + 15;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 15;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['DEX'];
        }
}
if ($_SESSION['CS3'] != 1) {
	switch ($_SESSION['CS3']) {
        case 'Guerrier':
                $_SESSION['id_CS3']=2;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 50;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 50;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 40;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 40;
                $_SESSION['A3a'] = $_SESSION['A3a'] + 30;
                $_SESSION['A3p'] = $_SESSION['A3p'] + 30;
                $test = rand(1,100);
                if ($test <= 60) {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
                }else {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 25;
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
                ?>

                <?php
        case 'Assassin':
                $_SESSION['id_CS3']=3;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 50;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 50;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 40;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 40;
                $_SESSION['A3a'] = $_SESSION['A3a'] + 30;
                $_SESSION['A3p'] = $_SESSION['A3p'] + 30;
                $test = rand(1,100);
                if ($test <= 60) {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] + 65;
                }else {
                        $_SESSION['EQUITA'] = $_SESSION['EQUITA'] +25;
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['INT'] ;
                $_SESSION['CONdesPOI'] = $_SESSION['CONdesPOI'] +30;
                $_SESSION['CHER'] = $_SESSION['CHER'] +25;
                $_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
                $_SESSION['SCA'] = $_SESSION['SCA'] +40;
                $_SESSION['EMB'] = $_SESSION['EMB'] +50;
                $_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
        case 'Marchand':
                $_SESSION['id_CS3']=4;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 20;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 20;
                $_SESSION['LLC'] =$_SESSION['LLC'] +70;
                $_SESSION['PLC'] =$_SESSION['PLC'] +70;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +50;
                $_SESSION['CRE'] =$_SESSION['CRE'] +40;
                $_SESSION['EVaT'] =$_SESSION['EVaT'] +80;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Négociant': 
                $_SESSION['id_CS3']=5;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 40;
                $_SESSION['LLC'] = $_SESSION['LLC'] +70;
                $_SESSION['PLC'] = $_SESSION['PLC'] +70;
                $_SESSION['PERSU'] = $_SESSION['PERSU'] +50;
                $_SESSION['CRE'] = $_SESSION['CRE'] +40;
                $_SESSION['EVaT'] = $_SESSION['EVaT'] +80;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100))* $_SESSION['INT'] ;
        case 'Marin':
                $_SESSION['id_CS3']=6;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1a'] + 40;
                $_SESSION['NAG'] = $_SESSION['NAG'] +50;
                $_SESSION['FNE'] = $_SESSION['FNE'] +50;
                $_SESSION['GRI'] = $_SESSION['GRI'] +50;
                $_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +50;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'] ;
        case 'Second':
                $_SESSION['id_CS3']=7; 
                $_SESSION['A1a'] = $_SESSION['A1a'] + 42;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 42;;
                $_SESSION['NAG'] = $_SESSION['NAG'] +53;
                $_SESSION['FNE'] = $_SESSION['FNE'] +74;
                $_SESSION['GRI'] = $_SESSION['GRI'] +42;
                $_SESSION['EQUILI'] = $_SESSION['boPERC'] + $_SESSION['EQUILI'] +53;
                $_SESSION['money']= $_SESSION['money'] + (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Capitaine': 
                $_SESSION['id_CS3']=8;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 44;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 44;
                $_SESSION['NAG'] = $_SESSION['NAG'] +53;
                $_SESSION['FNE'] = $_SESSION['FNE'] +77;
                $_SESSION['GRI'] = $_SESSION['GRI'] +44;
                $_SESSION['EQUILI'] = $_SESSION['EQUILI'] +53;
                $_SESSION['money']= (rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20))* $_SESSION['INT'] ;
        case 'Chasseur': 
                $_SESSION['id_CS3']=9;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 30;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 30;
                $_SESSION['FPI'] =  $_SESSION['FPI'] +44;
                $_SESSION['EMB'] = $_SESSION['EMB'] +50;
                $_SESSION['PIST'] =$_SESSION['PIST'] +50;
                $_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100);
        case 'Fermier': 
                $_SESSION['id_CS3']=10;
                $_SESSION['ARTI'] =$_SESSION['ARTI'] +20;
                $_SESSION['PIST'] =$_SESSION['PIST'] +20;
                $_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +20;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20)* $_SESSION['INT'];
        case 'Prêtre':
                $_SESSION['id_CS3']=11;
                $_SESSION['LLC'] = $_SESSION['LLC'] +80;
                $_SESSION['PLC'] = $_SESSION['PLC'] +80;
                $_SESSION['LBM'] =$_SESSION['LBM'] +60;
                $_SESSION['PBM'] =$_SESSION['PBM'] +60;
                $_SESSION['LHM'] =$_SESSION['LHM'] +40;
                $_SESSION['PHM'] =$_SESSION['PHM'] +40;
                $_SESSION['CONdesPLA'] =$_SESSION['CONdesPLA'] +40;
                $_SESSION['PS'] =$_SESSION['PS'] +40;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +25;
                $_SESSION['CRE'] =$_SESSION['CRE'] +25;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100) + rand(1,100);
                $_SESSION['ELAN'] = $_SESSION['ELAN'] + rand(1,6) + rand(1,6);
        case 'Noble': 
                $_SESSION['id_CS3']=12;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 40;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 40;
                $_SESSION['A2a'] = $_SESSION['A2a'] + 20;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 20;
                $_SESSION['CRE'] = $_SESSION['boCOMM'] + $_SESSION['CRE'] +40;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100)*100;
        case 'Voleur': 
                $_SESSION['id_CS3']=13;
                $_SESSION['A1a'] = $_SESSION['A1a'] + 35;
                $_SESSION['A1p'] = $_SESSION['A1p'] + 35;
                $_SESSION['LLC'] =  $_SESSION['LLC'] +25;
                $_SESSION['PLC'] =  $_SESSION['PLC'] +25;
                $_SESSION['GRI'] =  rand(1,100) + $_SESSION['GRI'];
                $_SESSION['SAU'] = rand(1,100) + $_SESSION['SAU'];
                $_SESSION['CRO'] = rand(1,100) + $_SESSION['CRO'];
                $_SESSION['ECOU'] = $_SESSION['ECOU'] +50;
                $_SESSION['VOIR'] = rand(1,100) + $_SESSION['VOIR'];
                $_SESSION['CHER'] = rand(1,100) + $_SESSION['CHER'];
                $_SESSION['MOUSI'] = $_SESSION['MOUSI'] +50;
                $_SESSION['COUBOU'] = rand(1,100) + $_SESSION['COUBOU'];
                $_SESSION['EVaT'] = $_SESSION['EVaT'] +50;
                $_SESSION['money']= $_SESSION['money'] + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) + rand(1,20) ;
        case 'Mendiant': 
                $_SESSION['id_CS3']=14;
                $_SESSION['PERSU'] =$_SESSION['PERSU'] +60;
                $_SESSION['VOIR'] = $_SESSION['VOIR'] + 60;
                $_SESSION['CHER'] = $_SESSION['CHER'] + 25;
                $_SESSION['CRO'] = $_SESSION['CRO'] + 50;
                $number = rand(1,20);
                $_SESSION['AFLI'] = $_SESSION['AFLI'] +SetAFLI($number);
                if ($number == 20) {
                        $_SESSION['INT'] = $_SESSION['INT'] - rand(1,4);
                }
                $_SESSION['money']= $_SESSION['money'] + rand(1,6);
        case 'Artisan':
                $_SESSION['id_CS3']=15;
                $_SESSION['boMAN'] = $_SESSION['boMAN'] +70;
                $_SESSION['A1a'] = $_SESSION['A1a'] + rand(1,100);
                $_SESSION['A1p'] = $_SESSION['A1p'] + rand(1,100);
                $_SESSION['A2a'] = $_SESSION['A2a'] + 15;
                $_SESSION['A2p'] = $_SESSION['A2p'] + 15;
                $_SESSION['money']= $_SESSION['money'] + rand(1,100) * $_SESSION['DEX'];
        }
}

								/* calcul des pv (sans modif charact)*/
						    	$_SESSION['PV'] =$_SESSION['PV']+ $_SESSION['CON'] + 1;
						    	

								

								/*calcul de tout les différents bonus*/ 
								if ($_SESSION['TAI'] > 12) {
						    		$_SESSION['PV'] = $_SESSION['PV'] + $_SESSION['TAI'] - 12;
									$_SESSION['boPA'] = $_SESSION['boPA'] - $_SESSION['TAI'] + 12;
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - $_SESSION['TAI'] + 12;
									$_SESSION['boDIS'] = $_SESSION['boDIS'] - $_SESSION['TAI'] + 12;
						    	}elseif ($_SESSION['TAI']<9) {
						    		$_SESSION['PV'] = $_SESSION['PV'] - 9 + $_SESSION['TAI'];
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + 9 - $_SESSION['TAI'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] + 9 - $_SESSION['TAI'];
									$_SESSION['boDIS'] = $_SESSION['boDIS'] + 9 - $_SESSION['TAI'];				
						    	} 
								if ($_SESSION['FOR'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boAGI'] = $_SESSION['boAGI'] + $_SESSION['FOR'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['FOR'] - 12;
						    	}elseif ($_SESSION['FOR']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['FOR'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['FOR'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - 9 + $_SESSION['FOR'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['FOR'];
								}

								if ($_SESSION['INT'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boPERC'] = $_SESSION['boPERC'] + $_SESSION['INT'] - 12;
						    		$_SESSION['boCO'] = $_SESSION['boCO'] + ($_SESSION['INT'] - 12)*2;
						    		$_SESSION['bDISC'] = $_SESSION['boDIS'] + $_SESSION['INT'] - 12;
						    		$_SESSION['bDCOMM'] = $_SESSION['boCOMM'] + $_SESSION['INT'] - 12;
						    	}elseif ($_SESSION['INT']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['INT'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['INT'];
									$_SESSION['boPERC'] = $_SESSION['boPERC'] - 9 + $_SESSION['INT'];
									$_SESSION['boCO'] = $_SESSION['boCO'] + (- 9 + $_SESSION['INT']) * 2;
									$_SESSION['boDIS'] = $_SESSION['boDIS'] - 9 + $_SESSION['INT'];
									$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['INT'];	
								}

								if ($_SESSION['POU'] > 12) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boPERC'] = $_SESSION['boPERC'] + $_SESSION['POU'] - 12;
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] + $_SESSION['POU'] - 12;
						    	}elseif ($_SESSION['POU']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['POU'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['POU'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['POU'];
									$_SESSION['boPERC'] = $_SESSION['boPERC'] - 9 + $_SESSION['POU'];
									$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['POU'];
								}

								if ($_SESSION['DEX'] > 12) {
									$_SESSION['boAT'] = $_SESSION['boAT'] + $_SESSION['DEX'] - 12;
									$_SESSION['boPA'] = $_SESSION['boPA'] + $_SESSION['DEX'] - 12;
									$_SESSION['boAGI'] = $_SESSION['boAGI'] + $_SESSION['DEX'] - 12;
									$_SESSION['boMAN'] = $_SESSION['boMAN'] + $_SESSION['DEX'] - 12;
						    	}elseif ($_SESSION['DEX']<9) {
						    		$_SESSION['boAT'] = $_SESSION['boAT'] - 9 + $_SESSION['DEX'];
									$_SESSION['boPA'] = $_SESSION['boPA'] - 9 + $_SESSION['DEX'];
									$_SESSION['boAGI'] = $_SESSION['boAGI'] - 9 + $_SESSION['DEX'];
									$_SESSION['boMAN'] = $_SESSION['boMAN'] - 9 + $_SESSION['DEX'];
						    	}

						    	if ($_SESSION['CHA'] > 12) {
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] + $_SESSION['DEX'] - 12;
						    	}elseif ($_SESSION['CHA'] < 9) {
						    		$_SESSION['boCOMM'] = $_SESSION['boCOMM'] - 9 + $_SESSION['POU'];
						    	}


						    	if (($_SESSION['FOR']+$_SESSION['TAI']) < 50) {
						    		$_SESSION['boDAM'] = SetBonusDamageM(($_SESSION['FOR']+$_SESSION['TAI']));
						    		$_SESSION['boDAT'] = SetBonusDamageT(($_SESSION['FOR']+$_SESSION['TAI']));
						    	}else{
						    		$_SESSION['boDAM'] ="+3D6";
						    		$_SESSION['boDAT'] ="+3D4";
						    	}

if ($_SESSION['boAGI'] < 0) {
	$_SESSION['boAGI'] = 0;
}
if ($_SESSION['boMAN'] < 0) {
	$_SESSION['boMAN'] = 0;
}
if ($_SESSION['boPERC'] < 0) {
	$_SESSION['boPERC'] = 0;
}
if ($_SESSION['boCOMM'] < 0) {
	$_SESSION['boCOMM'] = 0;
}
if ($_SESSION['boDIS'] < 0) {
	$_SESSION['boDIS'] = 0;
}
if ($_SESSION['boCO'] < 0) {
	$_SESSION['boCO'] = 0;
}
if ($_SESSION['boAT'] < 0) {
	$_SESSION['boAT'] = 0;
}
if ($_SESSION['boPA'] < 0) {
	$_SESSION['boPA'] = 0;
}
						    	/* ENREGISTREMENT DANS LA DATABASE !!!!!!!!!!!!!!!!!!!!!!!! */
?>

<article class="Farticle">
        <form action="character_creation_post_post_post.php" method="post">
        <?php
                                                echo    "------".$_SESSION['age'] ;
                                                echo    "------".$_SESSION['eyes'] ;
                                                echo    "------".$_SESSION['hairs'] ;
                                                echo    "------".$_SESSION['size'] ;
                                                echo    "------".$_SESSION['weight'] ;
                                                echo    "------".SetHistoirePerso($_SESSION['personal']) ;
                                                echo    "------".$_SESSION['money'] ;
                                                echo    "------".$_SESSION['SEX'] ;
                                                echo    "------".$_SESSION['AFLI'] ;



                                                echo    "------".$_SESSION['FOR'] ;
                                                echo    "------".$_SESSION['CON'] ;
                                                echo    "------".$_SESSION['TAI'] ;
                                                echo    "------".$_SESSION['INT'] ;
                                                echo    "------".$_SESSION['POU'] ;
                                                echo    "------".$_SESSION['DEX'] ;
                                                echo    "------".$_SESSION['CHA'] ;
                                                echo    "------".$_SESSION['ELAN'];

                                                echo    "------".$_SESSION['NA'] ;
                                                echo    "------".$_SESSION['id_NA'] ;
                                                echo    "------".$_SESSION['CS1'] ;
                                                echo    "------".$_SESSION['CS2'] ;
                                                echo    "------".$_SESSION['CS3'] ;
                                                echo    "------".$_SESSION['id_CS1'] ;
                                                echo    "------".$_SESSION['id_CS2'] ;
                                                echo    "------".$_SESSION['id_CS3'] ;
                                                echo    "------".$_SESSION['CU'] ;
                                                echo    "------".$_SESSION['PV'] ;
                                                echo    "------".$_SESSION['MS'] ;

                                                echo    "------".$_SESSION['boCO'] ;
                                                echo    "------".$_SESSION['EVaT'] ;
                                                echo    "------".$_SESSION['PS'] ;
                                                echo    "------".$_SESSION['CAR'] ;
                                                echo    "------".$_SESSION['MEM'] ;
                                                echo    "------".$_SESSION['CONdesPLA'] ;
                                                echo    "------".$_SESSION['CONdesPOI'] ;
                                                echo    "------".$_SESSION['ARTI'] ;
                                                echo    "------".$_SESSION['LLC'] ;
                                                echo    "------".$_SESSION['PLC'] ;
                                                echo    "------".$_SESSION['LBM'] ;
                                                echo    "------".$_SESSION['PBM'] ;
                                                echo    "------".$_SESSION['LHM'] ;
                                                echo    "------".$_SESSION['PHM'] ;
                                                echo    "------".$_SESSION['LP'] ;
                                                echo    "------".$_SESSION['PP'] ;
                                                echo    "------".$_SESSION['LM'] ;
                                                echo    "------".$_SESSION['PM'] ;
                                                echo    "------".$_SESSION['LO'] ;
                                                echo    "------".$_SESSION['PO'] ;

                                                echo    "------".$_SESSION['boCOMM'] ;
                                                echo    "------".$_SESSION['CRE'] ;
                                                echo    "------".$_SESSION['ELO'] ;
                                                echo    "------".$_SESSION['PERSU'] ;
                                                echo    "------".$_SESSION['CHAN'] ;

                                                echo    "------".$_SESSION['boMAN'] ;
                                                echo    "------".$_SESSION['JON'] ;
                                                echo    "------".$_SESSION['CRO'] ;
                                                echo    "------".$_SESSION['PASPAS'] ;
                                                echo    "------".$_SESSION['FPI'] ;
                                                echo    "------".$_SESSION['FNE'] ;

                                                echo    "------".$_SESSION['boPERC'];
                                                echo    "------".$_SESSION['EQUILI'] ;
                                                echo    "------".$_SESSION['ECOU'] ;
                                                echo    "------".$_SESSION['SEN'] ;
                                                echo    "------".$_SESSION['CHER'] ;
                                                echo    "------".$_SESSION['VOIR'] ;
                                                echo    "------".$_SESSION['GOU'] ;
                                                echo    "------".$_SESSION['PIST'] ;

                                                echo    "------".$_SESSION['boAGI'] ;
                                                echo    "------".$_SESSION['GRI'] ;
                                                echo    "------".$_SESSION['EVI'] ;
                                                echo    "------".$_SESSION['SAU'] ;
                                                echo    "------".$_SESSION['EQUITA'] ;
                                                echo    "------".$_SESSION['NAG'] ;
                                                echo    "------".$_SESSION['CULBU'] ;

                                                echo    "------".$_SESSION['boDIS'] ;
                                                echo    "------".$_SESSION['EMB'] ;
                                                echo    "------".$_SESSION['DISS'] ;
                                                echo    "------".$_SESSION['SCA'] ;
                                                echo    "------".$_SESSION['MOUSI'] ;
                                                echo    "------".$_SESSION['COUBOU'] ; 


        ?>      
        <p>Les premières armes vous sont offertes.</p>
        
        <p>Attaque/Parade/Nom de l'arme (dégats)</p>
        <label for="weapon1"><?php echo $_SESSION['A1a']."/".$_SESSION['A1p'];?>: </label>
                <select name="weapon1">
        <?php
                
                $reponse = $bdd->query('SELECT * FROM weapon WHERE FORC <= '.$_SESSION['FOR'].' AND DEX <= '.$_SESSION['DEX']." AND id != 0");
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']."(".$donnees['damage'].")";?> </option>
        <?php
                }
        ?>
                </select></br>
        <?php
                if ($_SESSION['A2a'] != 0) {
        ?>
        <label for="weapon2"><?php echo $_SESSION['A2a']."/".$_SESSION['A2p'];?>: </label>
                <select name="weapon2">
        <?php
                
                $reponse = $bdd->query('SELECT * FROM weapon WHERE FORC <= '.$_SESSION['FOR'].' AND DEX <= '.$_SESSION['DEX']." AND id != 0");
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']."(".$donnees['damage'].")";?> </option>
        <?php
                }
        ?>
                </select> </br>
        <?php
        }
                if ($_SESSION['A3a'] != 0) {
        ?>
        <label for="weapon3"><?php echo $_SESSION['A3a']."/".$_SESSION['A3p'];?>: </label>
                <select name="weapon3">
        <?php
                
                $reponse = $bdd->query('SELECT * FROM weapon WHERE FORC <= '.$_SESSION['FOR'].' AND DEX <= '.$_SESSION['DEX']." AND id != 0");
                while ($donnees = $reponse->fetch())
                {
        ?>
                    <option value= <?php echo $donnees['id'];?> > <?php echo $donnees['name']."(".$donnees['damage'].")";?> </option>
        <?php
                }
        ?>
                </select>
        <?php
        }
        ?>
        </select><br/>
        <input type="submit" value="check les donées" name="check_les_données">
        
                
        </form>
</article>


<?php
                                        



					            
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