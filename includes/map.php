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



$other_areas_str = "";
foreach ($hubs as $hub) :
    $other_hub_areas = get_post_meta($hub->ID, 'hub_areas', true);
    $areas = array_filter(explode(",", $other_hub_areas));
    foreach ($areas as $area) {
        $other_areas_str .= "'" . trim($area) . "',";
    }
endforeach;

$other_areas_str = trim($other_areas_str, ",");
?>


<script>
    let areas = [<?php echo $other_areas_str; ?>];

    var hubs = [
        <?php foreach ($hubs as $hub) : ?> {
                lat: "<?php echo get_post_meta($hub->ID, 'hub_lat', true) ?>",
                long: "<?php echo get_post_meta($hub->ID, 'hub_long', true) ?>",
                data: {
                    name: "<?php echo get_the_title($hub->ID) ?>",
                    permalink: "<?php echo get_permalink($hub->ID) ?>",
                    areas: "<?php echo get_post_meta($hub->ID, 'hub_areas', true) ?>",
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


    function onCountyClicked(e, feature, layer) {
        //console.log(feature);

        hubs.forEach(hub => {
            hub.popup.closePopup();
        });

        hubs.forEach(hub => {
            if (hub.data.areas.indexOf(feature.properties.DEBKG_ID) > -1) {
                hub.popup.openPopup();
                //console.log(hub);
            }
        });
    }

    function onEachFeature(feature, layer) {
        //bind click
        layer.on({
            click: (e) => {
                onCountyClicked(e, feature, layer);
            }
        });
    }

    var counties = $.ajax({
        url: "<?php echo get_template_directory_uri() ?>/assets/geojson/de.geojson",
        dataType: "json",
        success: function() {},
        error: function(xhr) {
            alert(xhr.statusText)
        }
    });

    $.when(counties).done(function() {
        var map = L.map('mapid').setView([51.3181579, 9.4830627], 6);

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18,
            tileSize: 512,
            zoomOffset: -1,
        }).addTo(map);


        counties.responseJSON.features.forEach(feature => {

            let color = 'rgb(52, 155, 235)';
            let opacity = 0.2;

            if (areas.find(m => m == feature.properties.DEBKG_ID)) {
                color = 'green';
                opacity = 0.4;
            }


            L.geoJSON(feature, {
                onEachFeature: onEachFeature,
                style: {
                    weight: 1,
                    color: '#fff',
                    dashArray: '',
                    fillOpacity: opacity,
                    fillColor: color
                }
            }).addTo(map);
        });








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

            iconSize: [23, 30], // size of the icon
            iconAnchor: [23, 30], // point of the icon which will correspond to marker's location
            popupAnchor: [-15, -30] // point from which the popup should open relative to the iconAnchor
        });

        hubs.forEach(hub => {
            hub.marker = L.marker([hub.lat, hub.long], {
                    icon: redIcon
                })
                .addTo(map);

            var customPopup = "<span style='font-size: bold;'>" + hub.data.name + "</span><br /> <a href='" + hub.data.permalink + "'>Details anzeigen</a>";
            hub.popup = hub.marker.bindPopup(customPopup, {closeOnClick: false, autoClose: false});
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
