<?php 


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;

class AdhesionController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $utilisateur = Utilisateur::all();
        return view('auth/login',compact('utilisateur'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */

  public function AddEntreprise()
    {
        return view('entreprise.addEntreprise');
    }
  public function create()
  {
    
  }
 
  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
 
  
   public function store(Request $request)
    {

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'email', 'max:255', 'unique:utilisateurs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        
        ]);

         $utilisateur = Utilisateur::create($data);
        $utilisateur->password = (bcrypt($request->password));
        $utilisateur->save();
        return redirect()->route('auth/login');
      //request()->validate([
    
            //'name' => ['required'],
      //'email' => ['required', 'string', 'email', 'max:255', 'unique:utilisateurs'],
            //'password' => ['required', 'min:8'],
           // 'password-confirm'=>['required','same:password'],
       // ]);

        
        //$utilisateur->name =request('name');
        //  $utilisateur->email =request('email');
         //   $utilisateur->password=\Hash::make(request('password'));
        
        //$utilisateur->save();
       // return redirect()->route('auth/login')->with('success','Utilisateur ajouté');
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