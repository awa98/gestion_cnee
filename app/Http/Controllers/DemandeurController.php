<?php

namespace App\Http\Controllers; 
use App\Models\Demandeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MercurySeries\Flashy\Flashy;


class DemandeurController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    {
        return view('admin/home');
    }
  }
    public function addDemandeur()
    {
        return view('demandeur.addDemandeur');
    
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
  public function storeDemande(Request $request)
  {
    $data  = $request->validate([
            

          'NOM' => ['required'],
           'PRENOM' => ['required'],
           'SEXE'=>['required'],
          'DATE' => ['required'],
          'region' => ['required'],
          'ADRESSE' => ['required'],
          'TEL' => ['required'],
           'EMAIL' => ['required', 'email', 'unique:demandeurs'],

            
        ]);

        $demandeur =   Demandeur::create($data);
        $demandeur->save();
       Flashy::message('demandeur ajouté avec succés');
        return redirect()->route('Liste.demandeur'); 
  }
public function ListDemandeur()
    {
        $demandeur = Demandeur::orderBy('id','DESC')
        ->paginate(4);
        return view('demandeur.liste',compact('demandeur'));
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