@extends('oopen')

@section('container')


  <img src="assets/foods.png"  alt="" style="align-items: center; position:absolute; z-index:100; left:40vw; 

  width: 20%;">


<div class="container py-5" style="margin-top: 10vw;">

  <div class="row pb-5 mb-4">
    <div class="col-6 col-md-4   mb-4 mb-lg-4">
      <!-- Card-->
      <div class="card rounded shadow-sm border-0">
        <div class="card-body p-4" style=" text-align:center; background-image: url(images/backgroundd.jpg); background-size: cover; background-position:center;"><img src="images/gado-gado.png" alt="" class="img-fluid d-block mx-auto mb-3">
          <p style="size: 5vw"> <a href="#" class="text-light">Awesome product</a></p>
          <p style="size: 5vw">Rp.0000000</p>

          <ul class="list-inline small" style="text-align: center;">
            <li class="list-inline-item m-0"><a href=""><svg id="icon" fill="#ffff" width="5vw"  viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg></a></li>
            <li class="list-inline-item m-0"><a href=""><svg width="5vw" id="icon"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a></li> 
            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
            <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-4   mb-4 mb-lg-4">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4" style=" text-align:center; background-image: url(images/backgroundd.jpg); background-size: cover; background-position:center;"><img src="images/gado-gado.png" alt="" class="img-fluid d-block mx-auto mb-3">
            <p style="size: 5vw"> <a href="#" class="text-light">Awesome product</a></p>
            <p style="size: 5vw">Rp.0000000</p>
  
            <ul class="list-inline small" style="text-align: center;">
              <li class="list-inline-item m-0"><a href=""><svg id="icon" fill="#ffff" width="5vw"  viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg></a></li>
              <li class="list-inline-item m-0"><a href=""><svg width="5vw" id="icon"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></li> 
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4   mb-4 mb-lg-4">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4" style=" text-align:center; background-image: url(images/backgroundd.jpg); background-size: cover; background-position:center;"><img src="images/gado-gado.png" alt="" class="img-fluid d-block mx-auto mb-3">
            <p style="size: 5vw"> <a href="#" class="text-light">Awesome product</a></p>
            <p style="size: 5vw">Rp.0000000</p>
  
            <ul class="list-inline small" style="text-align: center;">
              <li class="list-inline-item m-0"><a href=""><svg id="icon" fill="#ffff" width="5vw"  viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg></a></li>
              <li class="list-inline-item m-0"><a href=""><svg width="5vw" id="icon"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></li> 
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4   mb-4 mb-lg-4">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4" style=" text-align:center; background-image: url(images/backgroundd.jpg); background-size: cover; background-position:center;"><img src="images/gado-gado.png" alt="" class="img-fluid d-block mx-auto mb-3">
            <p style="size: 5vw"> <a href="#" class="text-light">Awesome product</a></p>
            <p style="size: 5vw">Rp.0000000</p>
  
            <ul class="list-inline small" style="text-align: center;">
              <li class="list-inline-item m-0"><a href=""><svg id="icon" fill="#ffff" width="5vw"  viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg></a></li>
              <li class="list-inline-item m-0"><a href=""><svg width="5vw" id="icon"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></li> 
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4   mb-4 mb-lg-4">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4" style=" text-align:center; background-image: url(images/backgroundd.jpg); background-size: cover; background-position:center;"><img src="images/gado-gado.png" alt="" class="img-fluid d-block mx-auto mb-3">
            <p style="size: 5vw"> <a href="#" class="text-light">Awesome product</a></p>
            <p style="size: 5vw">Rp.0000000</p>
  
            <ul class="list-inline small" style="text-align: center;">
              <li class="list-inline-item m-0"><a href=""><svg id="icon" fill="#ffff" width="5vw"  viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg></a></li>
              <li class="list-inline-item m-0"><a href=""><svg width="5vw" id="icon"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></li> 
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4   mb-4 mb-lg-4">
        <!-- Card-->
        <div class="card rounded shadow-sm border-0">
          <div class="card-body p-4" style=" text-align:center; background-image: url(images/backgroundd.jpg); background-size: cover; background-position:center;"><img src="images/gado-gado.png" alt="" class="img-fluid d-block mx-auto mb-3">
            <p style="size: 5vw"> <a href="#" class="text-light">Awesome product</a></p>
            <p style="size: 5vw">Rp.0000000</p>
  
            <ul class="list-inline small" style="text-align: center;">
              <li class="list-inline-item m-0"><a href=""><svg id="icon" fill="#ffff" width="5vw"  viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg></a></li>
              <li class="list-inline-item m-0"><a href=""><svg width="5vw" id="icon"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></li> 
              <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
              <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
            </ul>
          </div>
        </div>
      </div>
  </div>

</div>


@endsection