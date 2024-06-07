<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>AppiDen-Santé</title>
  <link rel="icon" href="../assets/img/logo.png">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informations sur les maladies') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px lg:px">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if (session('status'))
            <div class="alert alert-success">
            {{session('status')}}
              </div>
            @endif
<body>
  <div class="back-to-top"></div>
  <div class="page-section pt-5">
    <div class="container">
      <div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
          <h2 class="titre1">Listes des collectes de donnees des differents maladies</h2>
           <table class="tableau">
         <thead>
                        <tr class="ent">
                            <th>ID</th>
                            <th>AGE</th>
                            <th>SEXE</th>
                            <th>PAYS</th>
                            <th>VILLE</th>
                            <th>SYMPTOMES</th>
                            <th>Maladies cardiovasculaires</th>
                            <th>Maladies respiratoires</th>
                            <th>ACTIONS </th>

                        </tr>
                    </thead>
          <tbody>
          @foreach($collectes as $collecte )
                        <tr class="don">
                            <td>{{ $collecte->id}}</td>
                            <td>{{ $collecte->age}}</td>
                            <td>{{ $collecte->sexe}}</td>
                            <td>{{ $collecte->pays}}</td>
                            <td>{{ $collecte->ville}}</td>
                            <td>{{ $collecte->symp}}</td>
                            <td>>{{ $collecte->case1}} >{{$collecte->case2}} >{{$collecte->case3}} >{{$collecte->case4}} >{{$collecte->case5}}</td>
                            <td>>{{ $collecte->case6}} >{{$collecte->case7}} >{{$collecte->case8}} >{{$collecte->case9}} >{{$collecte->case10}}</td>
                            <td>
                            <a href="#" class="btne">Modifier</a>
                            <a href="#" class="btne">Delete</a>
                            </td>                 
                        </tr>
                          @endforeach
                    </tbody>
</table>
            <div class="post-meta">
            </div>
            <h2 class="det">Informations sur la maladie seclectionner</h2>
            <div class="post-content">
              <p>bref resume sur la maladie selectionner pour bien renseigner le patient pour eviter toute confusion
              sur les differents criteres caracterisant ses symptomes</p>
            </div>
          </article> <!-- .blog-details -->
          <div class="comment-form-wrap pt-5">

            <form action="#" class="">
              <div class="form-row form-group">
              </div>  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="6" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Commentaire" class="btn btn-primary">
              </div>
            </form>
            
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="/search_collecte" method="get" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" name="search_collecte" placeholder="entrer la recherche" value="{{ isset($search_collecte) ? $search_collecte :''}}">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
           <div class="sidebar-block">
              <h3 class="sidebar-title">donnees recement publies</h3>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_1.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_2.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_3.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div> 
    </div>
  </div>
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
          </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>