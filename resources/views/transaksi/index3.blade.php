   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
   <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
   <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->

   <!--  -->
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

   <!--  -->
   <link type="text/css" rel="stylesheet" href="css/prism.css"  media="screen,projection"/>
   <link type="text/css" rel="stylesheet" href="css/materialize-stepper.min.css"  media="screen,projection"/>
   <link type="text/css" rel="stylesheet" href="css/materialize-stepper.css"  media="screen,projection"/>


   <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
   <!-- <script src="./materialize-stepper.min.js"></script> -->
   <script src="js/prism.js"></script>
   <script src="https://rawgit.com/Kinark/Materialize-stepper/master/materialize-stepper.min.js"></script>

@extends('dashboard')
@section('content')

   <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
   <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script> -->

<div class="section col s12 m9 l10">

            <!--Basic Form-->
            <div id="basic-form" class="section">
              <div class="row">
                <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">3. Confirmation</h4>
                    <div class="row">
                      <form class="col s12" action="step2/post" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div id="blockquote" class="section">
                            <div class="row">
                                <div class="col s12 m8 l9">

                                        <!-- <blockquote> -->
                                          <ul id="profile-page-about-details" class="collection col s12">
                                          
                                          <li class="collection-item">
                                            <div class="row">
                                              <div class="col s5">
                                                <i class="mdi-action-face-unlock left"></i> Full Name
                                              </div>
                                              <div class="col s7 right-align"><strong>{{$user->first_name}} {{$user->last_name}}</strong></div>
                                            </div>
                                          </li>

                                          <li class="collection-item">
                                            <div class="row">
                                              <div class="col s5">
                                                <i class="mdi-communication-email left"></i> Email
                                              </div>
                                              <div class="col s7 right-align"><strong>{{$user->email}}</strong></div>
                                            </div>
                                          </li> 

                                          <li class="collection-item">
                                            <div class="row">
                                              <div class="col s5">
                                                <i class="mdi-communication-location-on left"></i> Location
                                              </div>
                                              <div class="col s7 right-align"><strong>{{$transaksi->lokasi}}</strong></div>
                                            </div>
                                          </li>

                                          <li class="collection-item">
                                            <div class="row">
                                              <div class="col s5">
                                                <i class="mdi-communication-location-on left"></i> Spot
                                              </div>
                                              <div class="col s7 right-align"><strong>{{$transaksi->spot}}</strong></div>
                                            </div>
                                          </li>

                                          <li class="collection-item">
                                            <div class="row">
                                              <div class="col s5">
                                                <i class="mdi-action-event left"></i> Date
                                              </div>
                                              <div class="col s7 right-align"><strong>{{$transaksi->tanggal}}</strong></div>
                                            </div>
                                          </li>

                                          <li class="collection-item">
                                            <div class="row">
                                              <div class="col s5">
                                                <i class="mdi-editor-attach-money left"></i> Payment
                                              </div>
                                              <div class="col s7 right-align"><strong>{{$transaksi2->pembayaran}}</strong></div>
                                            </div>
                                          </li>

                                          <li class="collection-item">
                                            <div class="row">
                                              <div class="col s6">
                                                <i class="mdi-image-crop-original left"></i> Payment Proof
                                              </div>
                                              <div class="col s6 right-align">
                                              <img src="{{asset('bukti_pembayaran/'.$transaksi2->upload_pembayaran)}}" class="responsive-img prefix">
                                              </div>
                                            </div>
                                          </li> 
                                          

                                          </ul>

                                        <!-- </blockquote> -->
                                </div>
                            </div>
                        </div>

                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">NEXT
                                <i class="mdi-content-send right"></i>
                              </button>

                              <a class="btn red darken-1 waves-effect waves-light left" href="{{url('delete_transaksi')}}">Cancel
                                <i class="mdi-action-delete left"></i>
                              </a>
                            </div>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <script type="text/javascript" src="js/custom-script.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>

   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
</script>
@endsection