@extends('layouts.page')

@section('container')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Album example · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
<link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Belajar Asik</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" aria-current="page" href="\cover">Beranda</a>
        <a class="nav-link active" href="\about">Tentang</a>
        <a class="nav-link" href="\kontak">Kontak</a>
      </nav>
    </div>
  </header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
 
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Tentang Website</h1>
        <p class="lead text-muted">Selalu ada peluang disetiap kondisi yang sulit. 
		Bingung mulai belajar dari mana dan apa saja? Tenang! Disini kami telah menyusun strategi agar mudah dipahami alurnya
</p>
        <p>
          
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Gambar 1" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Materi</text></svg>

            <div class="card-body" style="color: black">
              <p class="card-text">Menyediakan materi-materi mengenai mata pelajatan Teknologi Informasi dan Komunikasi</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                </div>
              
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm" style="color: black">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Gambar 2" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Kuis</text></svg>

            <div class="card-body" style="color: black">
              <p class="card-text">Soal-soal untuk mengetahui pemahaman mengenai mata pelajaran Teknologi Informasi dan Komunikasi</p>
              <div class="d-flex justify-content-between align-items-center">
               
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Gambar 3" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Forum</text></svg>

            <div class="card-body" style="color: black">
              <p class="card-text">Wadah untuk berdiskusi sekitar mata pelajaran Teknologi Informasi dan Komunikasi</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>

        
       
               
              
</main>

<footer class="text-muted py-5">



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

@endsection