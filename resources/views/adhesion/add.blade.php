<!DOCTYPE html>
<html lang="en">


<!--form class="col-md-12 col-lg-10 offset-1" action="{{ route('store.adhesion') }}" method="POST" enctype="multipart/form-data"-->
   

<head>



<!--div class="container">
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Formulaire d'adhesion a la convention Etat Employeur</h1>
  <form class="col-md-12 col-lg-10 offset-1" action="{{ route('store.adhesion') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulaire d'adhesion a la convention Etat Employeur</title>

    <!-- Icons font CSS-->
    <link href="asset2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="asset2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="asset2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="asset2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="asset2/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Formulaire d'adhesion a la convention Etat Employeur </h2>
                     @if(session('success'))
 <div class="alert alert-success">
  {{ session('success') }}
  </div>
 @endif

                </div>
<form class="" action="{{ route('store.adhesion') }}" method="POST" enctype="multipart/form-data">
  @csrf

                <div class="card-body">

                  <!--form  action="{{ route('store.adhesion') }}" method="POST"-->
                    <!--form method="POST"-->


                      <div class="form-row m-b-55">
      <label for="NOM">Nom/Entreprise</label>
      <input type="text" class="input--style-5" id="NOM" placeholder="Nom" name="NOM">
      @error('NOM')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
                        <!--div class="form-row m-b-55">
                            <div class="name">Nom/Entreprise</div>
                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc"></label>
                            
                        </div-->







                      <div class="form-row m-b-55">
      <label for="NOM">Adresse</label>
      <input type="text" class="input--style-5" id="adresse" placeholder="adresse" name="adresse">
      @error('adresse')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

<div class="form-row">
      <label for="EMAIL">Email</label>
      <input type="text" class="input--style-5" id="EMAIL" placeholder="xyz@adresse.com" name="EMAIL">
      @error('EMAIL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>


                        
                        <!--div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div-->


<div class="form-row m-b-55">
      <label for="TEL">Telephone</label>
      <input type="int" class="input--style-5" id="TEL" placeholder="(+221)" name="TEL">
      @error('TEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>




                      <div class="form-row m-b-55">
      <label for="NOM">NINEA</label>
      <input type="text" class="input--style-5" id="NINEA" name="NINEA">
      @error('NINEA')<p class="text-danger">{{ $message }}@enderror</p>
    </div>


                      <div class="form-row m-b-55">
      <label for="NOM">Régistre de commerce</label>
      <input type="text" class="input--style-5" id="REGIT_COMMERCE" name="REGIT_COMMERCE">
      @error('REGIT_COMMERCE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>


   <div class="from-group">
   <label for="">Fichier de demande</label>
   <input type="file" name="NOM_FICHIER_DEMANDE[]" class="input--style-5" >
  </div>

          <!--div class="form-row m-b-55">
                <div class="name">Phone</div>
                    <div class="value">
                  <div class="row row-refine">
                     
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div-->
                        <!--div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div-->
                        <!--div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div-->
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="asset2/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="asset2/vendor/select2/select2.min.js"></script>
    <script src="asset2/vendor/datepicker/moment.min.js"></script>
    <script src="asset2/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="asset2/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->



