<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Geolocalización</title>
    <!-- Importacion Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <!-- Importacion de bootstrap -->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <!-- importacion de apide google <map></map> -->
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXV6fJ3AmkKcvYoxYWcAyQ5Y1ddJwSD68&libraries=places&callback=initMap" >
    </script>

  </head>
  <body>
    <div class="well">
      <h1 class="text-center">
        <i class="glyphicon glyphicon-map-marker"></i><b>App con Geolocalización</b></h1>
          <h3 align="center">By: Jhonatan alarcon</h3>
    </div>
    <div class="row">
      <h3 >mapa1</h3>
      <div class="col-md-6">
          <div id="mapa1" style="height:200px; width:100%; border:2px solid black;">
          </div>
      </div>
      <h3 >mapa2</h3>
      <div class="col-md-6">
          <div id="mapa2" style="height:200px; width:100%; border:2px solid black;">
          </div>
      </div>
      <h3 >mapa3</h3>
      <div class="col-md-6">
          <div id="mapa3" style="height:200px; width:100%; border:2px solid black;">
          </div>
      </div>
      <h3 >mapa4</h3>
        <div class="col-md-6">
            <div id="mapa4" style="height:200px; width:100%; border:2px solid black;">
            </div>
      </div>
      <h3>mapa5</h3>
      <div class="col-md-6">
          <div id="mapa5" style="height:200px; width:100%; border:2px solid black;">
          </div>
    </div>
    </div>
    <!-- primer diseño -->
    <script type="text/javascript">
        function initMap(){
          alert("API IMPORTADO EXITOSAMENTE");
          //Definiendo una coordenada 1
          var latitud_longitud1=new google.maps.LatLng(-0.491314,-78.542677);
          //Definiendo una coordenada 2
          var latitud_longitud2=new google.maps.LatLng(-0.9182931810631255,-78.63150652178443);
          // definir una cordenada 3
          var latitud_longitud3=new google.maps.LatLng(-1.254054200345224,-78.62470951281588);
          //Definiendo una coordenada 4
          var latitud_longitud4=new google.maps.LatLng(-0.9677161709396543,-80.70891378518398);
          //Definiendo una coordenada 5
          var latitud_longitud5=new google.maps.LatLng(-3.9677161709396543,-90.70891378518398);
          //creando el mapa 1
          var mapa1=new google.maps.Map(
            document.getElementById('mapa1'),{
                center:latitud_longitud1,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
              }
            );
            //creando el mapa 2
          var mapa2=new google.maps.Map(
            document.getElementById('mapa2'),{
              center:latitud_longitud2,
              zoom:15,
              mapTypeId:google.maps.MapTypeId.ROADMAP
            }
          );
          //creando el mapa 3
          var mapa3=new google.maps.Map(
            document.getElementById('mapa3'),{
                center:latitud_longitud3,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
              }
            );
            //creando el mapa 4
            var mapa4=new google.maps.Map(
              document.getElementById('mapa4'),{
                center:latitud_longitud4,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
              }
          );
          //creando el mapa 5
          var mapa5=new google.maps.Map(
            document.getElementById('mapa5'),{
              center:latitud_longitud5,
              zoom:15,
              mapTypeId:google.maps.MapTypeId.ROADMAP
            }
        );
          // creando un marcador 1
            var marcador1= new google.maps.Marker({
              position: latitud_longitud1,
              map:mapa1,
              title:"punto 1"
            });
            // crear marcador 2
            var marcador2= new google.maps.Marker({
              position: latitud_longitud2,
              map:mapa2,
              title:"punto 2"
            });
          // creando un mmarcador 3
            var marcador3= new google.maps.Marker({
              position: latitud_longitud3,
              map:mapa3,
              title:"punto 3"
            });
            // crear marcador 4
            var marcador4= new google.maps.Marker({
              position: latitud_longitud4,
              map:mapa4,
              title:"punto 4"
            });
            var marcador5= new google.maps.Marker({
              position: latitud_longitud5,
              map:mapa5,
              title:"punto 5"
            });
          }
    </script>

  </body>
</html>
