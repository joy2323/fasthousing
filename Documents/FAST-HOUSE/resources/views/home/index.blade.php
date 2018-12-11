 @extends('templates.master')

@section('content')

<div class="kalu">

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
     <div class="carousel-inner">
        <div class="carousel-item active">
            
          <div class="img">
                 
            @include('templates.navbar')
            @include('templates.middle')
               
          </div>
          <div class="carousel-caption">
                    
                  
          </div>   
        </div>
        <div class="carousel-item">

          <div class="img1">
               
            @include('templates.navbar')      
            @include('templates.middle')
             
          </div>
          <div class="carousel-caption">
               
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>   
        </div>
        <div class="carousel-item">

          <div class="img2">
            @include('templates.navbar')

            @include('templates.middle')      
                
          </div>

          <div class="carousel-caption">
                   
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>   
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
     <span class="carousel-control-prev-icon" id="preview1"></span>
    </a>

    <a class="carousel-control-next" href="#demo" data-slide="next">
     <span class="carousel-control-next-icon" id="next1"></span>
    </a>
  </div>
</div>


<div class="section">

  <div class="item text-center">

    <em><h2 class="display-4">Featured Properties</h2></em>

    <div id="line" class="mx-auto"></div>
     
  </div>  
 
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
     <div class="carousel-inner ali">
        <div class="carousel-item active">

           <div class="container">

             <div class="row">

                <div class="col-4 pr-2">

                 <div class="card" id="card1" style="width:350px;">
                       <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>    
                    </div>




                <div class="col-4">

                    <div class="card" id="card1" style="width:350px;">
                       <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>  

                </div>



                <div class="col-4">  

                    <div class="card" id="card1" style="width:350px;">
                       <img class="card-img-top" src="{{asset('img/inter.jpg')}}" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>  

                </div>

              </div>

             </div>
        </div>
        <div class="carousel-item">
          
           <div class="container">


               <div class="row">


                  <div class="col-4 pr-2">

                          
                         <div class="card" id="card1" style="width:350px;">
                       <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>  

                  </div> 




                  <div class="col-4">
                       
                         <div class="card" id="card1" style="width:350px;">
                       <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>  
                  </div>


                      <div class="col-4">  
                    <div class="card" id="card1" style="width:350px;">
                        <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                      </div>
                  </div>  
                      </div>
               </div>
              </div>
          </div>
        
        <div class="carousel-item">


           <div class="container">


              <div class="row">


                 <div class="col-4">

                     <div class="card" id="card1" style="width:350px;">
                        <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                      </div>
                  </div>  
                      </div>



                      <div class="col-4">

                     <div class="card" id="card1" style="width:350px;">
                        <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                      </div>
                  </div>  
                      </div>



                      <div class="col-4">

                     <div class="card" id="card1" style="width:350px;">
                        <img class="card-img-top" src="{{asset('img/back.jpg')}}" alt="Card image" style="width:100%">
                      <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                      </div>
                  </div>  
                      </div>

              </div>

          </div>
          
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="property mt-4 d-flex justify-content-center">

  <a href="#" class="btn btn-lg btn-primary">View All Properites</a>

  </div>

</div>



<div class="testmonials mt-5">

   
  <h3 class="text-center" id="what">Testimonials</h3>

  <div class="container">

    <div class="row" id="row1">


      <div class="col-4">

       <div class="card" style="width:350px;">

          <div class="content"> 
           <img src="{{asset('img/khaliz.jpg')}}" id="my-pic">
          </div>

          <p class="card-text">Your advice and support from our initial <br/> meeting through liaising with current <br/> tenants and a polished marketing program  <br/> all contributed to a great sale process.</p>
       </div>

      </div>



      <div class="col-4">


        <div class="card" style="width:350px;">

          <div class="content">
            <img src="{{asset('img/khaliz.jpg')}}" id="my-pic">
          </div>
          <p class="card-text">You were quick to understand my needs and <br/> steer me in the right direction. The <br/> professionalism and warmth of your team <br/> made the process less stressful.</p>
       </div>
      </div>




      <div class="col-4">

       <div class="card" style="width:350px;">

          <div class="content">
            <img src="{{asset('img/khaliz.jpg')}}" id="my-pic">
          </div>
          <p class="card-text">Working with your team is a great <br/> experience. Expert guidance; great customer <br/> care; awesome marketing! Thank you for the <br/> great team effort!</p>
       </div>

      </div>
    </div>
  </div>  

</div>


<section class="cta-section">
  <div class="text-center cta-text">
   <strong><h2 id="khaliz">Coming to town for business?</h2></strong>
    <strong><h3>Lets help you get a short term accommodation that can serve you and save...</h3></strong>
    <button type="button" class="btn btn-primary" data-toggle="modal" id="prosper" data-target="#myModal">
    Book Now
   </button>
  </div>

   <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact Now</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form class="text-center"> 
  
         <input type="text" id="kalu" placeholder="Name"><br>

         <input type="email" id="kalu" placeholder="Email"><br>

         <input type="text" id="kalu" placeholder="Phone Number">

          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</section>



@endsection