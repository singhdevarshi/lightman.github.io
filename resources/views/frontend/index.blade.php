@extends('layouts.frontend')

@section('title')
    home
@endsection



@section('content')
    
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
      <div class="container">
        <div class="section text-center">
          {{-- <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title">Let&apos;s talk product</h2>
              <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.</h5>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-sm-2 ml-auto">
              <button type="button" class="btn btn-primary btn-link" data-toggle="modal" data-target="#photographerModal">        
                 <img src="../vendor/assets/img/faces/camera1.png" alt="Rounded Image" class="rounded img-fluid">
                 <h4>Photographer</h4>
              </button>
            </div>
            <div class="col-sm-2 ml-auto">
              <button type="button" class="btn btn-primary btn-link" data-toggle="modal" data-target="#electricianModal">
                <img src="../vendor/assets/img/faces/electrician.png" alt="Circle Image" class="rounded img-fluid">
                <h4>Electrician</h4>  
              </button>
            </div>
            <div class="col-sm-2 ml-auto">
              <button type="button" class="btn btn-primary btn-link" data-toggle="modal" data-target="#plumberModal">
                <img src="../vendor/assets/img/faces/plumber.png" alt="Raised Image" class="rounded img-fluid">
                <h4>Plumber</h4>
              </button>
            </div>
            <div class="col-sm-2 ml-auto">
              <button type="button" class="btn btn-primary btn-link" data-toggle="modal" data-target="#carpenterModal">
                <img src="../vendor/assets/img/faces/carpenter.png" alt="Thumbnail Image" class="rounded img-fluid">
                <h4>Carpenter</h4>
              </button>
            </div>
            <div class="col-sm-2 ml-auto">
              <a type="button" class="btn-link" data-toggle="modal" data-target="#repairModal">
                <img src="../vendor/assets/img/faces/repair2.png" alt="Rounded Image" class="rounded img-fluid">
                <h4>Appliances Repair</h4>
              </a>
            </div>
            <div class="col-sm-2 ml-auto">
              <button type="button" class="btn btn-primary btn-link" data-toggle="modal" data-target="#driverModal">
                <img src="../vendor/assets/img/faces/driver.png" alt="Rounded Image" class="rounded img-fluid">
                <h4>Driver</h4>
              </button>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-sm-2">
              <h4>Rounded Image</h4>
              <img src="../vendor/assets/img/faces/driver.png" alt="Rounded Image" class="rounded img-fluid">
            </div>
            <div class="col-sm-2 ml-auto">
              <h4>Circle Image</h4>
              <img src="../vendor/assets/img/faces/electrician.png" alt="Circle Image" class="rounded-circle img-fluid">
            </div>
            <div class="col-sm-2 ml-auto">
              <h4>Rounded Raised</h4>
              <img src="../vendor/assets/img/faces/plumber.png" alt="Raised Image" class="img-raised rounded img-fluid">
            </div>
            <div class="col-sm-2 ml-auto">
              <h4>Circle Raised</h4>
              <img src="../vendor/assets/img/faces/carpenter.png" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
            </div>
          </div> --}}
          <div class="features">
            <div class="row">
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-info">
                    <i class="material-icons">chat</i>
                  </div>
                  <h4 class="info-title">Free Chat</h4>
                  <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-success">
                    <i class="material-icons">verified_user</i>
                  </div>
                  <h4 class="info-title">Verified Users</h4>
                  <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info">
                  <div class="icon icon-danger">
                    <i class="material-icons">fingerprint</i>
                  </div>
                  <h4 class="info-title">Fingerprint</h4>
                  <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section text-center">
          <h2 class="title">Here is our team</h2>
          <div class="team">
            <div class="row">
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="../vendor/assets/img/faces/avatar.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <h4 class="card-title">Gigi Hadid
                      <br>
                      <small class="card-description text-muted">Model</small>
                    </h4>
                    <div class="card-body">
                      <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="../vendor/assets/img/faces/christian.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <h4 class="card-title">Christian Louboutin
                      <br>
                      <small class="card-description text-muted">Designer</small>
                    </h4>
                    <div class="card-body">
                      <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="team-player">
                  <div class="card card-plain">
                    <div class="col-md-6 ml-auto mr-auto">
                      <img src="../vendor/assets/img/faces/kendall.jpg" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                    </div>
                    <h4 class="card-title">Kendall Jenner
                      <br>
                      <small class="card-description text-muted">Model</small>
                    </h4>
                    <div class="card-body">
                      <p class="card-description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                      <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section section-contacts">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="text-center title">Work with us</h2>
              <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
              <form class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Your Name</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Your Email</label>
                      <input type="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                  <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-4 ml-auto mr-auto text-center">
                    <button class="btn btn-primary btn-raised">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection



@section('scripts')
    
@endsection