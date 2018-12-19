@extends('/layout.master')
@section('title', 'Companies Profile')
@section('content')


<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Company Form Validation</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{URL('user/users_home')}}">Home</a></li>
              <li><i class="icon_document_alt"></i>Form</li>
              
            </ol>
          </div>
        </div>
        @if(!isset($profile->profile))
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
            <header class="panel-heading">
               Please Fill Correctly
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="Post" enctype="multipart/form-data">
                  @csrf
                  
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Company Name <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="cname" name="company_name" type="text" required />
                      </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Company Address <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="caddres" name="company_address" type="text" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Company E-Mail <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control " id="cemail" type="company_email" name="email" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Website</label>
                      <div class="col-lg-8">
                        <input class="form-control " id="curl" type="url" name="website" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Bank Name<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="subject" name="bank_name"  type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Account Number <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="caddres" name="account_number"  type="number" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cnumber" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="cnumber" name="phone_no" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                      <div class="col-lg-8">
                        <textarea class="form-control " id="ccomment" name="feedback"></textarea>
                      </div>
                    </div>

                    </div>
                    <div class="form-group mt-4">
                      <label for="image" class="mt-4"></label>
                      <input type="file"  name="images">         
                    </div>
                    <div class="form-group mt-5">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary mr-4 mt-3" type="submit">Submit</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                        
                      </div>
                    </div>
                    

                    
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        @else 
       
        <div class="col-md-8">
          <p> You have already Submitted</p>
          <a href="{{route('e', Auth::user()->id)}}" class="btn btn-primary ml-4" role="button">Edit Profile</a>
         <a href="{{route('vi', Auth::user()->id)}}" class="btn btn-primary mr-5" role="button">View Profile</a>
        </div>

        @endif
        <!-- page end-->
      </section>
    </section>





@endsection