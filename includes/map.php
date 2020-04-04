<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

<style>
    #mapid {
        height: 70vh;
    }

    #mapOverlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1000;

        background: rgba(0, 0, 0, 0.5);
        display: none;
    }

    .map-scroll {
        display: flex !important;
        justify-items: center;
        align-items: center;
        justify-content: center;

        color: #fff;
        font-size: 2rem;
    }
</style>

<section id="map" class="container mt-5">
    <div class="row">
        <div class="col" id="hub-info">
            <h3>
        </div>
        <div class="col" style="position: relative;">
            <div id="mapid"></div>
            <div id="mapOverlay" class="">
                <div style="">
                    Press [Strg] + [Scroll] to zoom
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$hubs = get_posts(array(
    'post_type'         => 'mvv_hub',
    'posts_per_page'    =>  -1,
    'orderby'           => 'title',
    'order'              => 'ASC'
));

if (isset($show_makers)) :
    $makers = get_posts(array(
        'post_type'         => 'mvv_maker',
        'posts_per_page'    =>  -1,
        'orderby'           => 'title',
        'order'              => 'ASC'
    ));
endif;

?>


<script>
    var hubs = [
        <?php foreach ($hubs as $hub) : ?> {
                lat: "<?php echo get_post_meta($hub->ID, 'hub_lat', true) ?>",
                long: "<?php echo get_post_meta($hub->ID, 'hub_long', true) ?>",
                data: {
                    name: "<?php echo get_the_title($hub->ID) ?>",
                    permalink: "<?php echo get_permalink($hub->ID) ?>"
                }
            },
        <?php endforeach; ?>
    ];

    <?php if (isset($show_makers)) : ?>
        var makers = [
            <?php foreach ($makers as $maker) : ?> {
                    lat: "<?php echo get_post_meta($maker->ID, 'maker_lat', true) ?>",
                    long: "<?php echo get_post_meta($maker->ID, 'maker_long', true) ?>",
                    data: {

                    }
                },
            <?php endforeach; ?>
        ];
    <?php endif; ?>


    function whenClicked(e, feature, layer) {
        // e = event
        console.log(feature);

        document.location.href = feature.permalink;
    }

    function onEachFeature(feature, layer) {
        //bind click
        layer.on({
            click: (e) => {
                whenClicked(e, feature, layer);
            }
        });
    }

    var counties = $.ajax({
        url: "<?php echo get_template_directory_uri() ?>/assets/geojson/de.geojson",
        dataType: "json",
        success: console.log("County data successfully loaded."),
        error: function(xhr) {
            alert(xhr.statusText)
        }
    });

    $.when(counties).done(function() {
        var map = L.map('mapid').setView([51.3181579, 9.4830627], 6);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiaGFybW9uaWVtYW5kIiwiYSI6ImNqYnMweG9rOTB5NGwycW1mZ3M1M3g2bGkifQ.BWxSwxb35Ed-MfVNkquz2w'
        }).addTo(map);

        L.geoJSON(counties.responseJSON, {
            onEachFeature: onEachFeature
        }).addTo(map);

        <?php if (isset($show_makers)) : ?>
            var greenIcon = L.icon({
                iconUrl: '<?php echo get_template_directory_uri() ?>/assets/images/marker-maker.png',

                iconSize: [30, 30], // size of the icon
                iconAnchor: [30, 30], // point of the icon which will correspond to marker's location
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });

            makers.forEach(maker => {
                L.marker([maker.lat, maker.long], {
                    icon: greenIcon
                }).addTo(map);
            });
        <?php endif; ?>


        var redIcon = L.icon({
            iconUrl: '<?php echo get_template_directory_uri() ?>/assets/images/marker-hub.png',

            iconSize: [30, 30], // size of the icon
            iconAnchor: [30, 30], // point of the icon which will correspond to marker's location
            popupAnchor: [-15, -30] // point from which the popup should open relative to the iconAnchor
        });

        hubs.forEach(hub => {
            var marker = L.marker([hub.lat, hub.long], {
                    icon: redIcon
                })
                .addTo(map);

            var customPopup = "<span style='font-size: bold;'>" + hub.data.name + "</span><br /> <a href='" + hub.data.permalink + "'>Details anzeigen</a>";
            marker.bindPopup(customPopup);
        });



        map.scrollWheelZoom.disable();

        $("#map").bind('mousewheel DOMMouseScroll', function(event) {
            event.stopPropagation();
            if (event.ctrlKey == true) {
                event.preventDefault();
                map.scrollWheelZoom.enable();
                $('#mapOverlay').removeClass('map-scroll');
                setTimeout(function() {
                    map.scrollWheelZoom.disable();
                }, 1000);
            } else {
                map.scrollWheelZoom.disable();
                $('#mapOverlay').addClass('map-scroll');

                setTimeout(() => {
                    $('#mapOverlay').removeClass('map-scroll');
                }, 1000);
            }

        });

        $(window).bind('mousewheel DOMMouseScroll', function(event) {
            $('#map').removeClass('map-scroll');
        })
    });
</script>