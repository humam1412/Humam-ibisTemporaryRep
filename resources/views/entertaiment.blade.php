@extends('layout.main')

@section('container')
<div class="row" style="height: 250px;">
    <h2>Entertaiment</h2>
    {{-- <img src="assets/Asset 17.png" id="aboutUs" style="position:relative; z-index:10; width: 300px; left:40vw;" alt="" class="hidden1"> --}}
  </div>

    

   <section class="hidden">  
    <div class="container-fluid" >
        <div class="row">
          
        </div>
        <div class="row" style="">
          <div id="coll" class="col-md-4">
            <div class="video-container">
              <video autoplay muted loop style="height:532px;
              width:299px ;">
                <source src="assets\Table Manner Yaspih Rajeg Food Only2.mp4" type="video/mp4"  />
              </video>
              <div class="caption">
                <br>
                <h2>Table Manner <br>
                     Course<br>
                </h2>
              </div>
            </div>
          </div>
          <div id="coll" class="col-md-4">
            <div class="video-container">
              <video autoplay muted loop style="height:532px;
              width:299px ;">
                <source src="assets\Wedding Marsa & Fakhrial2.mp4" type="video/mp4" />
              </video>
              <div class="caption">
                <br>
                <h2>Romantic <br>Wedding</h2>
              </div>
            </div>
          </div>
          <div id="coll" class="col-md-4">
            <div class="video-container">
              <video autoplay muted loop style="height:532px;
              width:299px ;">
                <source src="assets/Birthday2.mp4" type="video/mp4" />
              </video>
              <div class="caption">
                <br>
                <h2>Birthday, Arisan, <br> Gathering, Reuni  </h2>
              </div>
            </div>
          </div>
        </div>
      </div
</section>
<section class="hidden1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <img src="assets/1.png" alt="" style="width: 100%" srcset="" >
      </div>
      <div class="col-md-4">
        <img src="assets/2.png" alt="" style="width: 100%" srcset="">
      </div>
      <div class="col-md-4">
        <img src="assets/3.png" alt="" style="width: 100%" srcset="">
      </div>
    </div>
  </div>
</section>
  <h4 style="text-align: center;">Social Events</h4><br>
  <div class="container-fluid" >
    <div class="row">
      
    </div>
    <div class="row" style="">
      <div id="coll" class="col-md-4">
        <div class="video-container">
          <video autoplay muted loop style="height:532px;
          width:299px ;">
            <source src="assets\Table Manner Yaspih Rajeg Food Only2.mp4" type="video/mp4"  />
          </video>
          <div class="caption">
            <br>
            <h2>Table Manner <br>
                 Course<br>
            </h2>
          </div>
        </div>
      </div>
      <div id="coll" class="col-md-4">
        <div class="video-container">
          <video autoplay muted loop style="height:532px;
          width:299px ;">
            <source src="assets\Wedding Marsa & Fakhrial2.mp4" type="video/mp4" />
          </video>
          <div class="caption">
            <br>
            <h2>Romantic <br>Wedding</h2>
          </div>
        </div>
      </div>
      <div id="coll" class="col-md-4">
        <div class="video-container">
          <video autoplay muted loop style="height:532px;
          width:299px ;">
            <source src="assets/Birthday2.mp4" type="video/mp4" />
          </video>
          <div class="caption">
            <br>
            <h2>Birthday, Arisan, <br> Gathering, Reuni  </h2>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
@endsection