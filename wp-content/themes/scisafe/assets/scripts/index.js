// Polyfills
import "core-js/stable/promise";
import "core-js/stable/number";
import "core-js/stable/array";
import "regenerator-runtime/runtime";

// Load Vendor
import AOS from 'aos';
import '@fancyapps/fancybox/dist/jquery.fancybox';

// Load App
import Menu from './app/Menu';
import ScrollTo from './app/ScrollTo';
import Sliders from './app/Sliders';
import General from './app/General';
import Posts from './app/Posts';
import Accordion from './app/Accordion';
import ThreeCube from './app/cube/3DCube';

(function() {
    
    ThreeCube(); 

 })();

window.onload = () => {

    // Load Imports
    Sliders();
    General();
    Menu();
    ScrollTo();
    Posts();
    Accordion();

    AOS.init({
        once: true
    });

};
