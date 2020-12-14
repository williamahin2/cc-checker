

<!-- saved from url=(0038)https://chkfull24hr.000webhostapp.com/ -->
<html>
<!-- Mirrored from editfly-chk.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Oct 2018 02:18:04 GMT -->
<!-- Added by HTTrack -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!-- /Added by HTTrack -->
  <link rel="icon" type="image/png" href="./logo.png">
  <title id="title">CROSSFIRE CC CHECKER</title>
  <meta name="description" content="">
  <meta name="robots" content="all,follow">
  <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="arquivos/bootstrap.min.css">
  <script src="arquivos/jquery.min.js"></script>
  <link rel="stylesheet" href="arquivos/font-awesome.min.css">
  <link rel="stylesheet" href="arquivos/fontastic.css">
  <link rel="stylesheet" href="arquivos/css.css">
  <link rel="stylesheet" href="arquivos/style.default.premium.css" id="theme-stylesheet">
  <link id="new-stylesheet" rel="stylesheet">
  <link rel="stylesheet" href="arquivos/custom.css">


  <script>
    var audio = new Audio('blop.mp3');
    $(document).ready(function() {
      $('#testar').attr('disabled', null);
      $('#testar').click(function() {
        audio.play();

        var line = $('#list').val().split('\n');
        var total = line.length;
        var ap = 0;
        var rp = 0;
        var st = 'Aguardando...';
        $('#carregadas').html(total);

        $('#status').html(st);
        line.forEach(function(value) {
          var list = value.split('|');
          var sec = $("#sec").val();
          var cc = list[0];
          var mes = list[1];
          var ano = list[2];
          var cvv = list[3];
          var ajaxCall = $.ajax({
            url: 'apielo.php',
            type: 'GET',
            data: 'lista=' + value + '&sec=' + sec,
            beforeSend: function() {
              $('#stop').attr('disabled', null);
              $('#testar').attr('disabled', 'disabled');
              var st = 'Testando...';
              $('#status').html(st);

            },

            success: function(data) {
              if (data.indexOf("Aprovada") >= 0) {
                $("#lives").val(data + "\n" + $("#lives").val());
                ap = ap + 1;
                document.getElementById("lives").innerHTML += data + "";
                audio.play();
                removelinha();

                function escondelive() {
                  $('#lives').toggle(200, function() {
                    if ($(this).is(':visible')) {
                      $('#btn_live').html('<i class="fa fa-minus-square"></i>');
                    } else {
                      $('#btn_live').html('<i class="fa fa-plus-square"></i>');
                    }
                  });
                }
              } else {
                $("#dies").val(data + "\n" + $("#dies").val());

                rp = rp + 1;
                document.getElementById("employe").innerHTML += data + "";
                removelinha();

                function esconderdie() {
                  $('#dies').toggle(200, function() {
                    if ($(this).is(':visible')) {
                      $('#escondedie').html('<i class="fa fa-minus-square">');
                    } else {
                      $('#escondedie').html('<i class="fa fa-plus-square">');
                    }
                  });
                }

              }
              var fila = parseInt(ap) + parseInt(rp);

              $('#cLive').html(ap);

              $('#cDie').html(rp);
              $('#total').html(fila);
              var result = (fila / total) * 100;
              $('#pct').html(result);
              $('#title').html('[' + fila + '/' + total + '] 𝗡𝗜𝗡𝗝𝗔 𝗖𝗛𝗘𝗖𝗞𝗘𝗥');
              document.getElementById("progreso").style.width = result + "%";
              if (fila == total) {
                $('#testar').attr('disabled', null);
                $('#stop').attr('disabled', 'disabled');
                audio.play();
                var st = 'Finalizado';


                $('#status').html(st);

              }

            }

          });
          $('#stop').click(function() {
            ajaxCall.abort();
            $('#testar').attr('disabled', null);
            $('#stop').attr('disabled', 'disabled');
            var st = 'Pausado...';
            $('#status').html(st);
          });
        });
      });
    });

    function stopado() {
      var lines = $("#list").val().split('\n');
      lines.splice(0, 1);
      $("#list").val(lines.join("\n"));
    }

    function removelinha() {
      var lines = $("#list").val().split('\n');
      lines.splice(0, 1);
      $("#list").val(lines.join("\n"));
    }
  </script>
  <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      -webkit-animation: chartjs-render-animation 0.001s;
      animation: chartjs-render-animation 0.001s;
    }
  </style>
  <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    @keyframes chartjs-render-animation {
      from {
        opacity: 0.99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      -webkit-animation: chartjs-render-animation 0.001s;
      animation: chartjs-render-animation 0.001s;
    }
  </style>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #FFF;
  color:#333;
}

.topnav a {
  float: right;
  display: block;
  color: #333;
  text-align: center;
  padding: 29px 23px;
  text-decoration: none;
  font-size: 18px;
}

.topnavhead {
  float: left;
  display: block;
  color: #333;
  text-align: center;
  padding: 21px 21px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #54E69D;
  color: black;
}

