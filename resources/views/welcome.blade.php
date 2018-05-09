@extends('layouts.app')
@section('content')            
            
            



    <!--intro static-->
    <section class="intro_section ls ms">

            <img src="{{asset('images/01-envios-a-todo-el-mundo.jpg')}}" alt="TransUP mensajería y paquetería">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="slide_description_wrapper">
                                            <div class="slide_description text-left">
                                            
                                                <div class="intro-layer" data-animation="fadeInUp">
                                                    <h3>
                                                        Envíos a todo el
                                                        <span class="highlight hidden-x">pais</span> al
                                                    </h3>
                                                    <h2>
                                                        Mejor Precio
                                                    </h2>
                                                 </div>
                                                
                                                
                                                 <!--<div class="intro-layer hidden-xs" data-animation="fadeInUp">
                                                    <p class="lightgrey"><span class="bold">TransUP.</span> Empresa con el mejor servicio de mensajería y paquetería.</p>
                                                 </div>-->
                                                 
                            
                         
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </section>
    <section id="subscribe" class="section_subscribe cs section_padding_top_65 section_padding_bottom_65 table_section table_section_md columns_padding_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="margin_0">Cotiza y obtén un
                        <span class="grey">10%</span> de descuento en tu primer envío.
                    </h3>
                    <a class="theme_button inverse topmargin_30" href="#cotizador">Cotizar</a>  
                </div>
            </div>
        </div>
    </section>
    <section id="valores" class="ms overflow_hidden half_section section_padding_top_100 section_padding_bottom_100 columns_padding_80 light_bg_color">
        <div class="image_cover image_cover_left">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('images/half_image.jpg')}}" alt="Misión y Visión">
                </div>
                <!-- .col-* -->
                <div class="col-md-6">
                    <h4 class="thin margin_0 text-uppercase">Nuestros</h4>
                    <h2 class="section_header">Valores</h2>
                    <h4>Misión</h4>
                    <p>Brindar un servicio de transporte de excelencia, de calidad y seguro, reconocido por nuestros clientes. Operando un sistema de gestión y control de flota a la vanguardia en el servicio de transporte de pasajeros y carga.</p>
                    <ul class="list2 grey checklist">
                        <li>Compromiso</li>
                        <li>Trabajo en Equipo</li>
                        <li>Honestidad</li>
                        <li>Responsabilidad</li>
                        <li>Innovación</li>
                    </ul>
                    <h4 class="topmargin_50">Visión</h4>
                    <p>Ser reconocidos en el medio como una empresa líder e innovadora en el transporte terrestre, enfocada al éxito y basada en la mejora continua. Manteniendo este compromiso con nuestros clientes y con el ambiente.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="cotizador" class="ls section_padding_top_130 section_padding_bottom_100">
        <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="section_header">Cotizador</h2>
                        </div>
                        <div class="col-xs-6">
                            <!--<div class="form-group label-floating">
                                <label class="control-label">Origen</label>
                                <input type="email" class="form-control" id="autocomplete_place" name="autocomplete_place">
                            </div>-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">edit_location</i>
                                </span>
                                <input type="text" class="form-control" id="autocomplete_place" name="autocomplete_place" placeholder="Origen">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <!--<div class="form-group label-floating">
                                <label class="control-label">Destino</label>
                                <input type="email" class="form-control" id="autocomplete_place_2" name="autocomplete_place_2">
                            </div>-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">edit_location</i>
                                </span>
                                <input type="text" class="form-control" id="autocomplete_place_2" name="autocomplete_place_2" placeholder="Destino">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <!--<div class="form-group label-floating">
                                <label class="control-label">KG</label>
                                <input type="email" class="form-control" id="kilometros" name="kilometros">
                            </div>-->
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">fitness_center</i>
                                </span>
                                <input type="text" class="form-control" id="kilometros" name="kilometros" placeholder="Peso">
                            </div>
                        </div>
                        <div class="col-xs-4">
                             <label>&nbsp;</label>
                            <button type="button" class="btn btn-primary" onclick="obtenerLugar()" style="width: 200px">Cotizar</button>
                        </div>
                        <!--<div class="col-xs-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Origen</label>
                                <input class="form-control" id="autocomplete_place" name="autocomplete_place" type="text" value="">
                             </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="autocomplete_place_2">Destino</label>
                            <input class="form-control" id="autocomplete_place_2" name="autocomplete_place_2" type="text" value="">
                        </div>
                        <div class="col-xs-2">
                            <label for="kilometros">KG</label>
                            <input class="form-control" id="kilometros" name="kilometros" type="number" value="">
                        </div>
                        <div class="col-xs-4">
                            <label for="tipo-transporte">Tipo de Tansporte</label>
                            <select class="form-control" id="tipo-transporte" name="tipo-transporte">
                                <option value="0"> - Seleccione una opción - </option>
                                <option value="1">Terrestre</option>
                                <option value="2">Aereo</option>
                            </select>
                        </div>
                        <div class="col-xs-4">
                             <label>&nbsp;</label>
                            <button type="button" class="btn btn-default" onclick="obtenerLugar()">Cotizar</button>
                        </div>-->
                        <div id="type-selector" style="display: none">
                              
                        </div>
                        <div class="col-xs-12" id="mapita">
                        </div>
                        <!-- Button trigger modal -->
                       
                        <div class="col-xs-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                <a href="/orders">Pagar</a>
                            </button>
                        </div>
                    </div>
    <script>
          // This example requires the Places library. Include the libraries=places
          // parameter when you first load the API. For example:
          // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
          
          var map;
          var autocomplete;
          var autocomplete_2;
          var place;
          var place_2;

          var markers = [];
          var types;

          var pos;
          function initMap() {
            var input = /** @type {!HTMLInputElement} */(document.getElementById('autocomplete_place'));
            var input_2 = /** @type {!HTMLInputElement} */(document.getElementById('autocomplete_place_2'));

            autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete_2 = new google.maps.places.Autocomplete(input_2);

            autocomplete.addListener('place_changed', function() {
                place = autocomplete.getPlace();
                autocomplete.bindTo('bounds', map);
            });
            autocomplete_2.addListener('place_changed', function() {
                place_2 = autocomplete_2.getPlace();
                autocomplete_2.bindTo('bounds', map);
            }); 
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                };
                map = new google.maps.Map(document.getElementById('mapita'), {
                  center: {lat: pos.lat, lng: pos.lng},
                  zoom: 15
                });
                types = document.getElementById('type-selector');
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);
                var infowindow = new google.maps.InfoWindow();
                var marker = new google.maps.Marker({
                  map: map,
                  position : new google.maps.LatLng(pos.lat, pos.lng)
                });
                markers.push(marker);
                console.log(marker.getPosition().lat);
                infowindow.setContent('<div><strong></strong><br>');
                infowindow.open(map, marker);
                //infoWindow.setPosition(pos);
                //infoWindow.setContent('Location found.');
                //map.setCenter(pos);
              }, function(){
                    map = new google.maps.Map(document.getElementById('mapita'), {
                      center: {lat: pos.lat, lng: pos.lng},
                      zoom: 13
                    });
                });
            }
            // Sets a listener on a radio button to change the filter type on Places
            // Autocomplete.
           /* function setupClickListener(id, types) {
              var radioButton = document.getElementById(id);
              radioButton.addEventListener('click', function() {
                autocomplete.setTypes(types);
              });
            }

            setupClickListener('changetype-all', []);
            setupClickListener('changetype-address', ['address']);
            setupClickListener('changetype-establishment', ['establishment']);
            setupClickListener('changetype-geocode', ['geocode']);*/
          }
          function obtenerLugar(){
                map = new google.maps.Map(document.getElementById('mapita'));
                //google.maps.event.addDomListener(map, 'load', function() {
                types.style.display = "none";
                
                //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);
                for (var i = 0; i < markers.length; i++) {
                  markers[i].setMap(null);
                }
                markers = [];
                console.log(markers);
                var location = place.geometry.location.lat;
                console.log('location' + location);
                if (place.geometry) {
                   var infowindow = new google.maps.InfoWindow();
                   var marker = new google.maps.Marker({
                     map: map,
                     anchorPoint: new google.maps.Point(0, -29)
                   });

                   if (place.geometry.viewport) {
                     map.fitBounds(place.geometry.viewport);
                   } else {
                     map.setCenter(place.geometry.location);
                     map.setZoom(17);  // Why 17? Because it looks good.
                   }

                   /*marker.setIcon(/** @type {google.maps.Icon} *//*({
                     url: place.icon,
                     size: new google.maps.Size(71, 71),
                     origin: new google.maps.Point(0, 0),
                     anchor: new google.maps.Point(17, 34),
                     scaledSize: new google.maps.Size(35, 35)
                   }));*/
                   console.log(place);
                   marker.setPosition(place.geometry.location);
                   console.log(marker);
                   marker.setVisible(true);
                   markers.push(marker);
                   var address = '';
                   if (place.address_components) {
                     address = [
                       (place.address_components[0] && place.address_components[0].short_name || ''),
                       (place.address_components[1] && place.address_components[1].short_name || ''),
                       (place.address_components[2] && place.address_components[2].short_name || '')
                     ].join(' ');
                   }

                   infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                   infowindow.open(map, marker);
                }
                if (place_2.geometry) {
                   var infowindow_2 = new google.maps.InfoWindow();
                   var marker_2 = new google.maps.Marker({
                     map: map,
                     anchorPoint: new google.maps.Point(0, -29)
                   });

                   if (place_2.geometry.viewport) {
                     map.fitBounds(place_2.geometry.viewport);
                   } else {
                     map.setCenter(place_2.geometry.location);
                     map.setZoom(17);  // Why 17? Because it looks good.
                   }

                   /*marker_2.setIcon(/** @type {google.maps.Icon} *//*({
                     url: place_2.icon,
                     size: new google.maps.Size(71, 71),
                     origin: new google.maps.Point(0, 0),
                     anchor: new google.maps.Point(17, 34),
                     scaledSize: new google.maps.Size(35, 35)
                   }));*/
                   marker_2.setPosition(place_2.geometry.location);
                   marker_2.setVisible(true);
                   markers.push(marker_2);
                   var address_2 = '';
                   if (place_2.address_components) {
                     address_2 = [
                       (place_2.address_components[0] && place_2.address_components[0].short_name || ''),
                       (place_2.address_components[1] && place_2.address_components[1].short_name || ''),
                       (place_2.address_components[2] && place_2.address_components[2].short_name || '')
                     ].join(' ');
                   }

                   infowindow_2.setContent('<div><strong>' + place_2.name + '</strong><br>' + address_2);
                   infowindow_2.open(map, marker_2);
                }

                objConfigDR = {
                    map : map
                }
                objConfigDS = {
                    origin: marker.getPosition(),
                    destination: marker_2.getPosition(),
                    travelMode: google.maps.TravelMode.DRIVING
                }
                var ds = new google.maps.DirectionsService();
                var dr = new google.maps.DirectionsRenderer(objConfigDR);

                ds.route(objConfigDS, fnRutear);
                //ds.setMap(null);

                function fnRutear(resultados, status){
                    if (status == 'OK') {
                        dr.setDirections(resultados);
                    } else{
                        alert();
                    }
                }
                var origins = marker.getPosition().toString();
                origins = origins.replace('(', '');
                origins = origins.replace(')', '');

                var destinations = marker_2.getPosition().toString();
                destinations = destinations.replace('(', '');
                destinations = destinations.replace(')', '');
               /* $.getJSON('https://maps.googleapis.com/maps/api/distancematrix/json?origins=' + origins + '&destinations=' + destinations + '&mode=driving&language=es-ES&key=AIzaSyBTTUx8RUAvrofIV7AtfK368slOCikzhdc&callback=?', function(data) {
                          data = JSON.parse(data);
                          console.log('asdddd'+data);
                      });
                /*var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log('xxx' + this.responseText);
                    }
                };
                xhttp.open("GET", 'https://maps.googleapis.com/maps/api/distancematrix/json?origins=' + origins + '&destinations=' + destinations + '&mode=driving&language=es-ES&key=AIzaSyBTTUx8RUAvrofIV7AtfK368slOCikzhdc', true);
                xhttp.send();*/
                /*$.ajax({
                    async:false,
                    type: "GET",
                    dataType: "html",
                    contentType: "application/x-www-form-urlencoded",
                    url: 'https://maps.googleapis.com/maps/api/distancematrix/json?origins=' + origins + '&destinations=' + destinations + '&mode=driving&language=es-ES&key=AIzaSyBTTUx8RUAvrofIV7AtfK368slOCikzhdc&callback=?'
                }).done(function() {
                    alert();
                });*/
                /*$.ajax({
            type: 'GET',
                "url": 'https://maps.googleapis.com/maps/api/distancematrix/json?origins=' + origins + '&destinations=' + destinations + '&mode=driving&language=es-ES&key=AIzaSyBTTUx8RUAvrofIV7AtfK368slOCikzhdc',
                "dataType": "json"
                    }); */
                var distanceService = new google.maps.DistanceMatrixService();
                distanceService.getDistanceMatrix({
                    origins: [origins],
                    destinations: [destinations],
                    travelMode: google.maps.TravelMode.DRIVING/*,
                    unitSystem: google.maps.UnitSystem.METRIC,
                    durationInTraffic: true,
                    avoidHighways: false,
                    avoidTolls: false*/
                },
                function (response, status) {
                    if (status !== google.maps.DistanceMatrixStatus.OK) {
                        console.log('Error:', status);
                    } else {
                        var distance = response.rows[0].elements[0].distance.value;
                        var distance_text = response.rows[0].elements[0].distance.text;
                        var costo_total = (distance / 1000) * 39;
                        var kg_totales = document.getElementById("kilometros").value;
                        types.innerHTML = '<span>Costo por kilometro: $39.00 MN<br>Distancia Total: ' + distance_text + '<br>KG: ' + number_format(kg_totales, 2) + '<br>Costo total: $' + number_format(costo_total, 2) + '</span>';
                            types.classList.add("controls");
                            types.style.display = "block";
                    }
                });
                /*var invocation = new XMLHttpRequest();
                var url = 'https://maps.googleapis.com/maps/api/distancematrix/json?origins=' + origins + '&destinations=' + destinations + '&mode=driving&language=es-ES&key=AIzaSyBTTUx8RUAvrofIV7AtfK368slOCikzhdc';
                   
                //function callOtherDomain() {
                  if(invocation) {    
                    invocation.open('GET', url, true);
                    //invocation.onreadystatechange = handler;
                    invocation.send(); 
                  }*/
                //}
                //});
          }
          function number_format(amount, decimals) {

              amount += ''; // por si pasan un numero en vez de un string
              amount = parseFloat(amount.replace(/[^0-9\.]/g, '')); // elimino cualquier cosa que no sea numero o punto

              decimals = decimals || 0; // por si la variable no fue fue pasada

              // si no es un numero o es igual a cero retorno el mismo cero
              if (isNaN(amount) || amount === 0) 
                  return parseFloat(0).toFixed(decimals);

              // si es mayor o menor que cero retorno el valor formateado como numero
              amount = '' + amount.toFixed(decimals);

              var amount_parts = amount.split('.'),
                  regexp = /(\d+)(\d{3})/;

              while (regexp.test(amount_parts[0]))
                  amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');

              return amount_parts.join('.');
          }
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTTUx8RUAvrofIV7AtfK368slOCikzhdc&libraries=places&callback=initMap">
    </script>                  
                </div>
