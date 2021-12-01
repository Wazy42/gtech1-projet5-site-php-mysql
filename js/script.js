// Carousel (index.php)

$(document).ready(function(){
    $('.carousel').carousel();
  });

$('.moveNextCarousel').click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $('.carousel').carousel('next');
});

$('.movePrevCarousel').click(function(e){
    e.preventDefault();
    e.stopPropagation();
    $('.carousel').carousel('prev');
});

// Navbars (menu.php)

$(document).ready(function(){
    $('.sidenav').sidenav();
  });

$(document).ready(function(){
    $('.modal').modal();
});

// Dropdown button (menu.php)

$('.dropdown-trigger').dropdown();

function HideSwitch(id) {
  var element = document.getElementById("form-project-" + id);
  if(element.classList == "hide")
    element.classList.remove("hide");
  else 
    element.classList.add("hide");
}