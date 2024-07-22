import './bootstrap';

// import Alpine JS
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import '@fortawesome/fontawesome-free/js/all.js';

import { Swiper, SwiperSlide } from 'swiper';
import 'swiper/swiper-bundle.css'

import 'datatables.net';
import 'datatables.net-dt';

$(document).ready(function() {
  $('#example').DataTable();
});
