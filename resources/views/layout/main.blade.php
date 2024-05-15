<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ibis TSB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
    html,body
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
.shape svg {
        position: sticky;
        bottom: -28px;
        left: -15;
        top: 63%;
        width: 100vw;
        z-index: 0;
      }
 .shape svg path {
  fill: #fff;
}
.hidden{
    opacity: 0;
    filter: blur(5px);
    transform: translateX(-100%);
    transition: all 1s;
}
.show{
    opacity: 1;
    filter: blur(0);
    transform: translateX(0);
}
  </style>

</head>

<body>
    @include('partiall.navbar')
  {{-- <div class="hero_area" >
    <!-- header section strats -->
    <header class="header_section" >
 
      </div>
      <div class="header_bottom">
        <div class="container-fluid" style="position: fixed; background-color: rgba(0, 0, 0, 0.29);  ">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
             <img src="images/Logo Master-07.png" style="width: 20vw;" alt="" srcset="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin: 1vw;">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">Whats-on</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Promotion</a>
                </li>
               
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section --> --}}
    <!-- slider section -->
    
    <section class="slider_section" id="change-bg" >
      <div class="container " id="headd">
        <div class="row" style="margin-top: 5vw;">
          <div class="col-md-10 ">
            <div class="img-box">
              <img src="images/p.png" style="width: 40vw; margin-top: 10vw;" class="hidden"  alt="">
            </div>
            <div class="detail-box" style="position: absolute; z-index: 2; top:1vw;">
              <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 25.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg  version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1920 680.08" style="enable-background:new 0 0 1920 680.08;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
  
