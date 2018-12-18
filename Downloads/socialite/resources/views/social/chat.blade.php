@extends('template.master')

@section('content')

  <div class="container main-section">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
        <div class="input-group searchbox">
          <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
          <div class="input-group-btn">
            <button class="btn btn-default search-icon" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
        <div class="left-chat">
         @if(!$users->isEmpty())
          <ul>
            @foreach($users as $user)
            @if($user->user_name!=auth()->user()->user_name)
            <li>
              <div class="chat-left-img">
                <img src="{{asset('/img/love.jpg')}}" id="love">
              </div> 
              <div class="chat-left-detail">
                 <p><a href="{{route('chat',$user->id)}}">{{$user->name}}</a></p>
                <span><i class="fa fa-circle" aria-hidden="true"></i> online</span>
              </div>
            </li>
            @endif
            @endforeach
            
          </ul>
          @endif
        </div>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
        <div class="row">
          <div class="col-md-12 right-header">
            <div class="right-header-img">
              <img src="{{asset('/img/love.jpg')}}" id="love">
            </div>
            <div class="right-header-detail">
              <p>{{Auth::user()->user_name}}</p>
              
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 right-header-contentChat">
            @if($messages)
            @foreach($messages as $message)
            <ul>
            @if($message->receiver_id==auth()->user()->id)
              <li>
                <div class="rightside-left-chat">
                  <span><img src="{{asset('/img/love.jpg')}}"  id="harry"><span id="cold-war">{{$message->created_at->diffForHumans()}}</span><br><br>
                  <p>{{$message->message}}</p>
                </div>
              </li>  
              @elseif($message->sender_id==auth()->user()->id)
              <li>
                <div class="rightside-right-chat">
                  <span>{{$message->created_at->diffForHumans()}}<i class="fa fa-circle" aria-hidden="true"></i></span><br><br>
                  <p>{{$message->message}}</p>
                </div>
              </li>
              @endif
              
              
            </ul>
            @endforeach
            @endif
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 right-chat-textbox">
            <form method="post" action="{{route('storeChat', $receiver->id)}}">
            @csrf
            <input type="hidden" id="receiver_id" name="receiver_id" value="{{ $receiver->id }}">
            @if(session('status'))
                <small class="alert alert-success">{{session('status')}}</small>
            @endif
            <input type="text" name="message" placeholder="input message ...."><button class="btn btn-success" type="submit"><a><i class="fa fa-arrow-right" type="submit" aria-hidden="true"></i></a></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection