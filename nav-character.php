<!--<?

    //session_start();
    //require_once('connect.php');
?> .-->
<!--CHARACTER MENU SLIDESHOW-->

<div id="carouselExampleCaptions" class="carousel slide character-menu" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner" id="character-bg">

    <div class="carousel-item active">
      <img src="images/character menu/highlights-1.png" class="d-block w-10" alt="..." id="character-bg-size">
      <div class="carousel-caption d-none d-md-block">
        <h1>THE CHEETAH</h1>
        <p>Are you ready to know the cheetah?</p>
        <button class="btn btn-light" type="submit">EXPLORE</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/character menu/highlights-2.png" class="d-block w-10" alt="..." id="character-bg-size">
      <div class="carousel-caption d-none d-md-block">
        <h1>THE FLASH</h1>
        <p>Let's go to the speed force</p>
        <button class="btn btn-light" type="submit">EXPLORE</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/character menu/highlights-3.png" class="d-block w-10" alt="..." id="character-bg-size">
      <div class="carousel-caption d-none d-md-block">
        <h1>SUPERMAN</h1>
        <p>I, A Kryptonian. Call me Ka-el</p>
        <button class="btn btn-light" type="submit">EXPLORE</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--CHARACTER MENU SLIDESHOW END-->


    <div class="text-center body-explore-4">
    <span id="body-explore-title-4">EXPLORE YOUR CHARACTER</span>
    <p id="body-explore-subtitle-4">START SHOWING THE DATA BY CLICKING THE PHOTO BELOW!</p> 

    <!--CHARACTER TOPIC SELECTION-->
    <p id="body-explore-subtitle-3"></p>

             <!--NAV CHARACTER TOPIC SELECTION-->
              <div class="row">
             <div class="col card-item card-topic-bg">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" id="showCharacterDiv" onclick="javascript:letterALL()"> <!--CHARACTER 1-->
             <div class="card card-item-size-topic-showCharacter">
                   <img src="images/profile/topic-selection/showall.jpg" class="card-img-top" alt="Selection All">
              </div>
             </a> 
             </div>

             <div class="col card-item card-topic-bg">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" id="showCharacterDiv" onclick="javascript:letterTEAMS()"> <!--CHARACTER 1-->
             <div class="card card-item-size-topic-showCharacter">
                   <img src="images/profile/topic-selection/teams.jpg" class="card-img-top" alt="Selection All">
              </div>
             </a> 
             </div>

             <div class="col card-item card-topic-bg">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" id="showCharacterDiv" onclick="javascript:letterPLACES()"> <!--CHARACTER 1-->
             <div class="card card-item-size-topic-showCharacter">
                   <img src="images/profile/topic-selection/places.jpg" class="card-img-top" alt="Selection All">
              </div>
             </a> 
             </div>
      </div>
 <div class="container row mx-auto" id="AllButton"> 

     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('A','@')"><img src="images/profile/topic-selection/a.jpg" class="card-img-top" alt="Selection A"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('B')"><img src="images/profile/topic-selection/b.jpg" class="card-img-top" alt="Selection B"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('C')"><img src="images/profile/topic-selection/c.jpg" class="card-img-top" alt="Selection C"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('D')"><img src="images/profile/topic-selection/d.jpg" class="card-img-top" alt="Selection D"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('E')"><img src="images/profile/topic-selection/e.jpg" class="card-img-top" alt="Selection E"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('F')"><img src="images/profile/topic-selection/f.jpg" class="card-img-top" alt="Selection F"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('G')"><img src="images/profile/topic-selection/g.jpg" class="card-img-top" alt="Selection G"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('H')"><img src="images/profile/topic-selection/h.jpg" class="card-img-top" alt="Selection H"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('I')"><img src="images/profile/topic-selection/i.jpg" class="card-img-top" alt="Selection I"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('J')"><img src="images/profile/topic-selection/j.jpg" class="card-img-top" alt="Selection J"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('K')"><img src="images/profile/topic-selection/k.jpg" class="card-img-top" alt="Selection K"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('L')"><img src="images/profile/topic-selection/l.jpg" class="card-img-top" alt="Selection L"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('M')"><img src="images/profile/topic-selection/m.jpg" class="card-img-top" alt="Selection M"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('N')"><img src="images/profile/topic-selection/n.jpg" class="card-img-top" alt="Selection N"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('O')"><img src="images/profile/topic-selection/o.jpg" class="card-img-top" alt="Selection O"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('P')"><img src="images/profile/topic-selection/p.jpg" class="card-img-top" alt="Selection P"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('R')"><img src="images/profile/topic-selection/r.jpg" class="card-img-top" alt="Selection R"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('S')"><img src="images/profile/topic-selection/s.jpg" class="card-img-top" alt="Selection S"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('T')"><img src="images/profile/topic-selection/t.jpg" class="card-img-top" alt="Selection T"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('V')"><img src="images/profile/topic-selection/v.jpg" class="card-img-top" alt="Selection V"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('W')"><img src="images/profile/topic-selection/w.jpg" class="card-img-top" alt="Selection W"></a>
       </div>
     </div>
     <div class="col card-item card-topic-bg"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showOnly('Z')"><img src="images/profile/topic-selection/z.jpg" class="card-img-top" alt="Selection Z"></a>
       </div>
     </div>
     
     <div class="col card-item card-topic-bg" id="searchButton"> <!--CHARACTER 1-->
      <div class="card card-item-size-topic">
             <a href="#body-explore-subtitle-3" class="js-scroll-trigger" onclick="javascript:showSearchDiv()"><img src="images/profile/topic-selection/search.jpg" class="card-img-top" alt="Selection Teams"></a>
       </div>
     </div>

  </div>
         <!--NAV CHARACTER TOPIC SELECTION END-->
    
    <!-- <nav aria-label="Page navigation example" class="text-center container px-5">
    <ul class="pagination">
      <li class="page-item"><a class="page-link prev" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="javascript:page1()">1</a></li>
      <li class="page-item"><a class="page-link" href="javascript:page2()">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link next" href="#">Next</a></li>
    </ul>
    </nav> -->

    <div class="pagecontent">

    <div class="container row mx-auto card-main-desktop d-flex" id="page1">

       <div id="searchDiv" >
         <input type="text" class="form-control" id="myInput" onkeyup="mySearch()" placeholder="Search..." autocomplete="off">
         <button class="btn btn-outline-secondary" type="button"  id="button-addon2" onclick="javascript:searchAll()">Show All</button>
       </div>
       <div class="container" id="pagination-container"></div>
     <!--page1-->
       <ul id="myUL">
              
       </ul>
    </div>


</div>
</div>
<!-- <audio id="sound" src="sounds/welcome.wav" preload="auto"></audio> -->
<script src="js/index.js"></script>
<script src="js/jquery.simplePagination.js"></script>




