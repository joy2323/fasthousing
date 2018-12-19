@extends('/layout.master')
@section('title', 'Companies Profile')
@section('content')
<section id="main-content">
      <section class="wrapper">
        <div class="row mb-4">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Company Form Validation</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{URL('user/users_home')}}">Home</a></li>
              <li><i class="icon_document_alt"></i>Form</li>
              
            </ol>

<table class="table table-responsive">
    <thead>
        <tr>
            
            <th>Company Name</th> 
            <th>Company Address</th>
            <th>Email</th>
            <th>Company Website</th>
            <th>Bank Name</th>
            <th>Account Number</th>
            <th>Phone No</th>
            <th>Feedback</th>
            
        </tr>
    </thead> 
    <tbody>
    @if(isset($profile->profile))
    
        <tr>
        
            <td>{{ $profile->profile->company_name }}</td>
            <td>{{ $profile->profile->company_address }}</td>
            <td>{{ $profile->profile->email }}</td>
            <td>{{ $profile->profile->website }}</td>
            <td>{{ $profile->profile->bank_name }}</td>
            <td>{{ $profile->profile->account_number }}</td>
            <td>{{ $profile->phone_no }}</td>
            <td>{{ $profile->profile->feedback }}</td>
           
        </tr>
        @else
        <h4>You don't have Profile Information Yet</h4>
        </tbody>
    </table>
    <a href="{{route('c', Auth::user()->id)}}" class="btn btn-primary ml-4" role="button">Create Profile</a>
    
@endif      
        <a href="{{route('e', Auth::user()->id)}}" class="btn btn-primary ml-4" role="button">Edit Profile</a>
            </div>
        </div>
    </section>
</section>


@endsection