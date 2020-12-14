
 <!DOCTYPE html>
<html lang="en">

<head>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <!-- /Added by HTTrack -->
  <link rel="icon" type="image/png" href="./logo.png">
  <title id="title">CROSSFIRE SK CHECKER</title>
  <meta name="description" content="">
  <meta name="robots" content="all,follow">
  <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="arquivos/bootstrap.min.css">
  <script src="arquivos/jquery.min.js"></script>
  <link rel="stylesheet" href="arquivos/font-awesome.min.css">

  <link rel="stylesheet" href="arquivos/fontastic.css">
  <link rel="stylesheet" href="arquivos/css">
  <link rel="stylesheet" href="arquivos/style.default.premium.css" id="theme-stylesheet">
  <link id="new-stylesheet" rel="stylesheet">
  <link rel="stylesheet" href="arquivos/custom.css">
  <script title="ajax do checker">
    function enviar() {
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
        var rp = 0;
    var rCredits;
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
                  Array.prototype.randomElement = function () {
                   return this[Math.floor(Math.random() * this.length)]
                   }
                   var pr = $("#proxy").val();
                   var MyArray = pr.split("\n");
                   var proxy = MyArray.randomElement();
                           $.ajax({
                        url: 'skchk.php?lista=' + value,
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("success")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }

                            $('#carregadas').html(total);

                            var fila = parseInt(ap) + parseInt(rp);
                            $('#cLive').html(ap);
                            $('#cDie').html(rp);
                            $('#total').html(fila);
                            $('#cLive2').html(ap);
                            $('#cDie2').html(rp);
            }
                    });
                }, 100 * index);
        });
    }

    function aprovadas(str) {
        $(".aprovadas").append(str);
    }
    function reprovadas(str) {
        $(".reprovadas").append(str);
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }

  function iloveyou(){
  alert('PEKPEK')}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){


    $("#bode").hide();
	$("#esconde").show();

	$('#mostra').click(function(){
	$("#bode").slideToggle();
	});

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode2").hide();
	$("#esconde2").show();

	$('#mostra2').click(function(){
	$("#bode2").slideToggle();
	});

});

</script>

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
    display: inline-block;margin-right: 5px; margin-left: 1px;padding-top: 0px;padding-bottom: 0px; height: 40px; width: 43px;" src="logo.png"> CrossFire Checker</b></span>
      
      <a href="skcheck.php" class="topnavac" style="color: white">SK Checker</a>
        <a href="skgen.php">SK Generator</a>
        <a href="CCGen.php">CC Generator</a>
  <a href="./checker.php" class="active">CC Checker</a>



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
      <center> <div class="row col-md-12">

  <div class="card-body">
<div class="md-form">
	<div class="col-md-12">
<center>  <div class="md-form">
    <span>Working:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
    <span>Dead:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
    <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0</span>
    <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
</div><br>

<textarea type="text" style="resize:none;outline:none;width:800px; height:310px;text-align: center;" id="lista" class="md-textarea form-control" rows="50" placeholder="FORMAT: sk_live_xxxxxxxxxxxxx" ></textarea>
<br>

<textareaclass="md-textarea form-control1" style="text-align: center;" rows="7" id="proxy" placeholder="PROXY:PORT"></textarea>
 </center>
</div>
<center>
 <button class="btn btn-primary" style="width: 18%; outline: none; width: 250px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;" id="testar" onclick="enviar()" >START</button>
</center><br>
</div>
</div>
</div>
<div class="col-md-12" style=" width:1052px;">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0; margin-top: 05px; margin-right: 03px;" >
	<button id="mostra" class="btn btn-primary" style="width: 90px; height: 30px; font-size:11px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);">SHOW/HIDE</button>
</div>
  <div class="card-body"><center>
    <h6 style="font-weight: bold; font-size:15px;" class="card-title">Live Keys - <span  id="cLive2" class="badge badge-success">0</span></h6>
    <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
</div>
  </div>
</div>
</div>
<div class="col-md-12" style=" width:1052px;">
<div class="card">
	<div style="position: absolute;
        top: 0;
        right: 0; margin-top: 05px; margin-right: 05px;">
	<button id="mostra2" class="btn btn-primary" style="width: 90px; height: 30px; font-size:11px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold; font-size:15px;" class="card-title">Dead Keys - <span id="cDie2" class="badge badge-danger">0</span></h6>
    <div id="bode2"><span id=".reprovadas" class="reprovadas"></span>
    </div>
  </div>
</div>
</div>
  </div>
</div>
</div>
</center><br><br>
     <footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            © 2020 made by
            <a href="http://t.me/ninjanaveen"> NINJA NAVEEN</a>
          </div>
        </div>
      </footer>
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        
          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>

</html>
