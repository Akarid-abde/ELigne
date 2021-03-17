@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Dashboard') }} Client</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
     <form action=" {{ url('/CN/store') }} " method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Bénifice</label>
    <input type="text" name="bénificier" class="form-control" placeholder="Nom et Prenom">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Form Juridique</label>
    <select class="form-control" name="FormJuridique" id="exampleFormControlSelect1">
      <option value="SARL" >SARL</option>
      <option value="SAS" >SAS</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date Experation</label>
    <input type="date" name="dateExpération" class="form-control"  placeholder="date expération">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Ville</label>
    <input type="text" name="ville" class="form-control" placeholder="prenom">
  </div>
 <!--  <div class="form-group">
    <label for="exampleFormControlTextarea1">Adresse</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div> -->
  <div class="form-group">
    <button class="btn btn-primary" style="border-radius:15px;">
    Valider
    </button>
  </div>
</form>
</div>
@endsection
