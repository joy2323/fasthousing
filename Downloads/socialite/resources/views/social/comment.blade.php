
@extends('template.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card mt-5" id="kolo">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="container">
                        
                        <form method="POST" action="/social/comment" id="comment">
                        @csrf
                            <div class="form-group">
                             <input type = 'hidden' name='post_id' value="{{$post->id}}">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="3" id="comment" name="comments"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                   
                    
                </div>
            </div>
            
            
           @foreach($post->comments as $comment)
            <div class="card">
                <div class="card-body">
                
             
                    <div class="container">
                        <small>{{$comment->user->name}}</small> 
                        <p>{{$comment->comments}}</p>
                        <button style="cursor: pointer;" id="aspire">reply</button>
                        
                    </div>
                </div>   

            </div>
            @endforeach
            
            
        </div>
    </div>
</div>

@endsection
