@extends('template.master')

@section('content')

<div class="container-fluid">

    

   <div class="container" id="side-bar">

        <h3 class="text-center">My Messages</h3>

        <div class="row">

            <div class="col">

                <form>
             
                <input type="search" name="search" placeholder="Search Contacts">   
                </form>


            </div>

            <div class="col">

                <ul class="list-group">
                    <li class="list-item">
                        <img src="{{asset('/img/love.jpg')}}" id="love">
                        <p id="okoji">Love Okoji</p>
                    </li>    
               </ul>  

            </div>
       </div>


    </div>
  

    


    <div class="container" id="chat-bar">

       <ul class="list-group">
            <li class="list-item">
                <img src="{{asset('/img/love.jpg')}}" id="love">
                <p id="okoji">Love Okoji</p>
            </li>    
       </ul>  

       <div class="row">

           <div class="col">

               <ul class="list-group">
                    <li class="list-item">
                        <img src="{{asset('/img/love.jpg')}}" id="love">
                        <p id="okoji">Love Okoji</p>
                    </li>    
               </ul>  

           </div>

           <div class="col">

               <ul class="list-group">
                    <li class="list-item">
                        <img src="{{asset('/img/love.jpg')}}" id="love">
                        <p id="okoji">Love Okoji</p>
                    </li>    
               </ul>  

            </div>

       </div>

   </div>











</div>


@endsection