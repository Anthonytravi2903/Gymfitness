jQuery(document).ready( $ => {
        $('.site-header .menu-principal .menu').slicknav({
            label:'',
            appendTo: '.site-header'
        });

        /**Mapa de leaflet en la pagina contacto */

        const lat= document.querySelector('#lat').value;
        const lng= document.querySelector('#lng').value;
        const direccion= document.querySelector('#direccion').value;

        if(lat && lng && direccion){
            var map = L.map('mapa').setView([lat, lng], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            L.marker([lat, lng]).addTo(map)
                .bindPopup(direccion)
                .openPopup();
        }

      
});