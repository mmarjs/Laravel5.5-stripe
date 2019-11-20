/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

require('bootstrap');

window.Vue = require('vue');
require('./lib/jquery.flexslider');
require('./gighighway.min.js');
//require('.')

import Notifications from 'vue-notification'
Vue.use(Notifications);


import VueNotifications from 'vue-notifications'
window.VueNotifications = VueNotifications;
import miniToastr from 'mini-toastr'// https://github.com/se-panfilov/mini-toastr

miniToastr.init();

// miniToastr.init({
//     style: {
//         'mini-toastr__notification': {
//             'mini-toastr-notification__message': {
//                 'border-radius': '5px',
//                 color: 'red'
//             }
//         }
//     }
// });

function toast ({title, message, type, timeout, cb}) {
    return miniToastr[type](message, title, timeout, cb)
}

const options = {
    success: toast,
    error: toast,
    info: toast,
    warn: toast
};

Vue.use(VueNotifications, options);



import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('create-vendor', require('./components/dashboard/vendors/CreateVendor'));
Vue.component('vendor-billing', require('./components/dashboard/vendors/VendorBilling'));
Vue.component('vendor-thumbnail', require('./components/dashboard/vendors/VendorThumbnail'));
Vue.component('favorites-counter', require('./components/global/favorites/FavoritesCounter'));
Vue.component('favorite-button', require('./components/global/favorites/FavoriteButton'));
Vue.component('review-button', require('./components/global/favorites/ReviewButton'));
Vue.component('quote-button', require('./components/global/favorites/QuoteButton'));

const app = new Vue({
    el: '#app'
});
