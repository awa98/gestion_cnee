
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
         <div class="content-wrapper">

        <div class="table-responsive">

      <table class="table table-bordered table-striped table-vcenter">
            <thead style="color:rgb(246, 120, 58);">
          
            <tr>
            
              <th >Nom/Entreprise</th>
           
              <th>ADRESSE</th>
              <th>EMAIL</th>
              <th>Telephone</th>
              	<th>NINEA</th>
              	<th>REGISTRE_COMMERCE</th>
              <th>FICHIER DEMANDE</th>
               <th>ACTIONS</th>
              
      
            </tr>
          </thead>
        
          <tbody>
          	  @foreach($entreprise  as $entreprises)
              <tr>
               <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->NOM }}</a>
                            </td>
                            <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->ADRESSE }}</a>
                            </td>

<td class="font-w600 font-size-sm" >
    <a href="" style="color: black;">{{ $entreprises->EMAIL }}</a>
    </td>
    <td class="font-w600 font-size-sm" >
           <a href="" style="color: black;">{{ $entreprises->TEL }}</a>
        </td>
        <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->NINEA }}</a>
                            </td>

<td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->REGIT_COMMERCE }}</a>
                            </td>
                            <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->NOM_FICHIER_DEMANDE }}</a>
                            </td>

<td class="text-center">
                                <div class="">
                                   <a href=" {{ route('validerProgramme',$entreprises->id) }}" class="btn btn-success">Valider</a>
                                     <a href=" {{ route('rejeterProgramme',$entreprises->id) }}" class="btn btn-danger mt-1">Rejeter</a>
                                </div>
                            </td>









                          </tr>







            <!--tr>
              <td>{{ $entreprises->NOM }} </td>
               <td>{{ $entreprises->ADRESSE }} </td>
                <td>{{ $entreprises->EMAIL }} </td>
                 <td>{{ $entreprises->TEL }} </td>
                  <td>{{ $entreprises->NINEA }} </td>
                   <td>{{ $entreprises->REGIT_COMMERCE }} </td>
                 <td>{{ $entreprises->NOM_FICHIER_DEMANDE }} </td>
               
            </tr-->
              @endforeach
          </tbodys>
        
        </table>
      </div>
        {{ $entreprise->links() }}
      </div>
    </div>
  </div>
  <!-- END Full Table -->
  @endsection