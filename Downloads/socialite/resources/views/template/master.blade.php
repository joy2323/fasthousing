<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Socialite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/admin.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin.css')}}"/>   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet"/> 

    <style>

    body{
        padding: 0;
        margin: 0;
        background-color: rgba(242, 234, 232, 0.37);
    }

    #chat{

        height: 80px;
        color:red;
    }

    #profile ul,li,form{
        padding-left: 1.2em;
    }
    #profile ul,li li i{
         font-size: 2em;
    }
    #profile ul li form {
        padding-top: .3em;
    }
    #profile ul li li li li {
        font-size: 1em;
        width: 40%;
        height: 40%;
    }

    .prosper{

        display:flex;
        justify-content:space-around;
        padding-top: 30px;
        
    }

    .grid{
        margin-top:60px;
    }

    #love{
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }

    #harry{
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }
  
  #nne{
      height: 70px;
  }
   
  .flash{
     
      margin-top: 100px;
     
  }

  .section{
      height: 650px;
      width: 550px;
      margin-top: 120px;
  }

  .color{
      display:flex;
      justify-content: space-between;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 20px;
  }
    
 
  #robert{
     height: 300px;
     width: 90%;
      
 }

#icon,#my-like{
    font-size: 42px;
    color: blue;
    cursor: pointer;
    user-select: none;
}


#icon:hover{
    font-size: 60px;
    color: red;
}

#my-like:hover{
    font-size: 60px;
    color: red;
}

#my-form{
    display: flex;
    justify-content: center;
    width: 90%;
    margin-right: 10px;
    padding-top: 10px;
    margin-left: 10px;
    visibility: hidden;
}
#charlie{
    display:flex;
    justify-content: center;
    margin-right: 150px;
    margin-top: 40px;
    
}

.list{
    display:flex;
    justify-content: space-between;
    padding-left: 40px;
    

}

.footer{
    background-color: black;
    width: 100%;
    height: 100px;
    color: white;
    margin-top: 30px;
    padding-top: 40px;
}

.font-awesome{
    padding-right: 70px;
}

.main-section{
  border: 1px solid #000;
}
.left-sidebar{
  background-color:#3A3A3A;
  padding: 0px;
}
.searchbox{
  width: 100%;
  padding:27px 10px;
  border-bottom:2px solid #000;
}
.form-control,.search-icon,.search-icon:hover{
  background-color: #6A6C75;
  border:1px solid #fff;
  color:#fff;
  box-shadow: none !important;
}
.form-control:focus{
  border:1px solid #fff;
}
.chat-left-img,.chat-left-detail{
  float: left;
}
.left-chat{
  overflow-y:scroll;
}
.left-chat ul{
  overflow: hidden;
  padding: 0px;
}
.left-chat ul li{
  list-style: none;
  width:100%;
  float: left;
  margin:10px 0px 8px 15px;
}
.chat-left-img img{
  width:50px;
  height:50px;
  border-radius: 50%;
  text-align: left;
  float:fixed;
  border:3px solid #6B6F79;
}
.chat-left-detail{
  margin-left: 10px;
}
.chat-left-detail p{
  margin: 0px;
  color:#fff;
  padding:7px 0px 0px;
}
.chat-left-detail span{
  color:#B8BAC3;
}
.chat-left-detail span i{
  color:#86BB71;
  font-size: 10px;
}
.chat-left-detail .orange{
  color:#E38968;
}
.right-sidebar{
  border-left:2px solid #000;
}
.right-header{
  border-bottom:2px solid #000;
  margin:0px;
  padding: 0px;
}
.right-header-img img{
  width:50px;
  height:50px;
  float: left;
  border-radius: 50%;
  border:3px solid #61BC71;
  margin-right: 10px;
}
.right-header{
  padding:20px;
  height:90px;
  background-color:#3A3A3A; 
}
.right-header-detail p{
  margin: 0px;
  color:#fff;
  font-weight: bold;
  padding-top:5px;
}
.right-header-detail span{
  color:#9FA5AF;
  font-size: 12px;
}
.rightside-left-chat,.rightside-right-chat{
  float:left;
  width:80%;
  position: relative;
}
.rightside-right-chat{
  float:right;
  margin-right:35px;
}
.right-header-contentChat{
  overflow-y: scroll; 
  background-color: #FFFFFF;
  position: relative;
}
.right-header-contentChat ul li{
  list-style: none;
  margin-top:20px;  
}
.right-header-contentChat .rightside-left-chat p,.right-header-contentChat .rightside-right-chat p{
  background-color:  #94C2ED;
  padding:15px;
  border-radius:8px;
  color:#fff;
} 

#cold-war{
  padding-left: 10px;
}
.right-header-contentChat .rightside-right-chat p{
  background-color:#86BB71;
}
.right-chat-textbox{
  padding: 15px 30px;
  width: 100%;
  background-color: #3A3A3A;
  
}
.right-chat-textbox input{
  width:88%;
  height:40px;
  color:#9FA5AF;
  border-radius:5px;
  padding: 0px 10px;
  border:1px solid #c1c1c1;
}
.right-chat-textbox a i{
  color:#3A3A3A;
  text-align: center;
  height:40px;
  width:40px;
  background-color:#fff; 
  border-radius: 50%;
  padding:12px 0px;
  margin-left:20px;
}
.rightside-left-chat span i,.rightside-right-chat span i{
  color: #86BB71;
  font-size: 12px;
}
.rightside-right-chat span i{
  color:#94C2ED;
}
.rightside-right-chat span{
  float:right;
}
.rightside-right-chat span small,.rightside-left-chat span small{
  color:#BDBDC2;
}
.rightside-left-chat:before{
  content: " ";
  position:absolute;
  padding-top: 10px;
  top:14px;
  left:15px;
  bottom:150px;
  border:15px solid transparent;
  border-bottom-color:#94C2ED; 
  z-index: 1;
}
.rightside-right-chat:before{
  content: " ";
  position:absolute;
  top:14px;
  right:15px;
  bottom:150px;
  border:15px solid transparent;
  border-bottom-color: #86BB71;
}
@media only screen and (max-width:320px){
  .main-section{
    display: none;
  }
}

    </style>

</head>
<body>
 
@include('template.navbar')
@yield('content')


@include('template.footer')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
 <script src="{{asset('/java/like.js')}}"></script>
 <script src="{{asset('/java/alpha.js')}}"></script>
  


 <script>

 $(document).ready(function(){
      var height = $(window).height();
      $('.left-chat').css('height', (height - 92) + 'px');
      $('.right-header-contentChat').css('height', (height - 163) + 'px');
      
    });

    
$(document).ready(function(){
    var like;
    var a = 'like',
   
    var $post = $('#post_id');
    var $user = $('user_id');
    $('#my-like').click(function(){
     
    
    var data = {
      like:like.val(a);
      post_id:$post.val();
      user_id: $user.val();
    }
     console.log(data);
       $.ajax{
       type = "POST",
       url = "social/user",
       data = "data",
       success:function(data){
 
         alert('successful');
 
         }
 
     };
      
    });
});


$(document).ready(function() {
 
 var x = $('#comment')
 $('#aspire').click(function() {
  $('this').append(x);
 });


});
   

    $(document).ready(function(){
        $("p").click(function(){
            $(this).hide();
        });
    });

   

</script>
    
</body>
</html>