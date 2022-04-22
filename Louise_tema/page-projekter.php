<?php get_header() ?>

<!--<h1><?php the_field("text1") ?></h1> 
 <div class="billedertop">
  
<img class="billede1" src="<?php the_field("billede1") ?>">
<img class="billede2" src="<?php the_field("billede2") ?>">
<img class="billede3" src="<?php the_field("billede3") ?>">

</div>

<h1><?php the_field("text2") ?></h1> 
<div class="billedertop">
  
<img class="billede4" src="<?php the_field("billede4") ?>">
<img class="billede5" src="<?php the_field("billede5") ?>">
<img class="billede6" src="<?php the_field("billede6") ?>">


</div>
-->


<div class="main">


<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('indesign')"> InDesign</button>
  <button class="btn" onclick="filterSelection('photoshop')"> Photoshop</button>
  <button class="btn" onclick="filterSelection('illustrator')"> Illustrator</button>
</div>

</div>


<div class="row">
  <div class="column indesign">
    <div class="content">
      <img src="<?php the_field("billede1") ?>" alt="indesign" style="width:100%">
      
    </div>
  </div>
  <div class="column indesign">
    <div class="content">
    <img src="<?php the_field("billede2") ?>" alt="indesign" style="width:100%">
      
    </div>
  </div>
  <div class="column indesign">
    <div class="content">
    <img src="<?php the_field("billede3") ?>" alt="indesign" style="width:100%">
     
    </div>
  </div>
  
  <div class="column photoshop">
    <div class="content">
      <img src="<?php the_field("billede4") ?>" alt="photoshop" style="width:100%">
      
    </div>
  </div>
  <div class="column illustrator">
    <div class="content">
    <img src="<?php the_field("billede5") ?>" alt="illustrator" style="width:100%">
      
    </div>
  </div>
  <div class="column photoshop">
    <div class="content">
    <img src="<?php the_field("billede6") ?>" alt="photoshop" style="width:100%">
      
    </div>
  </div>

  <div class="column illustrator">
    <div class="content">
      <img src="<?php the_field("billede7") ?>" alt="illustrator" style="width:100%">
      
    </div>
  </div>
  <div class="column photoshop">
    <div class="content">
    <img src="<?php the_field("billede8") ?>" alt="photoshop" style="width:100%">
      
    </div>
  </div>
  <div class="column illustrator">
    <div class="content">
    <img src="<?php the_field("billede9") ?>" alt="illustrator" style="width:100%">
      
    </div>
  </div>

  <div class="column indesign">
    <div class="content">
    <img src="<?php the_field("billede10") ?>" alt="indesign" style="width:100%">
     
    </div>
  </div>

  <div class="column photoshop">
    <div class="content">
    <img src="<?php the_field("billede11") ?>" alt="photoshop" style="width:100%">
      
    </div>
  </div>

  <div class="column illustrator">
    <div class="content">
    <img src="<?php the_field("billede12") ?>" alt="illustrator" style="width:100%">
      
    </div>
  </div>

</div>









<script>
filterSelection("all")
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