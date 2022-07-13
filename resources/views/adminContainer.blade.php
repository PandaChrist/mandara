@extends('admin')

@section('container')
    <div class="container mt-5">
        <h2 class="mt-5">Liste des Reservations</h2>
            
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Nombre de personne(s)</th>
                <th scope="col">Messsage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $item)

                    <tr>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->time }}</td>
                        <td>{{ $item->people }}</td>
                        <td>{{ $item->message }}</td>
                        <div class="btns">
                            <td><a class="btn-menu animated fadeInUp scrollto" href="{{ route('deleteReservation', [ 'Reservations'=> $item->id ]) }}">SUPPRIMER</a></td>
                            <td><a class="btn-book " href="{{ route('adminReservationForm', [ 'Reservations'=> $item->id ]) }}">MODIFIER</a></td>
                            <td><a class="btn-book" href="{{ route('adminValidRerservation', [ 'Reservations'=> $item->id ]) }}">VALIDER</a></td>
                        </div>
                    <tr>




                    {{-- <p>Reservation pour {{ $item->date }} à {{ $item->time }} pour {{ $item->people }} personne(s)</p>
                    <p>Commentaire de la Reservation: {{ $item->message }} </p>
                    <button class="btn btn-danger"> <a href="{{ route('deleteReservation', [ 'Reservations'=> $item->id ]) }}">SUPPRIMER</a></button>      
                    <button class="btn btn-secondary"><a href="{{ route('adminReservationForm', [ 'Reservations'=> $item->id ]) }}">MODIFIER</a></button></button>  
                    <button class="btn btn-primary"><a href="{{ route('adminValidRerservation', [ 'Reservations'=> $item->id ]) }}">VALIDER</a></button></button> --}}
                
                @endforeach

            </tbody>
        </table>
    </div>

@endsection