</section>
                        






             
             
             

            
            

    
            <!--TRES-->
            <!-- Footer -->
    <footer id="contacto" class="page_contact ds parallax section_padding_top_75 section_padding_bottom_50">
                <div class="container">

            
                    <div class="row">
                        <div class="col-sm-12 text-center to_animate" data-animation="expandOpen">
                            <h2 class="section_header">Contacto</h2>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                    
                        <div class="col-md-3 col-sm-6">
                            <div class="teaser text-center">
                                <div class="teaser_icon highlight size_normal">
                                    <i class="rt-icon2-phone-outline"></i>
                                </div>
                                    <p>
                                    +52 (045) 77 31 53 72 43
                                    </p>
                                    <i class="rt-icon2-whatsapp grey fontsize_20"></i>
                                    <p>+52 (045) 77 31 53 72 43<br><br></p>
                           </div>
                        </div>
                        
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="teaser text-center">
                                <div class="teaser_icon highlight size_normal">
                                    <i class="rt-icon2-location-outline"></i>
                                </div>

                                <p> 
                        Av. Té 950<br>
                        Granjas México<br>
                        CP 08400<br>
                        CDMX, México<br><br> </p>

                            </div>
                        </div>
                        
                        
                        
                        <div class="col-md-3 col-sm-6 clear-sm">
                            <div class="teaser text-center">
                                <div class="teaser_icon highlight size_normal">
                                    <i class="rt-icon2-time"></i>
                                </div>

                                <p>
                                <span class="grey">Lunes - Viernes:</span><br>
                                7 am a 6 pm<br><br>
                                <span class="grey">Sábado - Domingo:</span><br>
                                7 am a 2 pm<br><br></p>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                     
                        <div class="col-md-3 col-sm-6">
                            <div class="teaser text-center">
                                <div class="teaser_icon highlight size_normal">
                                    <i class="rt-icon2-group"></i>
                                </div>

                                <h4 class="text-uppercase">¡Síguenos!</h4>
                                
                            <!--social media-->
                                <div class="darklinks topmargin_30">
                                    <a href="https://www.facebook.com/TransUp-562577294142047/" target="_blank" title="Facebook TransUP" class="social-icon border-icon rounded-icon soc-facebook"></a>
                                    <!--<a href="https://twitter.com/" target="_blank" title="Twitter TransUP" class="social-icon border-icon rounded-icon soc-twitter"></a>-->
                                </div>
                                <!--social media END-->
                                <br><br>

                            </div>
                        </div>
                        
 

                    </div>
                    
                    
                    



            <!--Forma-->
                    <div class="row topmargin_40">
                        <div class="col-sm-12 to_animate">
                            <form class="contact-form cs parallax columns_padding_5" method="post" action="./">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <p class="form-group">
                                <label for="name">Full Name <span class="required">*</span></label>
                                <i class="fa fa-user black" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nombre Completo">
                            </p>
                                        <p class="form-group">
                                <label for="email">Email address<span class="required">*</span></label>
                                <i class="fa fa-envelope black" aria-hidden="true"></i>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                            </p>
                                        <p class="form-group">
                                <label for="telefono">Teléfono<span class="required">*</span></label>
                                <i class="fa fa-flag black" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
                            </p>
                            
                            <!--        <p class="form-group">
                                <label for="subject">Subject<span class="required">*</span></label>
                                <i class="fa fa-flag black" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Teléfono">
                            </p>-->
                                    </div>
                                    <div class="col-sm-6">

                                        <p class="contact-form-message form-group">
                                <label for="message">Message</label>
                                <i class="fa fa-comment-o black" aria-hidden="true"></i>
                                <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Mensaje"></textarea>
                            </p>
                                    </div>

                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                    <div class="g-recaptcha" data-sitekey="6Le99DYUAAAAADvzG8n9wWeCDByMVeLSVaOGmamZ"></div>
                                        <p class="contact-form-submit text-center topmargin_30">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button">Enviar mensaje</button>
                            </p>
                            
                                    </div>

                                </div>
                            </form>
                        
                
                            
                        </div>
                    </div>
                </div>
          </footer>

      <!-- Footer END -->
@endsection



 
    



            