</style>
<g>
	<g>
		<g>
			<path class="st0" d="M264.89,180.75l-43.91,168.15H186.7l-33.74-113l-33.2,113h-34.8L40.5,180.75h31.06l32.66,124.24
				l35.34-124.24h26.78l35.88,124.24l32.14-124.24H264.89z"/>
			<path class="st0" d="M292.74,180.75H414.3v27.84h-89.97v41.77h89.97v27.85h-89.97v42.84h89.97v27.85H292.74V180.75z"/>
			<path class="st0" d="M450.73,180.75h31.06v140.31h90.5v27.85H450.73V180.75z"/>
			<path class="st0" d="M600.14,362.83V168.97c0-43.91,21.42-65.33,63.18-65.33c39.63,0,58.37,23.03,58.9,62.65l1.07,72.29h-32.66
				l-0.54-73.36c0-21.95-11.24-32.66-27.31-32.66c-20.88,0-29.99,12.85-29.99,34.81v197.07c0,21.96,9.11,34.81,29.99,34.81
				c16.06,0,27.31-10.18,27.31-32.67l0.54-73.36h32.66l-1.07,72.29c-0.53,39.62-19.27,62.65-58.9,62.65
				C621.56,428.15,600.14,406.74,600.14,362.83z"/>
			<path class="st0" d="M753.3,458.15V71.51c0-35.34,13.39-50.34,48.73-50.34c34.8,0,48.19,15,48.19,50.34v386.64
				c0,35.34-13.39,50.34-48.19,50.34C766.69,508.48,753.3,493.49,753.3,458.15z M816.49,460.82V68.83
				c0-12.85-4.28-17.67-14.45-17.67c-10.71,0-15,4.82-15,17.67v391.99c0,12.85,4.29,17.67,15,17.67
				C812.21,478.49,816.49,473.67,816.49,460.82z"/>
			<path class="st0" d="M1065.5,180.75v168.15h-29.45V225.2l-58.9,123.71h-5.89l-58.9-121.03v121.03h-29.98V180.75h38.55
				l53.55,104.42l53.01-104.42H1065.5z"/>
			<path class="st0" d="M1108.36,180.75h121.56v27.84h-89.97v41.77h89.97v27.85h-89.97v42.84h89.97v27.85h-121.56V180.75z"/>
		</g>
		<g>
			<path class="st0" d="M987.29,453.72h-23.26v32.74h-11.94v-32.74h-23.26v-10.5h58.47V453.72z"/>
			<path class="st0" d="M990.57,465.04v-0.2c0-15.03,12.15-22.85,30.88-22.85c18.94,0,30.89,7.61,30.89,22.85v0.2
				c0,14.62-11.94,22.65-30.89,22.65C1002.72,487.68,990.57,479.86,990.57,465.04z M1040.39,465.04v-0.2
				c0-7.83-5.77-12.97-18.94-12.97s-18.93,5.15-18.93,12.97v0.2c0,7.83,5.76,12.77,18.93,12.77S1040.39,472.86,1040.39,465.04z"/>
		</g>
		<path class="st0" d="M1126.65,564.85v-4.03v-97.57c0-4.6-1.91-7.09-6.71-7.09h-20.7v101.6c0,4.6,1.92,7.09,6.71,7.09H1126.65z
			 M1126.65,440.25v-18.2c0-4.6-1.91-7.1-6.71-7.1h-20.7v18.21c0,4.6,1.92,7.09,6.71,7.09H1126.65z M1175.35,486.06
			c6.32-6.32,12.46-10.35,20.31-10.35c11.89,0,18.02,11.5,18.02,35.85c0,23.58-7.48,34.51-24.92,34.51c-4.22,0-8.82-0.77-13.42-2.3
			V486.06z M1147.92,554.5c0,4.79,1.93,5.94,6.91,7.48c8.82,2.68,21.67,4.41,32.59,4.41c40.06,0,55.2-23.2,55.2-59.23
			c0-29.91-9.2-53.87-39.48-53.87c-10.16,0-20.32,4.6-27.79,11.88v-43.13c0-4.6-1.92-7.1-6.72-7.1h-20.71V554.5z M1285.75,564.85
			v-4.03v-97.57c0-4.6-1.91-7.09-6.71-7.09h-20.7v101.6c0,4.6,1.92,7.09,6.71,7.09H1285.75z M1285.75,440.25v-18.2
			c0-4.6-1.91-7.1-6.71-7.1h-20.7v18.21c0,4.6,1.92,7.09,6.71,7.09H1285.75z M1375.46,533.6c0-37.57-46.58-34.5-46.58-49.08
			c0-5.18,2.69-9.01,15.34-9.01c7.67,0,17.25,1.72,25.49,4.22v-13.8c0-3.26-1.73-6.33-4.79-7.28c-7.09-2.11-14.95-3.83-25.69-3.83
			c-25.69,0-37.19,14.18-37.19,31.24c0,35.86,46.39,31.63,46.39,49.08c0,6.9-4.99,10.55-17.44,10.55c-7.47,0-18.98-1.92-27.8-4.22
			v13.8c0,3.26,1.73,6.13,4.6,7.28c7.67,2.49,17.25,3.84,27.99,3.84C1358.98,566.38,1375.46,553.92,1375.46,533.6z"/>
	</g>
	<g>
		<path class="st0" d="M1091.14,612.93h17.63c8.51,0,13.28,5.36,13.28,11.8c0,4.22-2.48,7.11-6.44,8.38
			c6.23,1.48,9.25,5.63,9.25,11.33c0,8.11-5.77,14.08-15.29,14.08h-18.44V612.93z M1107.77,629.76c3.02,0,5.03-1.68,5.03-4.29
			c0-2.62-1.68-4.29-4.56-4.29h-7.71v8.58H1107.77z M1109.17,650.28c3.82,0,6.23-2.55,6.23-6.3c0-3.69-2.48-6.23-6.77-6.23h-8.11
			v12.54H1109.17z"/>
		<path class="st0" d="M1147.72,612.53h0.8l20.85,45.99h-9.86l-2.15-5.16h-18.5l-2.15,5.16h-9.05L1147.72,612.53z M1154.03,645.52
			l-3.29-7.91c-1.34-3.22-2.75-8.18-2.75-8.18s-1.34,4.96-2.68,8.18l-3.29,7.91H1154.03z"/>
		<path class="st0" d="M1189.09,637.34c-2.28-2.15-5.43-6.24-5.43-6.24s0.67,5.03,0.67,8.31v19.11h-8.78v-45.99h0.94l23,21.59
			c2.21,2.08,5.36,6.24,5.36,6.24s-0.6-5.16-0.6-8.31v-19.11h8.78v45.99h-0.94L1189.09,637.34z"/>
		<path class="st0" d="M1222.55,612.93h14.01c14.01,0,24,9.32,24,22.8c0,13.48-9.92,22.79-24,22.79h-14.01V612.93z M1236.09,650.28
			c10.12,0,14.75-6.03,14.75-14.55c0-8.51-4.63-14.55-14.75-14.55h-4.16v29.1H1236.09z"/>
		<path class="st0" d="M1268.27,642.03v-29.1h9.39v28.56c0,6.64,2.88,9.19,9.12,9.19c6.17,0,8.98-2.55,8.98-9.19v-28.56h9.39v29.1
			c0,11.53-7.98,17.1-18.37,17.1C1276.25,659.13,1268.27,653.56,1268.27,642.03"/>
		<path class="st0" d="M1328.01,637.34c-2.28-2.15-5.43-6.24-5.43-6.24s0.67,5.03,0.67,8.31v19.11h-8.78v-45.99h0.94l23,21.59
			c2.21,2.08,5.36,6.24,5.36,6.24s-0.6-5.16-0.6-8.31v-19.11h8.78v45.99H1351L1328.01,637.34z"/>
		<path class="st0" d="M1359.92,635.73c0-13.48,9.52-23.33,23.26-23.33c7.44,0,12.81,2.01,16.56,6.3l-6.37,6.3
			c-2.28-2.35-4.89-4.16-10.19-4.16c-8.25,0-13.61,6.37-13.61,14.88c0,8.51,5.5,15.02,15.08,15.02c2.95,0,6.57-0.54,8.92-1.68v-6.71
			h-11v-8.25h19.58v19.71c-2.61,2.15-9.19,5.3-17.5,5.3C1369.78,659.13,1359.92,649.2,1359.92,635.73"/>
		<polygon class="st0" points="1435.86,620.39 1422.85,620.39 1422.85,612.15 1458.25,612.15 1458.25,620.39 1445.25,620.39 
			1445.25,657.74 1435.86,657.74 		"/>
		<path class="st0" d="M1498.81,657.74h-10.86l-7.51-11.53c-0.87,0.13-1.81,0.2-2.68,0.2h-3.22v11.33h-9.39v-45.59h12.6
			c12.74,0,20.38,6.1,20.38,17.23c0,7.11-3.15,11.6-8.78,14.15L1498.81,657.74z M1477.49,638.23c7.64,0,11-2.41,11-8.85
			c0-6.44-3.49-8.98-11-8.98h-2.95v17.83H1477.49z"/>
		<path class="st0" d="M1522.68,611.74h0.8l20.85,45.99h-9.85l-2.15-5.16h-18.5l-2.15,5.16h-9.05L1522.68,611.74z M1528.99,644.73
			l-3.29-7.91c-1.34-3.22-2.75-8.18-2.75-8.18s-1.34,4.96-2.68,8.18l-3.29,7.91H1528.99z"/>
		<path class="st0" d="M1564.05,636.55c-2.28-2.15-5.43-6.24-5.43-6.24s0.67,5.03,0.67,8.31v19.11h-8.78v-45.99h0.94l23,21.59
			c2.21,2.08,5.36,6.24,5.36,6.24s-0.6-5.16-0.6-8.31v-19.11h8.78v45.99h-0.94L1564.05,636.55z"/>
		<path class="st0" d="M1593.55,648.75l7.64-4.43c2.01,3.29,4.63,5.7,9.25,5.7c3.89,0,6.37-1.94,6.37-4.63
			c0-3.22-2.55-4.36-6.84-6.24l-2.35-1.01c-6.77-2.88-11.26-6.5-11.26-14.15c0-7.04,5.36-12.4,13.74-12.4
			c5.97,0,10.26,2.08,13.34,7.51l-7.31,4.69c-1.61-2.88-3.35-4.02-6.03-4.02c-2.75,0-4.49,1.74-4.49,4.02c0,2.82,1.74,3.96,5.77,5.7
			l2.35,1.01c7.98,3.42,12.47,6.91,12.47,14.75c0,8.45-6.64,13.07-15.55,13.07C1601.93,658.34,1596.3,654.18,1593.55,648.75"/>
		<path class="st0" d="M1644.37,648.75l7.64-4.43c2.01,3.29,4.63,5.7,9.25,5.7c3.89,0,6.37-1.94,6.37-4.63
			c0-3.22-2.55-4.36-6.84-6.24l-2.35-1.01c-6.77-2.88-11.26-6.5-11.26-14.15c0-7.04,5.36-12.4,13.74-12.4
			c5.97,0,10.26,2.08,13.34,7.51l-7.31,4.69c-1.61-2.88-3.35-4.02-6.03-4.02c-2.75,0-4.49,1.74-4.49,4.02c0,2.82,1.74,3.96,5.77,5.7
			l2.35,1.01c7.98,3.42,12.47,6.91,12.47,14.75c0,8.45-6.64,13.07-15.55,13.07C1652.75,658.34,1647.12,654.18,1644.37,648.75"/>
		<polygon class="st0" points="1693.38,620.39 1680.37,620.39 1680.37,612.15 1715.77,612.15 1715.77,620.39 1702.77,620.39 
			1702.77,657.74 1693.38,657.74 		"/>
		<path class="st0" d="M1722.48,641.24v-29.1h9.39v28.56c0,6.64,2.88,9.19,9.12,9.19c6.17,0,8.98-2.55,8.98-9.19v-28.56h9.39v29.1
			c0,11.53-7.98,17.1-18.37,17.1C1730.46,658.34,1722.48,652.77,1722.48,641.24"/>
		<path class="st0" d="M1768.67,612.15h14.01c14.01,0,24,9.32,24,22.8c0,13.48-9.92,22.8-24,22.8h-14.01V612.15z M1782.21,649.49
			c10.12,0,14.75-6.03,14.75-14.55s-4.63-14.55-14.75-14.55h-4.16v29.1H1782.21z"/>
		<rect x="1814.8" y="612.15" class="st0" width="9.39" height="45.59"/>
		<path class="st0" d="M1832.3,634.94c0-13.48,10.46-23.4,23.6-23.4c13.14,0,23.6,9.92,23.6,23.4c0,13.48-10.46,23.4-23.6,23.4
			C1842.75,658.34,1832.3,648.42,1832.3,634.94 M1869.84,634.94c0-8.51-5.63-15.02-13.94-15.02c-8.31,0-13.95,6.5-13.95,15.02
			s5.63,15.02,13.95,15.02C1864.21,649.96,1869.84,643.45,1869.84,634.94z"/>
	</g>
