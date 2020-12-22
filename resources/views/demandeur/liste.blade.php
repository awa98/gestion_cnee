  @extends('layouts.backend')
  @section('content')

  <!-- Page Content -->
  <div class="content">
    <!-- Full Table -->
    <div class="block">
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste des demandeurs</h1>
      <div class="content-wrapper">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-vcenter">
            <thead style="color:rgb(246, 120, 58);">
              <tr>
                <th class="">Nom</th>
                 <th class="">Prénom</th>
                  <th class="">Sexe</th>
                <th class="">Date de Naissance</th>
                <th class="">Région de Naissance</th>
                <th class="">Adresse</th>
                <th class="">Téléphone</th>
              <th class="">Email</th>
              <th>Profils</th>
              </tr>
            </thead>

            <tbody>
              @foreach($demandeur as $demandeurs)
              <tr>
                <td>{{ $demandeurs->NOM }}</td>

                <td>{{ $demandeurs->PRENOM}}</td>
                <td>{{ $demandeurs->SEXE}}</td>

                <td>{{  $demandeurs->DATE }}</td>
                <td>{{  $demandeurs->region }}</td>
                <td>{{  $demandeurs->ADRESSE }}</td>
                <td>{{  $demandeurs->TEL }}</td>
                <td>{{  $demandeurs->EMAIL }}</td>
                <td>
                 <a href="{{ route('add.profil',$demandeurs->id) }}" class="btn btn-dark">Ajouter Profils</i></a>
               </td>

                
              </tr>
              @endforeach
            </tbody>
          
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <!-- END Full Table -->
  @endsection