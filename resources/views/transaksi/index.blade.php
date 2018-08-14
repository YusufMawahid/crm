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
                    <h4 class="header2">1. Choose Location</h4>
                    <div class="row">
                      <form class="col s12" action="step1/post" method="POST">
                      {{ csrf_field() }}
                        <div class="row">
                                        <div class="input-field col s6">
                                            <select id="mySelect" name="lokasi" onchange="myFunction()" required>
                                              <option value="" disabled selected>Choose your option</option>
                                              <option value="Misool">Misool</option>
                                              <option value="Star Lagoon">Star Lagoon</option>
                                              <option value="Batu Pensil">Batu Pensil</option>
                                              <option value="Wayag">Wayag</option>
                                              <option value="Desa Arborek">Desa Arborek</option>
                                              <option value="Pasir Timbul">Pasir Timbul</option>
                                              <option value="Desa Wisata Sauwandarek">Desa Wisata Sauwandarek</option>
                                              <option value="Desa Sawinggrai">Desa Sawinggrai</option>
                                              <option value="Pianemo">Pianemo</option>
                                              <option value="Air Terjun Batanta">Air Terjun Batanta</option>
                                            </select>
                                            <label>Select Location</label>
                                        </div>

                                        <div id="spot_misool">
                                          <div class="input-field col s6">
                                          <select id="spot" multiple name="spot[]" class="limit" data-limit="3" required>
                                              <option value="" disabled selected>Choose your option</option>
                                              <option value="Pantai Namlol">Pantai Namlol</option>
                                              <option value="Laguna Balbulol">Laguna Balbulol</option>
                                              <option value="Pantai Farondi">Pantai Farondi</option>
                                              <option value="Pulau Banos">Pulau Banos</option>
                                            </select>
                                            <label>Select Spot in Misool</label>
                                          </div>
                                        </div>

                                        <div id="spot_star_lagoon">
                                          <div class="input-field col s6">
                                          <select id="spot" multiple name="spot[]" class="limit" data-limit="3" required>
                                              <option value="" disabled selected>Choose your option</option>
                                              <option value="Pantai Namlol">Pantai Star</option>
                                              <option value="Laguna Balbulol">Pantai Lagoon</option>
                                              <option value="Pantai Farondi">Star Lagoon</option>
                                              <option value="Pulau Banos">Star Lagoons</option>
                                            </select>
                                            <label>Select Spot in Star Lagoon</label>
                                          </div>
                                        </div>
                            
                          </div>

                         <div id="tanggal">
                                        <div class="row">
                                        <div class="input-field col s12">
                                         <div id="input-date-picker" class="section">         
                                  <div class="row">
                                    <div class="col s12 m4 l3">
                                      <p>If date cannot be clicked, it means that it has reached the maximum limit</p>          
                                    </div>
                                    <div class="col s12 m8 l9">
                                      <input type="date" name="tanggal" class="datepicker" required>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        <div class="row">
                          <div class="input-field col s12">
                            <input id="name" name="sim" type="text" required>
                            <label for="first_name">Dive License</label>
                          </div>
                        </div>
<!-- 
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" >
                              </button>
                            </div>
                          </div> -->

                            <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="btn cyan waves-effect waves-light right btn-warning-confirm">NEXT
                                <i class="mdi-content-send right"></i></button>
                            </div>

                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">


        $(document).ready(function() {

          var last_valid_selection = null;

          $('#spot').change(function(event) {

            if ($(this).val().length > 3) {

              $(this).val(last_valid_selection);

            } else {
              last_valid_selection = $(this).val();
            }
          });
        });

          $('.btn-warning-confirm').click(function(){
          swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false
          },
          function(){
            swal("Deleted!", "Your imaginary file has been deleted!", "success");
          });
        });
        </script>
 <script>
      $("#spot_misool").hide();
      $("#spot_star_lagoon").hide();


   
function myFunction() {
    var x = document.getElementById("mySelect").value;
    
    if (x == "Misool") {
    document.getElementById("spot_misool");
    $("#spot_misool").show();
    $("#spot_star_lagoon").hide();

    }
    else if(x == "Star Lagoon") {
      document.getElementById("spot_star_lagoon");
    $("#spot_misool").hide();
    $("#spot_star_lagoon").show();

    }
}

</script>
<script>
    $( document ).ready(function() {
       $('.datepicker').pickadate({
          format: 'yyyy-mm-dd',
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>


@endsection