</g>
</svg>

        
            
          
              <a href="" style="margin-left: 40vw;">
                Contact Us
              </a>
            </div>
          </div>
          <div class="col-md-2">
            
           
          </div>
          {{-- <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z" />
            </svg> --}}
        </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
 
  
  
  <!-- feature section -->
  <section class="feature_section" >
    <div class="container" class="hidden">
      <div class="feature_container">
        <div class="box" style="background-image: url(images/IMG_3315.jpg); background-size: cover; background-position: center;" onclick="window.location='{{ url("/rooms") }}'">
          <div class="img-box" >
            <!-- <img src="images/bg room.png" alt="" srcset=""> -->
          </div>
          <h6 class="name" style=" color: rgb(255, 255, 255);">
            Rooms
          </h6>
        </div>
        <a href="" id=""></a>
        <div class="box"  style="background-image: url(images/IMG_3487.jpg); background-size: cover; background-position: center;" onclick="window.location='{{ url("/bnf") }}'">
          <div class="img-box">
           
          </div>
          <h6 class="name" style=" color: rgb(255, 255, 255);">
            Banquet and Function
          </h6>
        </div>
       <div class="box"style="background-image: url(images/Oopen.png); background-size: cover; background-position: center;">
        <a href="/oopenFood">
          <div class="img-box" >
        </div>
          <h6 class="name" style=" color: rgb(255, 255, 255);">
            Oopen Resto
          </h6>
        </a>
        </div>
    
        <div class="box"style="background-image: url(images/eventnentertaiment.jpg); background-size: cover; background-position: center;" onclick="window.location='{{ url("/entertaiment") }}'">
          <div class="img-box" >
        </div>
          <h6 class="name" style=" color: rgb(255, 255, 255); ">
            Entertaiment
          </h6>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->
    
  @yield('container')
  


  <footer class="text-white text-center text-lg-start bg-dark" style="background-image: url(images/fotofooter.jpg); background-position: center; background-size: cover;">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
       
          <h2>Get In Touch</h2>
          <ul class="fa-ul mt-4" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
              </svg></span><span class="ms-2">JL. Gatot Subroto no. 289 - 40273, West java</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
              </svg></span><span class="ms-2">contact@example.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
              </svg></span><span class="ms-2">+ 62 811 2000 0684</span>
            </li>
          </ul>
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
            </svg></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-envelope-at" viewBox="0 0 16 16">
              <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
              <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
            </svg></a>
            <!-- Linkedin -->
          </div>
          <div class="text-center p-3" >
            Ibis Bandung Trans Studio
       
           </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0" id="foot">
        <a href="#top"><img src="images/footer.png" id="footer-img" alt="" srcset=""></a>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     <br>
    </div>
    <!-- Copyright -->
  </footer>

<!-- End of .container -->

 <script>
  const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting){
      entry.target.classList.add('show');
    } else entry.target.classList.remove('show');
  });
});
 
const hiddenElemenets = document.querySelectorAll('.hidden');
hiddenElemenets.forEach((el) => observer.observe(el));

const observer1 = new IntersectionObserver((entries1) => {
  entries1.forEach((entry) => {
    console.log(entry)
    if (entry.isIntersecting){
      entry.target.classList.add('show1');
    } else entry.target.classList.remove('show1');
  });
});
 
const hiddenElemenets1 = document.querySelectorAll('.hidden1');
hiddenElemenets1.forEach((el) => observer1.observe(el));

 </script>
  <!-- end info_section -->

  <!-- footer section -->
 
  <!-- footer section -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->


</body>

</html>