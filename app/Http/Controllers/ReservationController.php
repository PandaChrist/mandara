<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\response;
use App\Client;
use App\Clientr;
use App\Tables;
use App\Reservations;
use App\validReservation;
use Illuminate\Routing\Redirector;

class ReservationController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        // return view('index');

        $Reservation = Reservations::all();

        return $Reservation;
    }

    public function admin(){
        return view('adminContainer');
    }

    public function adminReservationForm($Reservations){
        // on instanci l'objet Reservation
        $Reservations = Reservations::find($Reservations);

        $idClient= $Reservations->idClient;
        
        // on instanci l'objet client

        // ce code doit etre optimiser car a chaque fois qu'une reservation est creer, un client aussi
        // or un client peut faire plusieur reservation et ne doit donc pas forcement etre enregistrer
        // plusieurs fois en tant que client
        $Client = Clientr::find($idClient);

        return view('adminReservationForm')->with(['Reservations'=>$Reservations, 'Client'=>$Client]);
    }

    public function addReservation(Request $request){
           
        $parametre = $request->except(['_token']);

        $client= new Clientr();
        // var_dump($parametre);die;

        $client->name= $parametre['name'];
        $client->email= $parametre['email'];
        $client->phone= $parametre['phone'];

        $client->save();

        $reservation = new Reservations();

        $id=$client->id;

        $reservation->idClient= $id;
        $reservation->date= $parametre['date'];
        $reservation->time= $parametre['time'];
        $reservation->people= $parametre['people'];
        $reservation->message= $parametre['message'];

        $reservation->save();

        return redirect()->route('index')->with('success','La reservation à été effectué');
    }

    public function listReservation(){
         $reservations = Reservations::all();

         return view('adminContainer')->with('reservations', $reservations);
    }

    public function deleteReservation(Reservations $Reservations){
        $Reservations->delete(); 
        return view('index');
    }

    public function updateReservation(Request $request, Reservations $Reservations){
        // $clientr = Clientr::find(11);
        if($Reservations->update($request->all()  )){
            echo("Update reservation effectué");
        }else{
            echo("reservation echoué");die;
        }

        // on recupere l'id du client lié a la reservation 

        $idClient=$Reservations->idClient;
        // on instanci un objet Clientr grace a cet id

        $clientr = Clientr::find($idClient);

        if($clientr->update($request->all() )){
            echo("Update Client effectué");die;
        }else{
            echo("Updateb Client echoué");die;
        }
    }

    public function  adminValidRerservation($Reservations){

        $validReservation = new validReservation();
        $validReservation->idReservation= $Reservations;

        $validReservation->save();

    }

    public function store(Request $request){
        
        $parametre = $request->except(['_token']);
        
        $client= new Clientr();
        // var_dump($parametre);die;

        $client->name= $parametre['name'];
        $client->email= $parametre['email'];
        $client->phone= $parametre['phone'];

        $client->save();

        $reservation = new Reservations();

        $id=$client->id;

        $reservation->idClient= $id;
        $reservation->date= $parametre['date'];
        $reservation->time= $parametre['time'];
        $reservation->people= $parametre['people'];
        $reservation->message= $parametre['message'];

        $reservation->save();

        return 'Ajout effectué';
    }

    public function update(Reservations $Reservation, Request $request){
       
        if($Reservation->update($request->all()  )){
            // return "Update reservation effectué";
        }else{
            return "reservation echoué 1";
        }

        // on recupere l'id du client lié a la reservation 

        $idClient=$Reservation->idClient;
        // on instanci un objet Clientr grace a cet id

        $clientr = Clientr::find($idClient);

        if($clientr->update($request->all() )){
            return "Update Client effectué";
        }else{
            return "Updateb Client echoué";
        }
    }

    public function destroy(Reservations $Reservation){
        if($Reservation->delete()){
            return response()->json(['succes'=>'Suppression effecué'],200);
        }else{
            return response()->json(['error'=>'Suppression Echoué'],400);
        }
    
    }

    public function show(Reservations $Reservation){
        $Reservation = Reservations::find($Reservation);

        if ($Reservation) {
            return $Reservation;
        }else{
            return response()->json(['error'=>'Suppression Echoué'],400);
        }
        
    }

    public function Adminservice(){

        $reservations = Reservations::all();

        $table= Tables::All();

        return view('admin/adminPage', [
          'table'=> $table,
          'reservations'=> $reservations
        ]);
    }
}
