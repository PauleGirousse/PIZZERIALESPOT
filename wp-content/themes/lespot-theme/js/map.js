var mymap = L.map("mapid", {
  scrollWheelZoom: false,
}).setView([43.4375, -1.5559], 12);
// mymap.dragging.disable();

L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png", {
  maxZoom: 20,
  attribution:
    '&copy; OpenStreetMap France | &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

const ga = [43.42454, -1.60919];

var marker = L.marker(ga).addTo(mymap);

// ajout d'un popup
marker.bindPopup(
  "<h3>Pizzeria le Spot à Guéthary</h3><p class='moins'>491 avenue du Général de Gaulle 64210 Guéthary<br /><a href='https://www.openstreetmap.org/directions?from=&to=43.4245%2C%20-1.6092&route=%3B43.4245%2C-1.6092'>Visualiser l'itinéraire ?</a></p>"
);
