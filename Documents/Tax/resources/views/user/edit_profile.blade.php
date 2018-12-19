@extends('/layout.master')
@section('title', 'Edit Companies Profile')
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
                        <input class="form-control"  name="company_name" type="text" value="{{ $profile->company_name}}" required />
                      </div>
                    </div>
                    
                    
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Company Address <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="caddres" name="company_address" type="text" value="{{$profile->company_address}}"  required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Company E-Mail <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control " id="cemail" type="company_email" name="email" value="{{$profile->email}}"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Website</label>
                      <div class="col-lg-8">
                        <input class="form-control " id="curl" type="url" name="website"  value="{{$profile->website}}" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Bank Name<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="subject" name="bank_name"  type="text" required value="{{$profile->bank_name}}"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Account Number <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="caddres" name="account_number"  type="number" value="{{$profile->account_number}}"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cnumber" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="cnumber" name="phone_no" type="text" value="{{$profile->phone_no}}"  required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                      <div class="col-lg-8">
                        <textarea class="form-control " id="ccomment" name="feedback" value="{{$profile->feedback}}" ></textarea>
                      </div>
                    </div>

                    </div>
                    <div class="form-group mt-4">
                      <label for="image" class="mt-4"></label>
                      <input type="file"  name="images" value="{{$profile->images}}" >         
                    </div>
                    <div class="form-group mt-5">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary mr-4" type="submit">Cancel</button>
                        <a href="" class="btn btn-primary ml-4" role="button">Update Profile</a>
                      </div>
                    </div>
                    

                    
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        
        <!-- page end-->
      </section>
    </section>





@endsection