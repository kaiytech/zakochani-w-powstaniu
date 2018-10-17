<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Zakochani w Powstaniu</title>
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">
  <meta name="author" content="Kajetan Krawczyk">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
  
<!-- Tooltip -->
<div class="tooltip">
  <div class="obrazek" style="background-image:url(img/tooltip/wydarzenie.jpg)"></div>
  <div class="opis"><b class="tip-typ">Wydarzenie</b>
  <br><b class="tip-naglowek">Incididunt</b>
  <br>
  <p class="tip-opis"></p></div>
</div>
<!-- </> -->


<div id="background">
<div id="content">

<!-- Górny pasek -->
<div class="topbar-logo"></div>
<ul class="topbar-menu">
  <li class="topbar-menuitem"><a href="">Wydarzenia historyczne</a></li>
  <li class="topbar-menuitem"><a href="">Mapa</a></li>
  <li class="topbar-menuitem"><a href="">Biografie</a></li>
  <li class="topbar-menuitem"><a href="">Ciekawostki</a></li>
  <li class="topbar-menuitem"><a href="">Aktualności</a></li>
  <li class="topbar-menuitem"><a href="">Kontakt</a></li>
</ul>
<!-- </> -->


<!-- LISTY -->
<!-- Jan Kowalski (#1) -->
<div class="letter-bg-l" style="background-image:url(img/bg1.png)"></div>
<div id="letter">

<!-- Treść listu -->
  <div class="paper p-left">
  <h1>Droga Elu,</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
    <b id="l-1-1" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Incididunt" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">incididunt</b>
    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    <b id="l-1-2" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Reprehenderit" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">reprehenderit</b>
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
    <b id="l-2-1" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Laborum" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">laborum</b>.</p>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
    <b id="l-3-1" class="yellow tip" zdjecie="ciekawostka.jpg" typ="ciekawostka" nazwa="Inventore" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">inventore</b>
    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
    <b id="l-4-1" class="cyan tip" zdjecie="miejsce.png" typ="miejsce" nazwa="Consequuntur" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">consequuntur</b>
    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
    <b id="l-2-2" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Quaerat" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">quaerat</b>
    voluptatem.</p>
  </div>
<!-- </> -->

<!-- Rozsuwane przyciski po bokach -->
  <div class="helper loc left material-icons">place
    <div class="hwhite"><b class="hheader loc">Wydarzenia</b>
    <ol type="1">
      <li id="l-1-1">Incididunt</li>
      <li id="l-1-2">Reprehenderit</li>
    </ol>  
    </div>
  </div>

<div class="helper cur left material-icons">search
  <div class="hwhite"><b class="hheader cur">Biografie</b>
  <ol type="1">
      <li id="l-2-1">Laborum</li>
      <li id="l-2-2">Quaerat</li>
      </ol>  
  </div>
</div>

<div class="helper ppl left material-icons">person
  <div class="hwhite"><b class="hheader ppl">Ciekawostki</b>
  <ol type="1">
      <li id="l-3-1">Inventore</li>
      </ol>  
  </div>
</div>

<div class="helper event left material-icons">access_time
  <div class="hwhite"><b class="hheader event">Miejsca</b>
  <ol type="1">
      <li id="l-4-1">Consequuntur</li>
      </ol>  
  </div>
</div>

  <!-- </> -->



<!-- Autor listu -->
  <div class="author p-left">
    <img class="author-pic" src="img/jan.png"/>
    <h5 class="author-padding">Jan Kowalski</h5>
    <p class="author-desc author-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
<!-- </> -->

<!-- Data napisania listu -->
  <div class="date p-left">
    <b class="date-day">27</b>
    <b class="date-month">grudnia</b>
    <b class="date-year">1918</b>
  </div>
<!-- </> -->


</div>

<!-- Elżbieta Nowak (#2) -->

<div class="letter-bg-r" style="background-image:url(img/bg2.png)"></div>

<div id="letter">

<!-- Treść listu -->
<div class="paper p-right">
<h1>Drogi Janie,</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
  <b id="l2-1-1" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Incididunt" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">incididunt</b>
  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  <b id="l2-1-2" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Reprehenderit" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">reprehenderit</b>
  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
  <b id="l2-2-1" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Laborum" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">laborum</b>.</p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
  <b id="l2-3-1" class="yellow tip" zdjecie="ciekawostka.jpg" typ="ciekawostka" nazwa="Inventore" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">inventore</b>
  veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
  <b id="l2-4-1" class="cyan tip" zdjecie="miejsce.png" typ="miejsce" nazwa="Consequuntur" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">consequuntur</b>
  magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
  <b id="l2-2-2" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Quaerat" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">quaerat</b>
  voluptatem.</p>
</div>

<!-- Rozsuwane przyciski po bokach -->
<div class="helper loc right material-icons">place
  <div class="hwhite right"><b class="hheader loc">Wydarzenia</b>
  <ol type="1">
    <li id="l2-1-1">Incididunt</li>
    <li id="l2-1-2">Reprehenderit</li>
  </ol>  
  </div>
</div>

<div class="helper cur right material-icons">search
  <div class="hwhite right"><b class="hheader cur">Biografie</b>
  <ol type="1">
    <li id="l2-2-1">Laborum</li>
    <li id="l2-2-2">Quaerat</li>
  </ol>  
  </div>
</div>

<div class="helper ppl right material-icons">person
  <div class="hwhite right"><b class="hheader ppl">Ciekawostki</b>
  <ol type="1">
    <li id="l2-3-1">Inventore</li>
  </ol>  
  </div>
</div>

<div class="helper event right material-icons">access_time
  <div class="hwhite right"><b class="hheader event">Miejsca</b>
  <ol type="1">
    <li id="l2-4-1">Consequuntur</li>
  </ol>  
  </div>
</div>
<!-- </> -->



<!-- Autor listu -->
  <div class="author p-right">
    <img class="author-pic" src="img/ela.png"/>
    <h5 class="author-padding">Elżbieta Nowak</h5>
    <p class="author-desc author-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
<!-- </> -->

<!-- Data napisania listu -->
  <div class="date p-right">
    <b class="date-day">28</b>
    <b class="date-month">grudnia</b>
    <b class="date-year">1918</b>
  </div>
<!-- </> -->
</div>


<!-- Jan Kowalski (#1) -->
<div class="letter-bg-l" style="background-image:url(img/bg1.png)"></div>
<div id="letter">

<!-- Treść listu -->
  <div class="paper p-left">
  <h1>Droga Elu,</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
    <b id="l-1-1" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Incididunt" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">incididunt</b>
    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    <b id="l-1-2" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Reprehenderit" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">reprehenderit</b>
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
    <b id="l-2-1" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Laborum" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">laborum</b>.</p>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
    <b id="l-3-1" class="yellow tip" zdjecie="ciekawostka.jpg" typ="ciekawostka" nazwa="Inventore" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">inventore</b>
    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
    <b id="l-4-1" class="cyan tip" zdjecie="miejsce.png" typ="miejsce" nazwa="Consequuntur" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">consequuntur</b>
    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
    <b id="l-2-2" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Quaerat" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">quaerat</b>
    voluptatem.</p>
  </div>
<!-- </> -->

<!-- Rozsuwane przyciski po bokach -->
  <div class="helper loc left material-icons">place
    <div class="hwhite"><b class="hheader loc">Wydarzenia</b>
    <ol type="1">
      <li id="l-1-1">Incididunt</li>
      <li id="l-1-2">Reprehenderit</li>
    </ol>  
    </div>
  </div>

<div class="helper cur left material-icons">search
  <div class="hwhite"><b class="hheader cur">Biografie</b>
  <ol type="1">
      <li id="l-2-1">Laborum</li>
      <li id="l-2-2">Quaerat</li>
      </ol>  
  </div>
</div>

<div class="helper ppl left material-icons">person
  <div class="hwhite"><b class="hheader ppl">Ciekawostki</b>
  <ol type="1">
      <li id="l-3-1">Inventore</li>
      </ol>  
  </div>
</div>

<div class="helper event left material-icons">access_time
  <div class="hwhite"><b class="hheader event">Miejsca</b>
  <ol type="1">
      <li id="l-4-1">Consequuntur</li>
      </ol>  
  </div>
</div>

  <!-- </> -->



<!-- Autor listu -->
  <div class="author p-left">
    <img class="author-pic" src="img/jan.png"/>
    <h5 class="author-padding">Jan Kowalski</h5>
    <p class="author-desc author-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
<!-- </> -->

<!-- Data napisania listu -->
  <div class="date p-left">
    <b class="date-day">29</b>
    <b class="date-month">grudnia</b>
    <b class="date-year">1918</b>
  </div>
<!-- </> -->


</div>

<!-- Elżbieta Nowak (#2) -->

<div class="letter-bg-r" style="background-image:url(img/bg2.png)"></div>

<div id="letter">

<!-- Treść listu -->
<div class="paper p-right">
<h1>Drogi Janie,</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
  <b id="l2-1-1" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Incididunt" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">incididunt</b>
  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  <b id="l2-1-2" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Reprehenderit" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">reprehenderit</b>
  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
  <b id="l2-2-1" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Laborum" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">laborum</b>.</p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
  <b id="l2-3-1" class="yellow tip" zdjecie="ciekawostka.jpg" typ="ciekawostka" nazwa="Inventore" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">inventore</b>
  veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
  <b id="l2-4-1" class="cyan tip" zdjecie="miejsce.png" typ="miejsce" nazwa="Consequuntur" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">consequuntur</b>
  magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
  <b id="l2-2-2" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Quaerat" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">quaerat</b>
  voluptatem.</p>
</div>

<!-- Rozsuwane przyciski po bokach -->
<div class="helper loc right material-icons">place
  <div class="hwhite right"><b class="hheader loc">Wydarzenia</b>
  <ol type="1">
    <li id="l2-1-1">Incididunt</li>
    <li id="l2-1-2">Reprehenderit</li>
  </ol>  
  </div>
</div>

<div class="helper cur right material-icons">search
  <div class="hwhite right"><b class="hheader cur">Biografie</b>
  <ol type="1">
    <li id="l2-2-1">Laborum</li>
    <li id="l2-2-2">Quaerat</li>
  </ol>  
  </div>
</div>

<div class="helper ppl right material-icons">person
  <div class="hwhite right"><b class="hheader ppl">Ciekawostki</b>
  <ol type="1">
    <li id="l2-3-1">Inventore</li>
  </ol>  
  </div>
</div>

<div class="helper event right material-icons">access_time
  <div class="hwhite right"><b class="hheader event">Miejsca</b>
  <ol type="1">
    <li id="l2-4-1">Consequuntur</li>
  </ol>  
  </div>
</div>
<!-- </> -->



<!-- Autor listu -->
  <div class="author p-right">
    <img class="author-pic" src="img/ela.png"/>
    <h5 class="author-padding">Elżbieta Nowak</h5>
    <p class="author-desc author-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
<!-- </> -->

<!-- Data napisania listu -->
  <div class="date p-right">
    <b class="date-day">30</b>
    <b class="date-month">grudnia</b>
    <b class="date-year">1918</b>
  </div>
<!-- </> -->
</div>

<!-- Jan Kowalski (#1) -->
<div class="letter-bg-l" style="background-image:url(img/bg1.png)"></div>
<div id="letter">

<!-- Treść listu -->
  <div class="paper p-left">
  <h1>Droga Elu,</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
    <b id="l-1-1" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Incididunt" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">incididunt</b>
    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
    <b id="l-1-2" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Reprehenderit" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">reprehenderit</b>
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
    <b id="l-2-1" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Laborum" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">laborum</b>.</p>
  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
    <b id="l-3-1" class="yellow tip" zdjecie="ciekawostka.jpg" typ="ciekawostka" nazwa="Inventore" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">inventore</b>
    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
    <b id="l-4-1" class="cyan tip" zdjecie="miejsce.png" typ="miejsce" nazwa="Consequuntur" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">consequuntur</b>
    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
    <b id="l-2-2" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Quaerat" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">quaerat</b>
    voluptatem.</p>
  </div>
<!-- </> -->

<!-- Rozsuwane przyciski po bokach -->
  <div class="helper loc left material-icons">place
    <div class="hwhite"><b class="hheader loc">Wydarzenia</b>
    <ol type="1">
      <li id="l-1-1">Incididunt</li>
      <li id="l-1-2">Reprehenderit</li>
    </ol>  
    </div>
  </div>

<div class="helper cur left material-icons">search
  <div class="hwhite"><b class="hheader cur">Biografie</b>
  <ol type="1">
      <li id="l-2-1">Laborum</li>
      <li id="l-2-2">Quaerat</li>
      </ol>  
  </div>
</div>

<div class="helper ppl left material-icons">person
  <div class="hwhite"><b class="hheader ppl">Ciekawostki</b>
  <ol type="1">
      <li id="l-3-1">Inventore</li>
      </ol>  
  </div>
</div>

<div class="helper event left material-icons">access_time
  <div class="hwhite"><b class="hheader event">Miejsca</b>
  <ol type="1">
      <li id="l-4-1">Consequuntur</li>
      </ol>  
  </div>
</div>

  <!-- </> -->



<!-- Autor listu -->
  <div class="author p-left">
    <img class="author-pic" src="img/jan.png"/>
    <h5 class="author-padding">Jan Kowalski</h5>
    <p class="author-desc author-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
<!-- </> -->

<!-- Data napisania listu -->
  <div class="date p-left">
    <b class="date-day">31</b>
    <b class="date-month">grudnia</b>
    <b class="date-year">1918</b>
  </div>
<!-- </> -->


</div>

<!-- Elżbieta Nowak (#2) -->

<div class="letter-bg-r" style="background-image:url(img/bg2.png)"></div>

<div id="letter">

<!-- Treść listu -->
<div class="paper p-right">
<h1>Drogi Janie,</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
  <b id="l2-1-1" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Incididunt" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">incididunt</b>
  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
  <b id="l2-1-2" class="red tip" zdjecie="wydarzenie.jpg" typ="wydarzenie" nazwa="Reprehenderit" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">reprehenderit</b>
  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
  <b id="l2-2-1" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Laborum" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">laborum</b>.</p>
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
  <b id="l2-3-1" class="yellow tip" zdjecie="ciekawostka.jpg" typ="ciekawostka" nazwa="Inventore" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">inventore</b>
  veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
  <b id="l2-4-1" class="cyan tip" zdjecie="miejsce.png" typ="miejsce" nazwa="Consequuntur" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">consequuntur</b>
  magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
  <b id="l2-2-2" class="blue tip" zdjecie="biografia.jpg" typ="biografia" nazwa="Quaerat" opis="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.">quaerat</b>
  voluptatem.</p>
</div>

<!-- Rozsuwane przyciski po bokach -->
<div class="helper loc right material-icons">place
  <div class="hwhite right"><b class="hheader loc">Wydarzenia</b>
  <ol type="1">
    <li id="l2-1-1">Incididunt</li>
    <li id="l2-1-2">Reprehenderit</li>
  </ol>  
  </div>
</div>

<div class="helper cur right material-icons">search
  <div class="hwhite right"><b class="hheader cur">Biografie</b>
  <ol type="1">
    <li id="l2-2-1">Laborum</li>
    <li id="l2-2-2">Quaerat</li>
  </ol>  
  </div>
</div>

<div class="helper ppl right material-icons">person
  <div class="hwhite right"><b class="hheader ppl">Ciekawostki</b>
  <ol type="1">
    <li id="l2-3-1">Inventore</li>
  </ol>  
  </div>
</div>

<div class="helper event right material-icons">access_time
  <div class="hwhite right"><b class="hheader event">Miejsca</b>
  <ol type="1">
    <li id="l2-4-1">Consequuntur</li>
  </ol>  
  </div>
</div>
<!-- </> -->



<!-- Autor listu -->
  <div class="author p-right">
    <img class="author-pic" src="img/ela.png"/>
    <h5 class="author-padding">Elżbieta Nowak</h5>
    <p class="author-desc author-padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
<!-- </> -->

<!-- Data napisania listu -->
  <div class="date p-right">
    <b class="date-day">01</b>
    <b class="date-month">stycznia</b>
    <b class="date-year">1919</b>
  </div>
<!-- </> -->
</div>




<!-- </LISTY> -->
<br><br><br><br><br>

</div>
</div>

</div>

</div>


<div class="footer">
  <div id="content">
    <div class="foot-cont">
      <a href="">O projekcie</a><br>
      <a href="">Poznaj naszych bohaterów</a><br>
      <a href="">O powstaniu</a>
    </div>
    <div class="foot-cont">
      <a href="">Wydarzenia historyczne</a><br>
      <a href="">Mapa</a><br>
      <a href="">Biografia i ciekawostki</a><br>
      <a href="">Aktualności</a><br>
      <a href="">Kontakt</a>
    </div>
    <div class="foot-cont">
      <a href="">aquanet.pl</a><br>
      <a href="">csr.aquanet.pl</a><br>
      <a href="">poznan.pl</a>
    </div>
    <div class="foot-cont" style="width: 340px">
      ul. Dolna Wilda 126<br>
      61-492 Poznań, tel. 61 835 92 08<br>
      fax.61 835 90 12 aquanet.pl<br>
      klient@aquanet.pl<br>
      <br><br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
    <div class="foot-cont" style="text-align: right">
      Zaprojektowane przez:<br>Empressia<br><br>
      Zakodowane przez: <u><a href="kajtekjestem.pl/">Kajetan Krawczyk</a></u>
</div>
</div>
</div>


  <script src="js/scripts.js"></script>
</body>
</html>