@extends("admin")

@section("container")


<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Tables</h2>
        <p>{{ isset($Table)?'Modification Tables' : 'Création de Tables'}} </p>
      </div>

      <form action="{{ isset($Table)? route('UpdateTable', ['tables'=> $Table->id ]) : route('CreateTable') }}" method="post" role="form" class="formp" data-aos="fade-up" data-aos-delay="100">
        
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" placeholder="Nom" name="nom" class="form-control" id="name" value="{{ isset($Table)?$Table->nom : "" }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" placeholder=" Nombre de couvert" class="form-control" name="couvert" id="time" value="{{ isset($Table)?$Table->couvert : "" }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
        </div> 

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class=""><button type="submit">{{ isset($Table)?'Mettre à Jour' : 'Création de Tables'}} </button></div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->
@endsection