@extends('layouts.backend')

@section('content')
<div class="content-wrapper">

<h1 class="text-center" style="color:rgb(246, 120, 58)" ;>Ajouter un profil pour le demandeur</h1>

<div class="col-md-12 col-lg-10 offset-1 ">
 <form action=" {{ route('store.addProfil') }}" method="post" enctype="multipart/form-data" class="dropzone">
  @csrf

  <div class="form-group">
      <label for="NOM">Nom du profil</label>
      <input type="text" class="form-control" id="NOM" name="NOM_PROFIL">
      @error('NOM_PROFIL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    
 <div class="form-group">
      <label for="NIVEAU">Niveau d'etude</label>
       <input type="text" class="form-control" id="NIVEAU" name="NIVEAU">
      @error('NIVEAU')<p class="text-danger">{{ $message }}@enderror</p>
    </div>



  <div class="from-group">
   <label for="">Curriculum Vitea</label>
   <input type="file" name="NOMFILE[]" class="form-control" multiple>
   @error('NOMFILE[]')<p class="text-danger">{{ $message }}@enderror</p>
  </div>
  



  

  <div class="from-group mt-4">
   <button type="submit" class="btn text-white" style="background-color:rgb(246, 120, 58)">Enregistrer</button>
  </div>

 </form>
</div>
</div>

@endsection