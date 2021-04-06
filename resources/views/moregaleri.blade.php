<!DOCTYPE HTML>
<!--
Greatness by FreeHTML5.co
Twitter: http://twitter.com/fh5co
URL: http://FreeHTML5.co
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HMJ TI STMIK Akakom Yogyakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link rel="icon" href="{{asset('assets/images/logo.png')}}">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

  <!-- Animate.css -->
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

  <!-- Theme style  -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <!-- Modernizr JS -->
  <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <div class="gtco-loader"></div>

  <div id="page">
    <nav class="gtco-nav" role="navigation">
      <div class="gtco-container">
        <div class="row">
          <div class="col-xs-2">
            <div id="gtco-logo"><a href="/">
              <img src="{{asset('assets/images/logo.png')}}" style="height: 80px;">
            </div>
          </div>
          <div class="col-xs-10 text-right menu-1">
            <ul>
              <li><a href="/">Home</a></li>
              <li class="has-dropdown">
                <a>Tentang Kami</a>
                <ul class="dropdown">
                  <li><a href="/profil">Profil</a></li>
                  <li><a href="/sejarah">Sejarah</a></li>
                  <li><a href="/visimisi">Visi - Misi</a></li>
                  <li><a href="/bukuanggota">Buku Anggota</a></li>
                </ul>
              </li>
              <li class="has-dropdown">
                <a>Divisi</a>
                <ul class="dropdown">
                  <li><a href="/internal">Internal Division</a></li>
                  <li><a href="/networking">Networking Division</a></li>
                  <li><a href="/sdd">Skill Development Division</a></li>
                </ul>
              </li>
              <li><a href="/kegiatan">Kegiatan</a></li>
              <li><a href="/artikel">Artikel</a></li>
              <li class = "active"><a href="/galeri">Galeri</a></li>
              <li><a href="/kontak">Kontak Kami</a></li>
            </ul>
          </div>
        </div>

      </div>
    </nav>
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url({{asset('assets/images/img_bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="gtco-container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t">
              <div class="display-tc animate-box" data-animate-effect="fadeIn">
                <h1>Galeri</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="gtco-section">
      <div class="gtco-container">
        <div class="row animate-box">
          <div class="artikel">
              <h2 class="judul-moregaleri">{{$kegiatan->nama_kegiatan}}</h2>
              <p>
              <small class="text-muted">
                  <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                  Ditulis pada <b>{{$kegiatan->tanggal_kegiatan}}</b>                                   <br>
                  <i class="fa fa-folder" aria-hidden="true"></i>&nbsp;
                  Tempat Kegiatan : <b>{{$kegiatan->tempat_kegiatan}}</b></a>
              </small>
              </p>
              <hr>

            <!-- The grid: four columns -->
            <div class="row">
              <?php
              $decode = json_decode($kegiatan->foto_kegiatan);
              $foto = array_slice($decode, 0,22);
              foreach ($foto as $gambar){ ?>
                <div class="column">
                  <img data-enlargeable src="{{asset('/foto_kegiatan/'.$gambar) }}" alt="Nature" onclick="myFunction(this);" class="img-responsive img-thumbnail">
                </div>
              <?php } ?>
            </div>
          <hr>
          </div>
        </div>
      </div>
    </div>
    <footer id="gtco-footer" role="contentinfo">
      <div class="gtco-container">
        <div class="row row-pb-md">
          <div class="clearfix visible-xs-block"></div>
          <div class="col-md-4 col-sm-5 col-xs-6 ">
            <b class="footer"> HMJ TI STMIK Akakom Yogyakarta</b></br></br>
            <b class="footer"> Kontak Kami :</b></br>
            <ul class="gtco-footer-links">
              <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=hmjti.stmikakakom@gmail.com" target="_blank"><i class="icon-mail"></i>&nbsp;&nbsp;&nbsp;hmjti.stmikakakom@gmail.com</a></li>
              <li><a href="https://api.whatsapp.com/send?phone=6281390301214" target="_blank"><i class="icon-phone"></i>&nbsp;&nbsp;&nbsp;+62 813-9030-1214</a></li>
            </ul>
          </div>
          <div class="clearfix visible-xs-block"></div>
          <div class="col-md-6 col-sm-4 col-xs-6">
          </br></br>
          <b class="footer">Alamat</b></br>
          <ul class="gtco-footer-links">
            <li><a href="https://goo.gl/maps/XHyjaxorpwHgcYwb8" target="_blank"><i class="icon-map"></i>&nbsp;&nbsp;&nbsp;Jl.Raya Janti No 143
              Karang Jambe, Yogyakarta</a></li>
            </ul>
          </div>
        </div>

        <div class="row copyright">
          <div class="col-md-12">
            <p class="pull-left" style="color:#fff;">
              <small class="block">&copy;2021 HMJ TI All Reserved.</small>
              <small class="block">Made by <a style="color:#fff;" href="https://www.instagram.com/farizasandaira/" target="_blank">Fariza</a> with ❤ </small>
            </p>
            <p class="pull-right">
              <ul class="gtco-social-icons pull-right">
                <li><a href="https://twitter.com/hmjti_akakom" target="_blank"><i class="icon-twitter"></i></a></li>
                <li><a href="https://id-id.facebook.com/hmjtiakakom" target="_blank"><i class="icon-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/hmjti_akakom" target="_blank"><i class="icon-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCXVkH3EmFlQ0izcLuEPgsBQ" target="_blank"><i class="icon-youtube"></i></a></li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

  <!-- jQuery -->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript">
    $('img[data-enlargeable]').addClass('img-enlargeable').click(function(){
      var src = $(this).attr('src');
      var modal;
      function removeModal(){ modal.remove(); $('body').off('keyup.modal-close'); }
      modal = $('<div>').css({
          background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
          backgroundSize: 'contain',
          width:'100%', height:'100%',
          position:'fixed',
          zIndex:'10000',
          top:'0', left:'0',
          cursor: 'zoom-out'
      }).click(function(){
          removeModal();
      }).appendTo('body');
      //handling ESC
      $('body').on('keyup.modal-close', function(e){
        if(e.key==='Escape'){ removeModal(); }
      });
  });
  </script>
  <!-- jQuery Easing -->
  <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Waypoints -->
  <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <!-- Carousel -->
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <!-- countTo -->
  <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
  <!-- Magnific Popup -->
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/magnific-popup-options.js')}}"></script>
  <!-- Main -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
