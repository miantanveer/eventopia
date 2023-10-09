{{-- <script>
    $(document).ready(function() {
        // Create an array to hold marker data
        var markers = [
            @foreach (@$listing as $value)
                {
                    lat: {{ @$value->lat }},
                    lng: {{ @$value->lng }},
                    price: "SAR {{ @$type == 'space' ? @$value->spaceHaveActivities[0]->rate_per_hour : (@$type == 'service' ? @$value->price : @$value->entertainmentActivities[0]->hourly_rate) }}"
                },
            @endforeach
        ];

        // Create a map centered at the specified location
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: {{ @$value->lat }},
                lng: {{ @$value->lng }}
            },
            zoom: 2
        });

        // Loop through the markers array and create markers for each data point
        markers.forEach(function(markerData) {
            var marker = new google.maps.Marker({
                position: {
                    lat: markerData.lat,
                    lng: markerData.lng
                },
                map: map,
                title: markerData.price
            });
        });
    });
</script> --}}
<script>
    $(document).ready(function() {
        var markers = [
            @foreach ($listing ?? [] as $value)
                {
                    lat: {{ @$value->lat ?? 0 }},
                    lng: {{ @$value->lng ?? 0 }},
                    price: "{{ @$type == 'space' ? @$value->space_title : (@$type == 'service' ? @$value->title : @$value->title) }}: SAR {{ @$type == 'space' ? @$value->spaceHaveActivities[0]->rate_per_hour : (@$type == 'service' ? @$value->price : @$value->entertainmentActivities[0]->hourly_rate) }}"
                },
            @endforeach
        ];

        if (markers.length === 0) {
            $('#map').html(`<div class="container-fluid">`+`
                <div class="card custom-card">`+`
                    <div class="card-body map_height overflow-auto" id="mapContainer">`+`
                        <iframe class="gmap_iframe" frameborder="0" scrolling="no" id="gmap_iframe" marginheight="0" marginwidth="0" `+`
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"> `+`
                        </iframe>`+`
                        </div>`+`
                        </div>`);
            return;
        }

        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: markers[0].lat,
                lng: markers[0].lng
            },
            zoom: 2
        });

        markers.forEach(function(markerData) {
            var marker = new google.maps.Marker({
                position: {
                    lat: markerData.lat,
                    lng: markerData.lng
                },
                map: map,
                title: markerData.price
            });
        });
    });
</script>
