@extends('layout.adminmaster')
@section('title', 'Companies Profile')
@section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Registered Companies</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{URL('user/users_home')}}">Home</a></li>
              <li><i class="icon_document_alt"></i>Form</li>      
            </ol>
          </div>
        </div>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>Companies Name</th> 
            <th>Companies Address</th>
            <th>Companies Email</th>
            <th>Companies Website</th>
            <th>Bank Name</th>
            <th>Account Number</th>
            <th>Companies Phone Number</th>
            <th>Feedbacks</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($profiles as $profile)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$profile->profile->company_name}}</td>
            <td>{{$profile->profile->company_address}}</td>
            <td>{{$profile->profile->website}}</td>
            <td>{{$profile->profile->bank_name}}</td>
            <td>{{$profile->profile->account_name}}</td>
            <td>{{$profile->profile->phone_no}}</td>
            <td>{{$profile->profile->feedback}}</td>
            <td>{{$profile->profile->images}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
    </section>
</section>