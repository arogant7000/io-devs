var ContactPage = function () {

    return {

    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,
				lat: 5.11898,
				lng: 97.15793
			  });

			  var marker = map.addMarker({
				lat: 5.11898,
				lng: 97.15793,
	            title: 'TIK Developers Site.'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
		        lat : 5.11898,
		        lng : 97.15793
		      });
		    });
		}

    };
}();
