//This script pulls in the map from mapbox.com,
//with a custom style i created,
//and custom points of interest.
//Started with a geojson exported from "Gaiagps.com",
//then uploaded it to mapbox and linked it to the map shown,
//and I have not added on screen controls just the mouse buttons.

//scroll wheel zoom, left mouse button pan, right mouse button toggle 3d

mapboxgl.accessToken = 'pk.eyJ1IjoiYXVzdGlucm9iaW5zb24yMDI0IiwiYSI6ImNrbXZkNXdmcDA0MjEycG8zamtsaG16OGUifQ.rRMD7VpyS6xl9oQqGLZ9JQ';
                var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/austinrobinson2024/ckmy12vbv1dxe17mfzzcjrt7v',
                center: [-83.612372, 35.386355], 
                zoom: 9 
                });


                var map = L.mapbox.map('map')
                    .setView([-83.612372, 35.386355], 9)
                    .addLayer(L.mapbox.styleLayer('mapbox://styles/austinrobinson2024/ckmy12vbv1dxe17mfzzcjrt7v'));
                
                
