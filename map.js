document.addEventListener("DOMContentLoaded", function () {
  // Loop through all localized map configs
  for (const key in window) {
    if (key.startsWith("company-map-")) {
      const config = window[key];

      // Initialize map
      var map = L.map(config.map_id).setView(
        [config.lat, config.lng],
        config.zoom
      );

      // Tile layer (OpenStreetMap)
      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: "&copy; OpenStreetMap contributors",
      }).addTo(map);

      // Marker with popup
      L.marker([config.lat, config.lng])
        .addTo(map)
        .bindPopup(config.popup)
        .openPopup();
    }
  }
});
