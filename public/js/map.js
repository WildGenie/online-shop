// Initialize and add the map
function initMap() {

    const antalogic = { lat: 52.42687470973872, lng: 31.008839049756773 };

    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: antalogic,
    });

    const marker = new google.maps.Marker({
        position: antalogic,
        map: map,
    });

    const marker2 = new google.maps.Marker({
        position: { lat: 52.42177325502497, lng: 31.005077848195537 },
        map: map,
    });

    const marker3 = new google.maps.Marker({
        position: { lat: 52.43392187393806, lng: 31.01072585820943 },
        map: map,
    });

}
