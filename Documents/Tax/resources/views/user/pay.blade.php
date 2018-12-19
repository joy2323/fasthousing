@extends('/layout.master')
@section('title', 'Payment')
@section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Tax Payment</h3>
            
              
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <!-- <p>
                <div>
                    Lagos Eyo Print Tee Shirt
                    ₦ 2,950
                </div>
            </p> -->
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Email<span class="required">*</span></label>
              <div class="col-lg-8">
                <input type="form-control" style="width:70%;" name="email" value=""> {{-- required --}}
              </div>
            </div>
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Company Name <span class="required">*</span></label>
              <div class="col-lg-8">
              <input type="form-control" style="width:70%;" name="orderID" value="">
              </div>
            </div>
            <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Amount <span class="required">*</span></label>
              <div class="col-lg-8">
              <input type="form-control" style="width:70%;" name="amount" value=""> {{-- required in kobo --}}
              </div>
            </div>
            <div class="form-group ">
              <label for="month" class="control-label col-lg-2">Month<span class="required">*</span></label>
              <div class="col-lg-8">
              <select class="form-control form-control-lg" style="width:70%;" name="month">
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
              </select> 
              <!-- <input type="form-control" style="width:70%;" name="quantity" value=""> -->
              </div>
            </div>
            <!-- <div class="form-group ">
              <label for="cname" class="control-label col-lg-2">Metadata <span class="required">*</span></label>
              <div class="col-lg-8">
              <input type="hidden" style="width:70%;" name="metadata" value="tax">
              </div>
            </div> -->
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            <!-- {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}} -->

             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


            <p class="form-group">
              <div class="col-lg-8">
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
              </div>
            </p>
          </div>
        </div>
</form>
       
      </div>
    </div>
  </section>
</section>
@endsection