<?php 
namespace App\Http\Controllers; 
use App\Models\Demandeur;
use App\Models\Profil;
use App\Models\Demandeur_profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MercurySeries\Flashy\Flashy;
class DemandeurProfilController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }
  public function addProfil()
  {
     return view('demandeur.addProfil');
    
  }



  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function storeProfil(Request $request)
  {
       

    $data = $request->validate([
           
            'NOMFILE' => ['required'],

         ]);
        if ($request->hasFile('NOMFILE')) {
            $imageNameArr = [];
            foreach ($request->NOMFILE as $file) {
                // you can also use the original name
                $fileName = time() . '-' . $file->getClientOriginalName();
                $onlyName =  $name = explode('.', $fileName)[0];
                $imageNameArr[] = $fileName;
                // Upload file to public path in images directory
                $file->move(public_path('profil'), $fileName);
                // Database operation
                $profil =  new profil();
                $profil->FILE = $fileName;
                $profil->NOMFILE = $onlyName;
               
                $profil->save();
                 $idR[] = $profil->id;
          
                    }
                  }
         $longueur = count($idR);
        for($i = 0 ; $i < $longueur ;$i++ )
        {
            $demandeur_profil = new Demandeur_profil();
            $demandeur_profil->demandeur_id= $idR[$i];
            $demandeur_profil->profil_id = $idR[$i];
            $demandeur_profil->NOM_PROFIL= request('NOM_PROFIL');
            $demandeur_profil->NIVEAU= request('NIVEAU');

            $demandeur_profil->save();

        }
           
 
        Flashy::message('success', 'profil du demandeur ajouté avec success');
        return redirect()->route('ListProfil.demandeur');



  }


public function listProfil()
    {
        $profil = Profil::orderBy('id','DESC')
        ->paginate(9);
        return view('demandeur.listProfil',compact('profil'));
    }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>