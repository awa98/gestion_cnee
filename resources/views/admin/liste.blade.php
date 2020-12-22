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
      <div class="block-content">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-vcenter">
            <thead style="color:rgb(246, 120, 58);">
              <tr>
                <th class="">Nom</th>
                 <th class="">Prénom</th>

                <th class="">Niveau</th>

                
              </tr>
            </thead>

            <tbody>
              @foreach($demandeur as $demandeurs)
              <tr>
                <td>{{ $demandeurs->NOM }}</td>

                <td>{{ $demandeurs->PRENOM}}</td>

                <td>{{  $demandeurs->NIVEAU }}</td>

                <!--td>
                  <a href="{{ route('edit.programme',$programmes->id) }}"><i class="fa fa-edit" style="color:rgb(246, 120, 58);"></i></a>
                  <a href="{{ route('delete.programme',$programmes->id) }}" onclick="return confirm('Vouler vous supprimez ce programme')"><i class="fa fa-trash-restore-alt" style="color:red;"></i></a>
                </td>
                <td>
                   <a href="{{ route('referentielProgramme',$programmes->id) }}" class="btn btn-dark">Ajouter Référentiel</i></a>
                </td-->
              </tr>
              @endforeach
            </tbody>
            {{ $demandeur->links() }}
          </table>
        </div>
      </div>
    </div>
  </div>
  {{ $demandeur->links() }}
  <!-- END Full Table -->
  @endsection