<?php 
$videoURL="https://www.youtube.com/watch?v=Z5ITWwCxFgg";
$convertedURL = str_replace("watch?v=", "embed/", $videoURL);
?>
<?php get_header() ?>

<div class="container">
    
        
            <iframe width="560" height="315" src="<?php echo $convertedURL; ?>" frameborder="0" allow="acceleromter; autoplay; 
            clipbord-write; encrypted; gyroscope; picture-in-picture" allowfullscreen></iframe>



        
    
</div>

<!--<div class="cv">
<h2>
Uddannelse
</h2>
<p1> Markedsføringsøkonom <br>Copenhagen business academy</p1><br>
<p2> - Erhversøkonomi, markedsanalyse, 
    international markedsføring, supply chain </p2>

<h2>
Uddannelse
</h2>
<p1> Markedsføringsøkonom <br>Copenhagen business academy</p1>
<p2> - Erhversøkonomi, markedsanalyse, 
    international markedsføring, supply chain </p2>



</div>-->

<div class="main1">


<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('erhvervserfaring')"> Erhvervserfaring</button>
  <button class="btn" onclick="filterSelection('uddannelse')"> Uddannelse</button>
  <button class="btn" onclick="filterSelection('itkompetencer')"> IT kompetencer</button>
  <button class="btn" onclick="filterSelection('sprog')"> Sprog</button>
  <button class="btn" onclick="filterSelection('frivilligt')"> Frivilligt arbejde</button>
  <button class="btn" onclick="filterSelection('kontakt')"> Kontakt</button>
</div>

</div>





<div class="row1">
  <div class="column uddannelse">
    <div class="content1">
      <h2>MARKEDSFØRINGSØKONOM </h2>
        <h3>Copenhagen business academy</h3>
      <p1> - Erhversøkonomi, markedsanalyse, international markedsføring, supply chain  2017-2019</p1><br><br>
      
      
      <h2>UDENLANDSK HØJSKOLE </h2>
        <h3>Dansk Studie Center</h3>
        <p1> - Kommunikation & personlig udvikling, sport, & kulturforståelse</p1><br><br>

      <h2>HANDELSGYMNASIUM HHX </h2>
        <h3>Varde Handelsskole</h3>
      <p1> Innovation</p1><br><br>
      
    </div>
  </div>
  <div class="column erhvervserfaring">
    <div class="content1">
    <h2>SLAGS & MARKEDSFØRINGSKONSULENT </h2>
        <h3>Slikposen.dk// Starup// 2020- </h3>
      <p1> - sælger, marketingsansvarlig, udarbejdelse af grafisk materiale, SoMe, hjemmeside opdatering (NopCommerce) </p1><br><br>
      
      
      <h2>MARKETINGSKONSULENT </h2>
        <h3>Helle Hallen// Vrenderup// 2019-2020</h3>
        <p1> - - Udarbejdes af wordpress hjemmeside, markting & grafisk materiale</p1><br><br>

      <h2>SAMPLER </h2>
        <h3>Vitamin Well // København // 2018-2019</h3>
      <p1> - Event afvikling</p1><br><br>

      <h2>LOGISTIK & MESSEANSVARLIG </h2>
        <h3>Manova// København // 2015-2019 </h3>
      <p1> - Messeansvarlig på uddannelseskaravanen, logistik på Karrieredagene</p1><br><br>

      <h2>RESEPONIST & DAGLIG LEDER </h2>
        <h3>Skov tårnet // Næstved // 2016-2018 </h3>
      <p1> - Daglig leder, indkøb. kundepleje, og afvikling af selskaber </p1><br><br>

      <h2>SALGSBACK-UP, ELEVPORTALEN </h2>
        <h3>Manova//København // januar 2016- juli 2016</h3>
      <p1> - HTML, udarbejdelse af jobannoncer, wordpress, mailchimp & SoMe</p1><br><br>

      <h2>MESSEANSVARLIG </h2>
        <h3>Dansk Studie center //København //  2015 </h3>
      <p1> - Fordragsholder & ambasadør på uddannelseskaravanen</p1><br><br>

      <h2>KØKKENASSISTENT </h2>
        <h3>Cafe MammaMia // København // 2015</h3>
     <br><br>

      <h2>KØKKENASSISTENT & SERVITRICE </h2>
        <h3>Pandekagehuset Kvie Sø // Ansager // 2010-2014</h3><br><br> 
      

      <h2>PICOLINE </h2>
        <h3>Teglværket // Nordenskov // 2007-2009</h3><br><br> 
      
      
    </div>
  </div>
  <div class="column itkompetencer">
    <div class="content1">
    <h2>IT kompetancer</h2><br><br>
    <h3>Officepakken 
    Adobepakken<br>
    Acrobat DC<br>
    InDesign<br>
    Illustrator<br>
    Photoshop<br>
    Premiere Pro<br>
    After Effect<br>
    Audition<br>
    XD<br>
    Html <br>
    Css<br>
    Sass<br>
    Vuje<br>
    Wordpress<br>
    Umbraco<br>
    Mailchimp
</h3><br><br> 
    
     
    </div>
  </div>
  
  <div class="column sprog">
    <div class="content1">
    <h2>Sprog</h2>
    <h3>Dansk, modersmål<br><br>
    Engelsk, mundligt & skrifteligt<br>
    - business fluent

    </h3><br><br> 
      
    </div>
  </div>
  <div class="column frivilligt">
    <div class="content1">
    <h2>Frivilligt arbejde</h2><br>
    <h3>Owen Luft Kånsert</h3>
    <p1> - Bestyrelsesmedlem, medarrangør, hjemmeside ansvarlig (Umbraco) </p1><br><br>
    <h3>Nordenskov UIF elite volley</h3>
    <p1> - Holdleder for ligaholdet, SoMe, opdatering af hjemmeside, afvikling af arrangementer, sponsor & grafisk materiale. 
 </p1><br><br>
      
    </div>
  </div>
  <div class="column kontakt">
    <div class="content1">

    <h2>Kontakt information</h2><br><br>
    <a href="Louisepedersen_6@hotmail.com">
        <h3><?php the_field("email") ?></h3>
    </a>
    <h3><?php the_field("mobil") ?></h3>
    <h3>Kronprinsensgade 125, 2th<br> 6700 Esbjerg</h3>

      
    </div>
  </div>

  
      
    </div>
  </div>
</div>






<script>
filterSelection("erhvervserfaring")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>




<?php get_footer() ?>


