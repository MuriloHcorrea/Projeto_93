<!-- bootstrap css -->
<link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" href="{{asset('css\style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('css\responsive.css')}}">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


   <div id="side_bar" class="sidenav">
      <div class="side_bar_logo">
         <div class="logo"> <a href="index.html"><img src="{{asset('images/logo.png')}}" alt="#"></a> </div>
      </div>
      <a href="javascript:void(0)" class="closebtn" onClick="closeNav1()">X</a>
      <div class="scoll_to_id_menu">
         <nav class="nav">
            <div class="padded">
               <ul>
                  <li><a class="nav-section2" href="#">HOME </a></li>
                  <li><a class="nav-section3" href="{{ route('pet.index') }}">PET </a></li>
                  <li><a class="nav-section4" href="{{ route('cliente.index') }}">CLIENTE </a></li>
                  <li><a class="nav-section5" href="{{ route('adocao.index') }}">ADOÇÃO </a></li>
               </ul>
               <div class="top_btn">
                  <a class="read_more paoo" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i>
                     Sair</a>
               </div>
            </div>
         </nav>
      </div>
   </div>
