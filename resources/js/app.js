import './bootstrap';


import $ from 'jquery';
import 'bootstrap';
import 'swiper';
import 'magnific-popup';

// Assure-toi que jQuery UI et DateTimePicker sont bien chargés
import 'jquery-ui-dist/jquery-ui.min.js';
import 'jquery-datetimepicker/build/jquery.datetimepicker.full.min.js';

import 'imagesloaded';
import 'isotope-layout';
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

// Enregistrer ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

// Importer tes scripts personnalisés

import './smooth-scroll.js';
import './main.js';

// Appliquer les styles si nécessaires
import 'jquery-datetimepicker/build/jquery.datetimepicker.min.css';
import 'jquery-ui-dist/jquery-ui.css';

