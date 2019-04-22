<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
  #map {
    margin-top: 2em;
    height:300px;
    width:100%;
   }
</style>
<div class='container-fluid'>
<div class='row'>
  <div class='col-md-3 col-md-offset-3 text-justify'>
    <h1><b>C</b>ontact</h1>
    <p class="lead">
      Carli Brierley<br/>
      2518 Broadway <br/>
      Grand Junction, CO 81507<br/>
      <a href='tel:724-594-1051' class='btn btn-blue raised'>970-314-1100</a>
      <small>*Call or Text Number</small>
    </p>
    <a href='https://www.facebook.com/pg/CarlisGrooming/' target='_blank'class='btn btn-blue raised'><i class='fa fa-facebook-official fa-3x'></i></a>
    <a href='https://www.instagram.com/starae/' target='_blank'class='btn btn-blue raised'><i class='fa fa-instagram fa-3x'></i></a>
    <br/><br/>
    <p>*Feel free to message me through my Facebook Page</p>
  </div>
  <div class='col-md-3'>
    <div id='map'></div><br/>
  <form action="http://maps.google.com/maps" method="get" target="_blank">
   <label for="saddr">Enter your location</label>
   <input type="text" name="saddr" />
   <input type="hidden" name="daddr" value="2518 Broadway Grand Junction, Colorado" />
   <input class='btn btn-blue raised'type="submit" value="Get directions" />
  </form>
  </div>
</div>
</div>

<script>
  function initMap() {
    var uluru = {lat: 39.066144, lng: -108.588997};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmHUGlZ_ejvYAY1m7cy9UgVp5CpqDiv24&callback=initMap">
</script>
