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
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/cssanggota.css')}}">
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
              <li class="has-dropdown active">
                <a>Tentang Kami</a>
                <ul class="dropdown">
                  <li><a href="/profil">Profil</a></li>
                  <li><a href="/sejarah">Sejarah</a></li>
                  <li><a href="/visimisi">Visi - Misi</a></li>
                  <li class = "active-dropdown"><a href="/bukuanggota">Buku Anggota</a></li>
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
              <li><a href="/galeri">Galeri</a></li>
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
                <h1>Buku Anggota</h1>
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
            <div class="container">
              <form method="get" action="/bukuanggota/cari" enctype="multipart/form-data">
              <input style="border: none; background: none; width:80%;" type="text" name="search" placeholder="Cari Anggota" autocomplete="off">
              <button style="border: none; background: none;"><i class="icon-search"></i></button>
              </form>
              <hr>
            </div>

            <div class="card">
              <div class="card-body">
                      <table>
                        <thead>
                          <tr style="text-align: center;">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Detail Diri</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($anggota as $ang)
                          <tr>
                          <td style="width:1%;">{{ $loop->iteration }}</td>
                          <td style="width:13%;"><a href="{{asset('/foto_anggota/'.$ang->foto) }}"><img id="myImg" src="{{asset('/foto_anggota/'.$ang->foto) }}" style='width:140px; height:160px;'></a></td>
                          <td style="width:70%;">
                          <b>NPK :</b> {{ $ang->npk }}</br>
                          <b>NIM :</b> {{ $ang->nim }}</br>
                          <b>Nama :</b> {{ $ang->nama }}</br>
                          <b>Nama Lapangan :</b> {{ $ang->nama_lapangan }}</br>
                          <b>TTL :</b>  {{ $ang->tempat_lahir }},{{ $ang->tanggal_lahir }}</br>
                          <b>Alamat Domisili :</b> {{ $ang->alamat_domisili }}</br>
                          <b>Alamat Tinggal :</b> {{ $ang->alamat_tinggal }}</br>
                          <b>Email :</b> {{ $ang->email }}</br>
                          <b>Nomor HP :</b> {{ $ang->nomor_hp }}</br>
                          <?php
                          $stat = $ang->id_status;
                          if ($stat == '1') {
                            $status = "Purna Anggota";
                          }elseif ($stat == '2'){
                            $status = "Anggota Inti";
                          }
                          echo "<b>Status Keanggotaan :</b> ".$status." </br>"
                          ?>
                          <b>Status Keaktifan :</b> {{ $ang->status_keaktifan }}</br>
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                    {{ $anggota->links() }}
                    </div>

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
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) {
    showDivs(slideIndex = n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" slide-red", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " slide-red";
  }
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
