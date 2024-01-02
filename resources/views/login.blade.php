<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <style>
        .btn-primary{
            background-color: #404040 !important; 
            border: none; 
            border-radius: 20px; 
            width: 130px;
            letter-spacing: 2px;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Efek transisi */
            transform-origin: center;
        }

        .btn-primary:hover {
            background-color: #6e6e6e !important;
            transform: scale(1.1);
        }
    </style>
    
    <body class="bg">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="mt-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 mt-5">
                                <div class="card shadow-lg border-5 rounded-lg mt-5">
                                    <div class="card-header">
                                        <img src="{{ asset('image/toko.svg') }}" alt="images" style="max-width: 60px; display: block; margin: 0 auto;" />
                                        <h4 class="text-center font-weight-light my-1">TOKO INDAH KAYLA</h4>
                                    </div>
                                    <div class="card-body mt-4">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-floating mb-4">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="email" name="email" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-4">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <div class="col-md-12 d-flex justify-content-center mx-auto offset-md-12 mt-2">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('LOGIN') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
