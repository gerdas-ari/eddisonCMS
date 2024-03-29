import Map from "./mapBox/map";
import markers from "./mapBox/markers";

function contactsMap (el) {
    
    const mapToken = 'pk.eyJ1Ijoic2VyZWdhdG8iLCJhIjoiTVhMa2NkRSJ9.LyqhckvDNmXgLSdHiRKigw';
    const mapStyle = 'mapbox://styles/seregato/clslt2pc400gf01qub3p89153';

    const mapbox = new Map({
        container: el,
        markers: markers,
        token: mapToken,
        style: mapStyle,
        zoom: 15.5,
        mapCenter: [131.912867, 43.116457],
    });
 
}

export default contactsMap;