@extends('layouts.vendor')


@section('title')
    Vendor | Detail
@endsection


@section('content')

  <div class="py-5 text-center">
        {{-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> --}}
        <h2>Detail form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>

  <div class="row">
    {{-- <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div> --}}
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Vendor Details</h4>
      <form class="needs-validation" method="POST" action="/save-vdetail" enctype= "multipart/form-data"  novalidate>
        {{ csrf_field() }}
          <div class=" mb-3">
            <label for="firstName">Full Name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" name="fullname" required>
            <div class="invalid-feedback">
              Enter Fullname is required.
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="username">Username <span class="text-muted">(Optional)</span></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
              {{-- <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
              </div> --}}
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="ID Proof Type">Gender</label>
            <select class="custom-select d-block w-100" name="gender" required>
              <option value="" disabled selected>Choose...</option>
              <option value="{{ 'Male' }} ">Male</option>
              <option value="{{ 'Female' }} ">Female</option>
            </select>
            <div class="invalid-feedback">
              Gender required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Vendor Type</label>
          <select class="custom-select d-block w-100" name="vendortype" required autocomplete="vendortype" autofocus>
            <option value="" disabled selected>Choose...</option>
            <option value="{{ 'Electrician' }} ">Electrician</option>
            <option value="{{ 'Driving License' }} ">Carpenter</option>
            <option value="{{ 'Plumber' }} ">Plumber</option>
            <option value="{{ 'Dreiver' }} ">Dreiver</option>
            <option value="{{ 'Mechanic' }} ">Mechanic</option>
          </select>
          <div class="invalid-feedback">
            Select Vender Type .
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required autocomplete="address" autofocus>
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">State</label>
            <select class="custom-select d-block w-100" id="country" name="state" required>
              <option value="" disabled selected>Choose...</option>
              <option value="{{ 'Uttar Pradesh' }}">Uttar Pradesh</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid state.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">City</label>
            <select class="custom-select d-block w-100" id="state" name="city" required>
              <option value="" disabled selected>Choose...</option>
              <option value="{{ 'Varanasi' }}">Varanasi</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
          
        </div>
        <div class="col-md-6 mb-3">
          <label for="ID Proof Type">ID Proof Type</label>
          <select class="custom-select d-block w-100" name="id-proof-type" required>
            <option value="" disabled selected>Choose...</option>
            <option value="{{ 'Adhar Card' }} ">Adhar Card</option>
            <option value="{{ 'Driving License' }} ">Driving License</option>
            <option value="{{ 'Pan Card' }} ">Pan Card</option>
          </select>
          <div class="invalid-feedback">
            ID Proof required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="ID Proof Image">ID Proof No.</label>
          <input type="text" class="form-control" name="id-proof-no" placeholder="" required>
          <div class="invalid-feedback">
            Enetr ID number.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="ID Proof Image">ID Proof Image</label>
          <input type="file" class="" name="id-proof-image" placeholder="" required>
          <div class="invalid-feedback">
           ID proof image required.
          </div>
        </div>
        {{-- <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4"> --}}
        <button class="btn btn-primary btn-lg btn-block col-md-8 mb-3" type="submit">Save Profile</button>
      </form>
    </div>
  </div>
  @endsection


  @section('scripts')
      
  @endsection