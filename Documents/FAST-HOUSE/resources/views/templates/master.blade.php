<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fast-Housing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/index.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="main.js"></script>
   <style>

body{
	padding: 0;
	margin: 0;
}
#logo-1{
	height: 90px;
}

.bello{
    margin-top: 40px;
}

    .img{

height:600px;
background: rgb(208,128,28);
background: linear-gradient(90deg, rgba(208,128,28,1) 0%, rgba(210,196,36,1) 35%, rgba(255,255,255,1) 100%); 

background-image: url("{{asset('img/home.jpg')}}")!important;

background-position: center;
background-repeat: no-repeat;
background-size: cover!important;
position: relative;
width: 100%!important;

}  


.img1{


height:600px;
background: rgb(208,128,28);
background: linear-gradient(90deg, rgba(208,128,28,1) 0%, rgba(210,196,36,1) 35%, rgba(255,255,255,1) 100%); 

background-image: url("{{asset('img/home1.jpg')}}")!important;

background-position: center;
background-repeat: no-repeat;
background-size: cover!important;
position: relative;
width: 100%!important;


}

.img2 {


    height:600px;
background: rgb(208,128,28);
background: linear-gradient(90deg, rgba(208,128,28,1) 0%, rgba(210,196,36,1) 35%, rgba(255,255,255,1) 100%); 

background-image: url("{{asset('img/inter.jpg')}}")!important;

background-position: center;
background-repeat: no-repeat;
background-size: cover!important;
position: relative;
width: 100%!important;
}




.olu{
    margin-top: 100px;
   padding-right: 100px;
    
}


.section{
    background-color: #f3f4f9;
    margin-top: 20px;
    background-size: cover;
    height: 700px;
}



#card3{

    height: 418px!important;
}




  #line{

    border-bottom: 3px solid green;
    width: 70px;

  }

  #my-pic{
    width: 100px;
  border-radius: 70%;
  }


 .content{
    display: flex;
    justify-content: center;
   
 }

 .my-test{
    padding-top: 50px;
 }


 .testmonials{
    padding: 0!important;
    margin: 0!important;
 }

 #row1{
    padding-top:  0px;
    margin-top: 100px;
 }

#what{
    padding-top: 70px;
}



.cta-section {
    max-width: 100%;
    background-image: url("{{asset('img/bg.png')}}");
    max-height: 100%;
    height: 500px;
    background-size:cover;
    margin-top: 10%;
    color: white;
}


.cta-text{
   padding-top: 20%;
}





   </style>


</head>
<body>


    @yield('content')
    @include('templates.footer')




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>