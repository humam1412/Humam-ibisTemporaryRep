@extends('layout.main')

@section('container')


<section class="hidden">
  <!-- carousel start -->
  <div class="content" style=" -webkit-transform: translateY(-27%);
  transform: translateY(-27%); " >
    
    <div class="container">
      <h2 class="my-2 mt-5 text-center">Current Promotion</h2>
    </div>


    <div class="site-section bg-left-half mb-5">
      <div class="container owl-2-style">
        
        
        <div class="owl-carousel owl-2">
          <div class="media-29101">
            <a href="#"><img src="images/Family Staycation New Design TV.jpg" alt="Image" class="img-fluid"></a>
            <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
          </div>
          <div class="media-29101">
            <a href="#"><img src="images/Room Vaganza New 1 Design TV.jpg" alt="Image" class="img-fluid"></a>
            <h3><a href="#">Beatae Doloribu</a></h3>
          </div>
          <div class="media-29101">
            <a href="#"><img src="images/Bakcyard Grill NEW Poster TV.jpg"Image" class="img-fluid"></a>
            <h3><a href="#">Accusantium Eius Soluta</a></h3>
          </div>
          <div class="media-29101">
            <a href="#"><img src="images/Family Staycation New Design TV.jpg" alt="Image" class="img-fluid"></a>
            <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
          </div>
          <div class="media-29101">
            <a href="#"><img src="images/Room Vaganza New 1 Design TV.jpg" alt="Image" class="img-fluid"></a>
            <h3><a href="#">Beatae Doloribu</a></h3>
          </div>
          <div class="media-29101">
            <a href="#"><img src="images/Bakcyard Grill NEW Poster TV.jpg"Image" class="img-fluid"></a>
            <h3><a href="#">Accusantium Eius Soluta</a></h3>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
  <!-- carousel end -->

  <!-- about section -->
<section class="hidden" >
  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row" style="background-image: url(images/bg\ hotel.jpg); background-position: center; background-size: cover;">
        <div class="col-lg-3 col-md-4">
          <div class="detail-box sticky-top" style="margin-top: 2vw; ">
            <h2>
              About us
            </h2>
            <p>
              The biggest ibis in Asia with 547 Rooms(Standard, Premiere& Executive room), 13 Meeting Rooms & 1 Ballroom </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="img-box" style="width: 530px; height: 367px;">
           
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
  <!-- end about section -->


  <!-- professional section -->

  <!-- <section class="professional_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/professional-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="detail-box">
            <h2>
              We Provide Professional <br>
              Home Services.
            </h2>
            <p>
              randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All randomised words which don't look even slightly
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end professional section -->

  <!-- News Section -->

  <section class="service_section layout_padding" style="background-color: red">
    <div class="container " >
      <div class="heading_container heading_center">
        <h1 style="color: white;"> <b>News</b></h1>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
     
          <div class="box">
           
            <div class="detail-box">
              <img class="img-fluid" src="images/bg hotel.jpg"  alt="">
              <h5>
               Judul Artikel
              </h5>
              <p>
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, et?</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
         
            <div class="detail-box">
              <img class="img-fluid" src="images/bg hotel.jpg"  alt="">
              <h5>
                Judul Artikel
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, et?
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
       
            <div class="detail-box">
              <img class="img-fluid" src="images/bg hotel.jpg"  alt="">
              <h5>
                Judul Artikel
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, et?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
    <div class="row" style="height: 5vw;"></div>
  </section>

  <!-- end News section -->

  <!-- client section -->

 

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container" style=" align-items: center;">
        <h2 style=" text-align: center;" >
          Connect with us
        </h2>
      </div>
      <div class="row">
      
        <div class="col-md-12">
          <div class="map_container">
            <div class="map">
              <div id="googleMap" style="width:100%;height:100%;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  <!-- end contact section -->
