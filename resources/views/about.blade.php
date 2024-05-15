@extends('layout.main')

@section('container')
  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="row" style="height: 250px;">
      <img src="assets/Asset 16.png" id="aboutUs" style="position:relative; z-index:10; width: 300px; left:40vw;" alt="">
    </div>
    <div class="card mb-3" >
      <div class="row no-gutters">
        <div class="col-md-6">
          <div class="card-img-body" style="  margin-left: auto;
          margin-right: auto;">
              <div class="gallery" style="  margin-left: auto;
              margin-right: auto;">
                  <img src="images/Roombg.jpg" alt="Two hands creating a heart and showing the sun">
                  <img src="images/bg hotel.jpg" alt="The mountain">
                  <img src="images/Hjed54Ui.jpeg" alt="a river">
                  <img src="images/IMG_3315.jpg" alt="a women with a camera">
                </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h2 style="color: black;">
              ibis Bandung Trans Studio

              Vibrant economy hotel, open to everyone
            </h2>
            <p style="color: black;">
                
            
              
              The biggest ibis in Indonesia, with 424 Standard Rooms, 108 Superior Rooms, and 15 Executive Rooms. Strategically located on Integrated Trans Studio Bandung Complex with shopping mall and the iconic indoor Theme Park in the City, Trans Studio Bandung. It is a perfect place for business and leisure in an ultimate and integrated complex. This hotel is accessible right in downtown and easy access from any destination.
              
              The 3-star ibis Bandung Trans Studio is perfect for staycations. It is easily accessible by car from toll road exit Buah Batu, 25 minutes from airport, 15minutes from train station, 5-minute drive to culinary area and close to Riau's factory outlet. ibis Bandung Trans Studio gives you the easiest access to Trans Studio Theme Park as well as to Trans Studio Mall Bandung. The hotel area is a complete one-stop destination for you to stay, shop and play with your family and colleagues.
              
              Enjoy your experience in a strategic location at The Integrated Trans Studio Bandung Complex with one stop living service, including Trans Studio Mall. And have dinner at the open air restaurant, which is suitable for relaxing with your family and friend <br>
              
              "Positioned right in the downtown area of Bandung, we are easily accessed from any destination."<br>
              
              <b>Indra Gunawan, Hotel Manager</b>
            <p class="card-text"><small class="text-muted">Ibis Bandung Trans Studio</small></p>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container" >
      <img src="assets/1234.png" style="display: block;
      margin-left: auto;
      margin-right: auto;
      width: 80%; " alt="">
    </div>
    
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
   
  </section>
@endsection