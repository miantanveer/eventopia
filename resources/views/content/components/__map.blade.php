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
            console.log('No markers to display.');
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
