<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>AppiDen-Sante</title>
  <link rel="icon" href="../assets/img/logo.png">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Collecte de donnees') }}
        </h2>
    </x-slot>
      <h1 class="wowe ">Informations Personnelles</h1>
           @if (session('status'))
            <div class="alert alert-success">
            {{session('status')}}
              </div>
            @endif
          <form class="main-form"  method="POST" action="/save" id="myform">
          @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="number" class="form-controle" name="age" placeholder="votre age" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-controle" name="sexe" placeholder="votre sexe" required>
          </div>
           <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-controle" name="pays" placeholder="votre pays" required>
          </div>
           <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-controle" name="ville" placeholder="votre ville" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-controle" name="symp" placeholder="autre symptome" required>
          </div>
        </div>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies cardiovasculaires</p><br>
            <label class="labe">douleurs thoraciques<input type="checkbox" name="case1" value="douleurs thoraciques"></label>
            <label class="labe">essoufflement<input type="checkbox" name="case2" value="essoufflement"></label>
            <label class="labe">palpitations<input type="checkbox" name="case3" value="palpitations"></label>
            <label class="labe">jambes lourdes<input type="checkbox" name="case4" value="jambes lourdes"></label>
            <label class="labe">fatigue<input type="checkbox" name="case5" value="fatigue"></label>
            <select class="sele" name="intensite1"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie du coeur</p>
              <span class="text-sm text-grey">maladie causer par hypertension artérielle</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies respiratoires</p><br>
            <label class="labe">toux <input type="checkbox" name="case6" value="toux"></label>
            <label class="labe">essoufflement<input type="checkbox" name="case7" value="essoufflement"></label>
            <label class="labe">mal respiratoires<input type="checkbox" name="case8" value="mal respiratoires"></label>
            <label class="labe">douleurs thoraciques<input type="checkbox" name="case9" value="douleurs thoraciques"></label>
            <label class="labe">douleur nasale<input type="checkbox" name="case10" value="douleur nasale"></label>
            <select class="sele" name="intensite2"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie du poumon</p>
              <span class="text-sm text-grey">Maladie causer par la pollution et infection bacterienne</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies digestives</p><br>
            <label class="labe">nausées<input type="checkbox" name="case11" value="nausées"></label>
            <label class="labe">diarrhée<input type="checkbox" name="case12" value="diarrhée"></label>
            <label class="labe">constipation<input type="checkbox" name="case13" value="constipation"></label>
            <label class="labe">vomissements<input type="checkbox" name="case14" value="vomissements"></label>
            <label class="labe">douleurs du ventre<input type="checkbox" name="case15" value="douleurs du ventre"></label>
            <select class="sele" name="intensite3"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie d'estomac</p>
              <span class="text-sm text-grey">maladie causer par infections bactériennes </span>
            </div>
          </div>
          </div>
          <div class="item">
           <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies métaboliques</p><br>
            <label class="labe">fatigue<input type="checkbox" name="case16" value="fatigue"></label>
            <label class="labe">soif excessive<input type="checkbox" name="case17" value="soif excessive"></label>
            <label class="labe">maux de tête<input type="checkbox" name="case18" value="maux de tête"></label>
            <label class="labe">urination fréquente<input type="checkbox" name="case19" value="urination fréquente"></label>
            <label class="labe">perte de poids<input type="checkbox" name="case20" value="perte de poids"></label>
            <select class="sele" name="intensite4"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie corps</p>
              <span class="text-sm text-grey">maladie causer par régime alimentaire</span>
            </div>
          </div>
          </div>
           <div class="item">
           <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies infectieuses</p><br>
            <label class="labe">fièvre<input type="checkbox" name="case21" value="fièvre"></label>
            <label class="labe">fatigue<input type="checkbox" name="case22" value="fatigue"></label>
            <label class="labe">maux de tête<input type="checkbox" name="case23" value="maux de tête"></label>
            <label class="labe">éruptions cutanées<input type="checkbox" name="case24" value="éruptions cutanées"></label>
            <label class="labe">douleurs musculaires<input type="checkbox" name="case25" value="douleurs musculaires"></label>
            <select class="sele" name="intensite5"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie de la peau</p>
              <span class="text-sm text-grey">maladie causer par virus,aliments contaminés</span>
            </div>
          </div>
          </div>              
          <div class="item">
           <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies neurologiques</p><br>
            <label class="labe">vertiges<input type="checkbox" name="case26" value="vertiges"></label>
            <label class="labe">maux de tête<input type="checkbox" name="case27" value="maux de tête"></label>
            <label class="labe">paralysie<input type="checkbox" name="case28" value="paralysie"></label>
            <label class="labe">troubles de mémoire<input type="checkbox" name="case29" value="troubles de mémoire"></label>
            <label class="labe">fatigue<input type="checkbox" name="case30" value="fatigue"></label>
            <select class="sele" name="intensite6"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie du cerveau</p>
              <span class="text-sm text-grey">maladie causer par tumeurs infections</span>
            </div>
          </div>  
          </div>     
          <div class="item">
           <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies rhumatismales</p><br>
            <label class="labe">gonflement<input type="checkbox" name="case31" value="gonflement"></label>
            <label class="labe">fatigue<input type="checkbox" name="case32" value="fatigue"></label>
            <label class="labe">raideur<input type="checkbox" name="case33" value="raideur"></label>
            <label class="labe">douleurs articulaires<input type="checkbox" name="case34" value="douleurs articulaires"></label>
            <label class="labe">limitation de corps<input type="checkbox" name="case35" value="limitation de corps"></label>
            <select class="sele" name="intensite7"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie du corps faibles</p>
              <span class="text-sm text-grey">maladie causer par </span>
            </div>
          </div>
               </div>     
          <div class="item">
           <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies dermatologiques</p><br>
            <label class="labe">lésions<input type="checkbox" name="case36" value="lésions"></label>
            <label class="labe">kératose<input type="checkbox" name="case37" value="kératose"></label>
            <label class="labe">démangeaisons<input type="checkbox" name="case38" value="démangeaisons"></label>
            <label class="labe">éruptions cutanées<input type="checkbox" name="case39" value="éruptions cutanées"></label>
            <label class="labe">variation de douleur<input type="checkbox" name="case40" value="changements douleur"></label>
            <select class="sele" name="intensite8"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie affectant le corps</p>
              <span class="text-sm text-grey">maladie causer par allergies</span>
            </div>
          </div>
               </div>     
          <div class="item">
           <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies urologiques</p><br>
            <label class="labe">hématurie<input type="checkbox" name="case41" value="hématurie"></label>
            <label class="labe">sommeil<input type="checkbox" name="case42" value="sommeil"></label>
            <label class="labe">incontinence<input type="checkbox" name="case43" value="incontinence"></label>
            <label class="labe">douleurs urinaires<input type="checkbox" name="case44" value="douleurs urinaires"></label>
            <label class="labe">urgence mictionnelle<input type="checkbox" name="case45" value="urgence mictionnelle"></label>
            <select class="sele" name="intensite9"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie urologiques</p>
              <span class="text-sm text-grey">maladie causer par infections, calculs rénaux,malformations</span>
            </div>
          </div>
               </div>     
          <div class="item">
           <div class="card-doctor">
            <div class="header">
            <p class="cat">Maladies oncologiques</p><br>
            <label class="labe">fatigue<input type="checkbox" name="case46" value="fatigue"></label>
            <label class="labe">douleurs<input type="checkbox" name="case47" value="douleurs"></label>
            <label class="labe">perte de poids<input type="checkbox" name="case48" value="perte de poids"></label>
            <label class="labe">saignements<input type="checkbox" name="case49" value="saignements"></label>
            <label class="labe">masse palpable<input type="checkbox" name="case50" value="masse palpable"></label>
            <select class="sele" name="intensite10"><option>intensite de douleur</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Maladie oncologiques</p>
              <span class="text-sm text-grey">maladie causer par tabagisme</span>
            </div>
          </div>
        </div>
      </div> <button class="btn" type="submit">Envoyer</button>
      </form>
    </div>
  </div>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
</x-app-layout>
</body>
</html>
