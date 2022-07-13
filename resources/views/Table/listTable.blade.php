@extends('admin')

@section('container')
    <div class="container mt-5">
        <h2 class="mt-5">Liste des Tables</h2>
            
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Designation</th>
                <th scope="col">Couvert(s)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $item)

                    <tr>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->couvert }}</td>
                        <div class="btn">
                            <td><a class="btn-book " href="{{ route('updateForm', ['tables'=> $item->id ]) }}">MODIFIER</a></td>
                            <td><a class="btn-menu animated fadeInUp scrollto" href="{{ route('DestroyTable', [ 'tables'=> $item->id ]) }}">SUPPRIMER</a></td>
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
        <a href="{{ route('FormTable') }}" class="btn-book">Creer une table</a>
    </div>

@endsection