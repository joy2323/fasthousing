@extends('template.master')

@section('content')

<div class="container-fliud">

<div class="prosper">

  <div id="one">

    <i class="fas fa-home"></i>

  </div>

  <div id="two">

   <i class="fas fa-compass"></i>

  </div>

   <div id="three">

     <i class="fas fa-align-left"></i>

    </div>

   <div id="four">

     <i class="fas fa-user"></i>

    </div>

  </div>
</div>
</div>

<div class="container flash">

  <form class="form" method="POST" enctype="multipart/form-data" id="my-post">  
    
    @csrf
    
    @include('template.error')
                
    <input class="form-control form-control-lg" type="text" id='bae' name="content" placeholder="What's on Your Mind ?">
          
    <input type="file" id="image" class="mt-4" name='post_image'> 

    <input type="submit" name="submit_post"/>
        
  </form>
</div>  

<!-- The if and foreach is used to pass the variable $show which was used to store the details of the users

post from the database is passed with $post which was used to store it with the model at the initial stage -->

<div class="container reeve">
 
  <div class="row  mx-auto olu">
    <div class="mx-auto">
    @if(count($show) > 0)
    @foreach($show as $post)
    
    <div class="card section">
      <div class="color">
        <div class="kalu">

          <img src="{{asset('/img/love.jpg')}}" id="love">
          <p id="okoji">{{$post->user->name}} <span> <br/>active 3 minutes ago</p>
        
        
        </div>

        <div class="space">
          <ul id="item">

            <ol class="nav-item dropleft">
              <a class="nav-link dropdown-toggle" href="#" id="drop-down" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">...</a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="#">Action</a>

                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>

            </ol>  

          </ul> 

          
          
        </div>
      </div>
      <div class="stage">

        <em><p class="card-text text-center" id="style">{{$post->content}}</p><em>
        <img src="/storage/post_image/{{$post->post_image}}" id="robert" class="card-img-top"/>
      </div>

        <div class="container">

          <div class="end">

            <div id="charlie">
              
              <input type="hidden" id="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" id="post_id" value="{{$post->id}}">
              <i class="far fa-hand-point-right pr-4" id="my-like" name="like"></i>

                  

              <form action="/social/reaction" class="ali">

                <i class="fas fa-grin-hearts pr-4" id="icon" name="heart" onclick="myKing()"></i>

              </form>


              <form action="/social/reaction" class="ali">

                <i class="far fa-grin-tears"  id="icon" name="tear" onclick="myQueen()"></i>

              </form>

             <div id="joy">

               <h1></h1>
               <a href="{{route('comment', $post->id)}}"><i class="far fa-comment-dots" id="icon" class="font-awesome"></i></a>

              </div>   
              
            </div>

            <div class="info">
            


            </div>
                      
            
          </div>
        </div>

    </div>
   
   @endforeach
   @endif
    
  </div>
  </div>

</div>

@endsection  