.topnavac {
  background-color: #796AEE;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>



<style type="text/css">
  body {

    background: url('image/17580.jpg') no-repeat center center fixed;
    background-size: cover;

    background-size: 100% 100%;
    background-repeat: repeat;
    background-color: #101110;
  }
</style>

<body>
<div class="topnav" id="myTopnav">
    <span class="topnavhead" id="demo"><b><img alt="Image placeholder" style="
    display: inline-block;margin-right: 5px; margin-left: 1px;padding-top: 0px;padding-bottom: 0px; height: 40px; width: 43px;" src="logo.png"> Crossfire Checker</b></span>
      <a href="skcheck.php" >SK Checker</a>
        <a href="skgen.php">SK Generator</a>
        <a href="CCGen.php">CC Generator</a>
  <a href="checker.php" class="topnavac" style="color: white">CC Checker</a>



  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<section class="dashboard-header">
    <div class="container-fluid">
      <div class="row">

        <div class="statistics col-lg-3 col-s12">
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-green"><i style="padding-top: 25%;" class="fa fa-check"></i></div>
            <div class="text"><strong id="cLive">0</strong><br><small>Approved</small></div>
          </div>
          <div style="line-height:130%;">
    <br>
</div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-red"><i style="padding-top: 25%;" class="fa fa-close"></i></div>
            <div class="text"><strong id="cDie">0</strong><br><small>Declined</small></div>
          </div>
          <div style="line-height:130%;">
    <br>
</div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-info"><i style="padding-top: 25%;" class="fa fa-battery-full"></i></div>
            <div class="text"><strong id="carregadas">0</strong><br><small>Total</small></div>
          </div>
          <div style="line-height:90%;">
    <br>
</div>
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <div class="icon bg-primary"><i style="padding-top: 25%;" class="fa fa-handshake-o "></i></div>
            <div class="text"><strong id="total">0</strong><br><small>Tested</small></div>
          </div>
        </div>

        <div class="statistics col-lg-9 col-12">
          <div class="statistic bg-white has-shadow">
            <blockquote class="blockquote mb-0 card-body">
              <center>
                <textarea rows="7" placeholder="Put Your Cards Here" class="form-control" id="list" style="resize: none; outline: 0; text-align: center; width: 100%;"></textarea>
                <br>
                <div class="md-form">
                <textarea type="text" style="text-align: center; maxlength="700"  
id="sec" class="form-control" rows="1" placeholder="sk_live_xxxxxxx"></textarea><br>
</div>
                <div class="progress">
                  <div role="progressbar" id="progreso" style="height: 100%; border: solid 1px purpul;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-primary"></div>
                </div><br>




                <button id="testar" style="float: left; width: 48%;" class="btn btn-primary">
                  <i class="fa fa-play"></i> Start</button>

                <button disabled="" id="stop" style="float: left; width: 48%; margin-left: 3%;" class="btn btn-danger"><i class="fa fa-pause"></i> Stop</button><br>
              </center>
            </blockquote>
          </div>
        </div>

        <div style="margin-top: 30px;" class="statistics col-lg-20 col-12">
          <div class="articles card">
            <div class="card-close">
              <div class="dropdown">

                <span class="pull-right">
                  <button type="button" class="btn btn-xs btn-danger" onclick="document.getElementById('lives').innerHTML = ''"><i class="fa fa-close"> Delete </i></font></button>
                </span>
              </div>
            </div>

            <div class="card-header d-flex align-items-center">
              <h2 class="h3">Approved <i class="fa fa-check"></i></h2>

            </div>

            <div class="card-body no-padding bg-white">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Card</th>
                    <th scope="col">Informations</th>
                    <th scope="col">Gate</th>
                  </tr>
                </thead>
                <tbody>
                  </tr>
                <tbody id="lives">


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 10px;" class="statistics col-lg-15 col-15">
        <div class="articles card">
          <div class="card-close">
            <div class="dropdown">

              <span class="pull-right">
                <button type="button" class="btn btn-xs btn-danger" onclick="document.getElementById('employe').innerHTML = ''"><i class="fa fa-close"> Delete </i></font></button>
              </span>
            </div>
          </div>

          <div class="card-header d-flex align-items-center">
            <h2 class="h3">Declined <i class="fa fa-close"></i></h2>

          </div>
          <div class="card-body no-padding bg-transparent">
            <table class="table table-bordered">
              <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Card</th>
                    <th scope="col">Informations</th>
                    <th scope="col">Gate</th>
                </tr>
              </thead>
              <tbody>
                </tr>
              <tbody id="employe">


              </tbody>
            </table>
          </div class="bg-white">
        </div class="bg-white">
      </div class="bg-white">
    </div class="bg-white">

    </div class="bg-white">

    </div class="bg-white">

  </section>


<footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            © 2020 made by
            <a href="http://t.me/anonymouswwdc"> Anonymous</a>
          </div>
        </div>
      </footer>





  <script src="arquivos/jquery.min(1).js"></script>
  <script src="arquivos/popper.min.js"> </script>
  <script src="arquivos/bootstrap.min.js"></script>
  <script src="arquivos/jquery.cookie.js"> </script>
  <script src="arquivos/Chart.min.js"></script>
  <script src="arquivos/jquery.validate.min.js"></script>
  <script src="arquivos/charts-home.js"></script>


  <script src="arquivos/messenger-theme-flat.js"> </script>
  <script src="arquivos/home-premium.js"> </script>

  <script src="arquivos/front.js"></script>
</body>
</html>
