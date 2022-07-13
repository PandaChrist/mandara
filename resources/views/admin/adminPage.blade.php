@extends("admin")

@section("container")

    {{-- @extends("Table/listTable") --}}
    {{-- @extends("adminContainer") --}}

    {{-- @extends("adminReservationForm") --}}

    {{-- @extends("Table/TableCreationForm")  --}}

    <div class="row">
        <div class="col-lg-6"><a href="{{ route('admin') }}">Gestion des Reservations</a> </div>
        <div class="col-lg-6"><a href="{{ route('ListTable') }}">Gestion des Tables</a></div>
    </div>

@endsection
