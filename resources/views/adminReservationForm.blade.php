@extends("admin")

@section("container")


<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reservation</h2>
        <p>Modification de reservation</p>
      </div>

      <form action="{{ route('updateReservation', [ 'Reservations'=> $Reservations ]) }}" method="post" role="form" class="formp" data-aos="fade-up" data-aos-delay="100">
        
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" placeholder="Nom" name="name" class="form-control" id="name" value="{{$Client->name}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" placeholder="email" class="form-control" name="email" id="email" value="{{$Client->email}}" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" placeholder="phone number" class="form-control" name="phone" id="phone" value="{{$Client->phone}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="date" name="date" placeholder="Date" class="form-control" id="date" value="{{$Reservations->date}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" placeholder="Heure" class="form-control" name="time" id="time" value="{{$Reservations->time}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control" name="people" id="people" value="{{$Reservations->people}}" data-rule="minlen:1" data-msg="S'il vous-plait, entrer au minimum 01 personne">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" value=""> {{ $Reservations->message }}</textarea>
          <div class="validate"></div>
        </div>

        {{-- <div class="mb-3">
          <div class="loading">Chargement...</div>
          <div class="error-message"> Une erreur est survenu lors de votre reservation. veuillez reéssayer</div>
          <div class="sent-message">Votre demande de reservation a été envoyé. Nous vous rappelerons ou enverons un message pour confirmer la reservation. Merci!</div>
        --}}
      </div> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="text-center"><button type="submit">Mettre à Jour</button></div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->
@endsection