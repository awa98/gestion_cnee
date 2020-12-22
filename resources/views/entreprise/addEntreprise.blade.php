



<!--div class="content-wrapper " >
    <div class="content-header">
        <h3 class="pt-4 pb-1 text-center "style="color:#4169E1;" >Formulaire d'authentification pour l'entreprise</h3>
    </div>
    <div class="block-content block-content-full col-md-3  col-lg-9">
        <form method="POST" action="{{ route('store.entreprise') }}">
            @csrf

            <div class="form-group">
                <label for="name" class="col-form-label text-md-right">{{ __('Nom') }}</label>
                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }} " required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="">{{ __('Email') }}</label>

                <div class="">
                    <input id="email" type="email" placeholder="xzy@adresse.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label text-md-right">{{ __('Mot de Passe') }}</label>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-form-label">{{ __('Confirmation') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group mb-0">
                <div class="">
                    <button type="submit" class="btn text-white" style="background-color:#4169E1;  ">
                        {{ __('Enregister') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div-->
















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
    <title>Formulaire d'authentification pour l'entreprise</title>

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
                    <h2 class="title">Formulaire d'authentification pour l'entreprise </h2>
                     @if(session('success'))
 <div class="alert alert-success">
  {{ session('success') }}
  </div>
 @endif

                </div>
<form class="" action="{{ route('store.entreprise') }}" method="POST" enctype="multipart/form-data">
  @csrf

                <div class="card-body">

                  <!--form  action="{{ route('store.adhesion') }}" method="POST"-->
                    <!--form method="POST"-->


                      <div class="form-row m-b-55">
      <label for="name">Nom</label>
      <input type="text" class="input--style-5" id="name" placeholder="Nom" name="name">
      @error('name')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
                




 




<div class="form-row">
      <label for="email">Email</label>
      <input type="text" class="input--style-5" id="email" placeholder="xyz@adresse.com" name="email">
      @error('email')<p class="text-danger">{{ $message }}@enderror</p>
    </div>


                        
                        

<div class="form-row">
      <label for="password">Mot de Passe</label>
      <input type="password" class="input--style-5" id="password"  name="password" required autocomplete="new-password">
      @error('password')<p class="form-control @error('password') is-invalid @enderror">{{ $message }}@enderror</p>
    </div>



<div class="form-row">
      <label for="password-confirm">Confirmation</label>
      <input type="password" class="input--style-5" id="password-confirm"  name="password_confirmation" required autocomplete="new-password">
     
    </div>


            

  </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">S'inscrire</button>
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



