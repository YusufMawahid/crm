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
                    <h4 class="header2">2. Payment</h4>
                    <div class="row">
                      <form class="col s12" action="step2/post" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                       <div class="row">
                        <div class="input-field col s12">
                          <img src="images/papua.jpg" class="responsive-img prefix">
                          <input id="dengan-rupiah" type="text" name="pembayaran" required>
                          <label for="first_name">Papua Bank Payment</label>
                        </div>
                      </div>
              <br>
            <div class = "row">
               <div class="input-field col s12">
               <div class = "file-field input-field">
                  <div class = "btn cyan darken-2">
                     <span>Browse</span>
                     <input type="file" name="upload_pembayaran" multiple />
                  </div>
                  
                  <div class = "file-path-wrapper">
                     <input class = "file-path validate" type = "text"
                        placeholder = "UPLOAD PAYMENT PROOF" name="upload_pembayaran" required />

                  </div>
              </div>
              </div>    
            </div>

                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">NEXT
                                <i class="mdi-content-send right"></i>
                              </button>

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
var dengan_rupiah = document.getElementById('dengan-rupiah');
  dengan_rupiah.addEventListener('keyup', function(e)
  {
    dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
  });
  
  dengan_rupiah.addEventListener('keydown', function(event)
  {
    limitCharacter(event);
  });
  
  /* Fungsi */
  function formatRupiah(bilangan, prefix)
  {
    var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(','),
      sisa  = split[0].length % 3,
      rupiah  = split[0].substr(0, sisa),
      ribuan  = split[0].substr(sisa).match(/\d{1,3}/gi);
      
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
  
  function limitCharacter(event)
  {
    key = event.which || event.keyCode;
    if ( key != 188 // Comma
       && key != 8 // Backspace
       && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
       && (key < 48 || key > 57) // Non digit
       // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
      ) 
    {
      event.preventDefault();
      return false;
    }
  }
  function limitCharacter(event)
  {
    key = event.which || event.keyCode;
    if ( key != 188 // Comma
       && key != 8 // Backspace
       && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
       && (key < 48 || key > 57) // Non digit
       // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
      ) 
    {
      event.preventDefault();
      return false;
    }
  }
</script>
<script>

   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
</script>
@endsection