// CHARACTER LINK - INDEX.PHP
function character(){
    $("#content").load("nav-character.php", function() {
      //hideAll();
    })};
// CHARACTER LINK - INDEX.PHP
function comics(){
    $("#content").load("comics.php", function() {
      //hideAll();
    })};  
function movies(){
    $("#content").load("movies.php", function() {
      //hideAll();
    })};  
function tvseries(){
    $("#content").load("tvseries.php", function() {
      //hideAll();
    })};        
function letterALL(){
    
    //document.getElementById('sound').play();

    $("#myUL").load("character-pagination.ALL.php", function() {
    sortList();
    initPagination();
    showAllButton();
    showSearch(); 
    showPagination();
    })};
function letterPLACES(){
    $("#myUL").load("character-pagination.PLACES.php", function() {
    sortList();
    initPagination();
    showAllButton();
    showSearch(); 
    showPagination();
    })};
function letterTEAMS(){
    //$("#content").animate({opacity: 0},1000);
    //$("#content").animate({opacity: 1},2000);
    $("#myUL").load("character-pagination.TEAMS.php", function() {
    sortList();
    initPagination();
    showAllButton();
    showSearch(); 
    showPagination();
    })};
function letterSEARCH(){
    //$("#content").animate({opacity: 0},1000);
    //$("#content").animate({opacity: 1},2000);
    showSearchDiv();
    /*$("#page1").load("character-pagination.SEARCH.php", function() {
    console.log("Loaded");
    sortList();    
    showOnly(); */
    }
function searchAll(){
    //$("#content").animate({opacity: 0},1000);
    //$("#content").animate({opacity: 1},2000);
    hidePagination();
    
    $("#myUL").load("character-pagination.ALL.php", function() {
    showAllCharacter();
    sortList();
    
    /*$("#page1").load("character-pagination.SEARCH.php", function() {
    console.log("Loaded");
    sortList();    
    showOnly(); */
    })};

    
    
    //$(this).scrollTop(800);
//JUSTICE LEAGUE MEMBER FOR MOBILE - INDEX.PHP  

function mySearch() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

function showSearch(){
      var x = document.getElementById("searchButton");
      x.style.display = "block";
    }
function hideSearch(){
      var x = document.getElementById("searchButton");
      x.style.display = "none";
    }
function showSearchDiv(){
      var x = document.getElementById("searchDiv");
      x.style.display = "flex";
    }
function hideSearchDiv(){
      var x = document.getElementById("searchDiv");
      x.style.display = "none";
    }
function showPagination(){
      var y = document.getElementById("pagination-container");
      y.style.display = "block";
}
function hidePagination(){
      var y = document.getElementById("pagination-container");
      y.style.display = "none";
}
function showAllButton(){
      var x = document.getElementById("AllButton");
      x.style.display = "flex";  
}
function hideshowCharacter(){
    var x = document.getElementById("showCharacterDiv");
    x.style.display = "none";
}


function showAllCharacter(){
    var i, j;
    var x = document.getElementsByClassName("card-item-size-character");
    for (i = 0; i < x.length; i++) {
    x[i].style.width = "7rem";
    }
    var y = document.getElementsByClassName("card-title-character-short");
    for (j = 0; j < x.length; j++) {
    y[j].style.fontSize = "10px";
    y[j].style.lineHeight = "0";
    y[j].style.paddingBottom = "5px";
    }
}
function revertAllCharacter(){
    var i, j;
    var x = document.getElementsByClassName("card-item-size-character");
    for (i = 0; i < x.length; i++) {
    x[i].style.width = "13rem";
    }
    var y = document.getElementsByClassName("card-title-character-short");
    for (j = 0; j < x.length; j++) {
    y[j].style.fontSize = "18px";
    y[j].style.lineHeight = "46px";
    y[j].style.paddingBottom = "0";
    }
}
/* SORT  */
 function sortList() {
  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("myUL");
  switching = true;
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("li");
    // Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      // start by saying there should be no switching:
      shouldSwitch = false;
      /* check if the next item should
      switch place with the current item: */
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /* if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop: */
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark the switch as done: */
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
}

// PAGINATION 
function initPagination() {
var items = $("#page1 li:visible");
var numItems = items.length;
var perPage = 12

items.slice(perPage).hide();

$('#pagination-container').pagination({
    items: numItems,
    itemsOnPage: perPage,
    prevText: "&laquo;",
    nextText: "&raquo;",
    onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
    }
});
}

function showOnly(letter) {
  if (!letter) $('#myUL li').show();
  else {
    $('#myUL li').each(function() {
      if ($(this).text().trim().toLowerCase().split('')[0] !== letter.toLowerCase()) $(this).hide();
      else $(this).show()
    })
  }
    initPagination()
    showPagination();
    hideSearchDiv();
    revertAllCharacter();
}