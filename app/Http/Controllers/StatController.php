<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;

class StatController extends Controller
{
    // nombre de reservation sur une periode
    public function NombreReservation($periode){

        if($periode==='semaine'){
            //creer une requete qui recupere les reservations sur la semaine donnee
            
        }elseif($periode==='mois'){
            //creer une requete qui recupere les reservations sur le mois donnee

        }elseif($periode==='annee'){
            //creer une requete qui recupere les reservations sur le mois donnee
        }else{
            // on renvois par defaut les reservations du mois en cours
        }
        
    }

    // nombre de client sur une periode
    public function NombreClient($periode){

        // ATTENTION I NE S'AGIT PAS ICI DU NOMBRE DE LIGNE DANS LA TABLE CLIENTRES
        // MAIS DE LA SOMME DES LIGNES DE L'ATTRIBUT PEOPLE DANS LA TABLE RESERVATIONS
        if($periode==='semaine'){
            //creer une requete qui recupere le nombre de client sur la semaine donnee
            
        }elseif($periode==='mois'){
            //creer une requete qui recupere le nombre de client sur le mois donnee

        }elseif($periode==='annee'){
            //creer une requete qui recupere le nombre de client sur le mois donnee
        }else{
            // on renvois par defaut le nombre de client du mois en cours
        }

    }

    // nombre de client regulier, plus de deux reservation sur une periode
    public function ClientRegulier($periode){
       
        if($periode==='semaine'){
            //creer une requete qui recupere le nombre de client regulier sur la semaine donnee
            
        }elseif($periode==='mois'){
            //creer une requete qui recupere le nombre de client regulier sur le mois donnee

        }elseif($periode==='annee'){
            //creer une requete qui recupere le nombre de client regulier sur le mois donnee
        }else{
            // on renvois par defaut le nombre de client regulier du mois en cours
        }
    }
    
    // // nombre de couvert reserver sur une periode
    // public function NombreCouvert($periode){
    // }
    
    // liste de tous les mails
    public function ListEmail(){
        //  on recupere tout ce qui se trouve dans l'attribut email de client en faisant attention
        //  aux doublons

    }

    //Creeer un groupe de mail ie une liste de mail detache des autres mails
    public function GroupMail($tableauDeNom){
        // il va falloir creer un nouveau modele liste de diffusion et le lier via une relation
        // *...* a la table client, ce qui vas creer une table 'DifussionClient' 

    }

    //envoyer un mail a un groupe de mail
    public function EnvoyerMail($tableauDeNom){
        // on prend en parametre un tableau de mail et on envois de mail

    }
}
