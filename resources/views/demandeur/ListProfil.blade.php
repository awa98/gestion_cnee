@extends('layouts.backend')
@section('content')

<!-- Page Content -->
<div class="content-wrapper">
 <div class="block">
  @if(session('success'))
  <div class="alert alert-success">
   {{ session('success') }}
  </div>
  @endif
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste des profils des demandeurs</h1>
  <div class="block-content">
   <div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter">
     <thead style="color:rgb(246, 120, 58);">
      <tr>
       <th class="">Nom</th>
       <th class="">Prénom</th>
        <th class="">Nom du profil</th>
       <th class="">Niveau</th>
       <th class="">Curriculum Vitea</th>
       
      </tr>
     </thead>

     <tbody>
      @foreach($profil as $profils)
      <tr>
        <td>{{ $profils->demandeur->NOM  ??''}}</td>
        <td>{{ $profils->demandeur->PRENOM  ??'' }}</td> 
       <td>{{ $profils->demandeur_profil->NOM_PROFIL ??''}}</td>
        <td>{{ $profils->demandeur_profil->NIVEAU ??''}}</td>
         <td>{{ $profils->NOMFILE }}</td>
      </tr>
      @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </div>
</div>


@endsection