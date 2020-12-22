<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ENTREPRISE;
use App\Mail\WelcomeUserMail;
use Illuminate\Support\Facades\Mail;

use MercurySeries\Flashy\Flashy;

class EntrepriseController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adhesion.add');
    }

    public function addAdhesion()
    {


        return view('adhesion.add');
        //$entreprise = Entreprise::all();
       
        
        //return view('adhesion.add', compact('entreprise'));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {


       // ENTREPRISE:: create(request()->all());
          $entreprise = new ENTREPRISE();
          $entreprise->NOM = request('NOM');
           $entreprise->TEL = request('TEL');
            $entreprise->ADRESSE = request('adresse');
             $entreprise->EMAIL = request('EMAIL');
              $entreprise->NINEA = request('NINEA');
               $entreprise->REGIT_COMMERCE = request('REGIT_COMMERCE');

$entreprise->NOM_FICHIER_DEMANDE = request('NOM_FICHIER_DEMANDE');

if ($request->hasFile('NOM_FICHIER_DEMANDE')) {
            $imageNameArr = [];
           foreach ($request->NOM_FICHIER_DEMANDE as $file) {
         
            $fileName = time() . '-' . $file->getClientOriginalName();
            $onlyName =  $name = explode('.', $fileName)[0];
              $imageNameArr[] = $fileName;
               
             $file->move(public_path('entreprise'), $fileName);
              
                $entreprise->File = $fileName;
               $entreprise->NOM_FICHIER_DEMANDE = $onlyName;
      
                $entreprise->save();
   
return redirect()->route('add.adhesion');
    //return 'votre entrprise a bien ete enregistre';
}

}
}
public function getAdhesion()
    {
        
        $entreprise = ENTREPRISE::orderBy('id','DESC')
       ->paginate(5);
        // return view('admin.getadhesion',compact('entreprise'));
        return view('admin.GetAdhesion',compact('entreprise'));
    }



public function validerProgramme($id)
    {

        $valider = "validé";
        $entreprises=ENTREPRISE::find($id);
        $validDemande=$entreprises;
        //$validDemande->etat = $valider;
        //$validDemande->update();
        Flashy::message('email envoye!!!', 'http://127.0.0.1:8000/admin.GetAdhseion');

        MAIL::to($entreprises->EMAIL)->send(new WelcomeUserMail());
          return redirect()->route('GetAdhesion');
          
         


        // $valider = "validé";
        //$validDemande = ENTREPRISE::find($id);
       
        //$validDemande->update();
        //Flashy::message('email envoye!!!', 'http://127.0.0.1:8000/admin.GetAdhseion');

        //MAIL::to($validDemande->$entreprises->EMAIL)->send(new WelcomeUserMail());
          //return redirect()->route('GetAdhesion');
    }

    public function rejeterProgramme($id)
    {
        $rejectDemande = "rejeté";
        $validDemande = ENTREPRISE::find($id);
        //$validDemande->etat = $rejectDemande;
        $validDemande->update();
        Flashy::message('Demande rejeté!!!', 'http://127.0.0.1:8000/admin.GetAdhseion');
        return redirect()->route('GetAdhesion');
    }































}

