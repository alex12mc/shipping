 var map = new google.maps;
 console.log(map);
function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map1 = map.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
      function initAutocomplete() {
        var map = new google.maps;

  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete_origin = map.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete_place')),
      {types: ['geocode']});

  autocomplete_destin = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete_place_2')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
 autocomplete_origin.addListener('place_changed', fillInAddress);
 //autocomplete_destin.addListener('place_changed', fillInAddress);
}


function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete_origin.getPlace();

  console.log(place.address_components);
  var componentForm = {
        //numero
        street_number: 'short_name',
        //calle
        route: 'long_name',
        //colonia
        sublocality_level_1: 'short_name',
        //delagacion municipio ciudad
        locality: 'short_name',
        //Estado
        administrative_area_level_1: 'long_name',
        //id_pais
        country: 'long_name',
        //codigo postal
        postal_code: 'short_name'
      };
  //console.log(componentForm);
  var idForm = {
        calle: '',
        numero_exterior: '',
        colonia: '',
        delegacion_municipio: '',
        codigo_postal: ''
      };

  for (var component in idForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }
  var strpais = "";
  var strestado = "";
  var strciudad = "";
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
    }
  }
}
