@extends('template.master')

@section('content')

@if(!$users->isEmpty())
                    <ul class="list-group">
                        @foreach($users as $user)
                            @if($user->name!=auth()->user()->name)
                            
                            <li class="list-group-item">
                            <img  src="/storage/upload/{{$user->picture}}" alt="" width="100px" height="100px">
                            <a href="{{route('chat',$user->id)}}">{{$user->name}}</a></li>
                            
                            @endif
                        @endforeach
                    </ul>
                    @endif


@endsection