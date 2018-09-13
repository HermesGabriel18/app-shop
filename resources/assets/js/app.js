
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

// CUSTOM

import { mensaje_prueba } from './components/prueba.js'

console.log('Mensaje desde app.js');
console.log(mensaje_prueba);

// $('#boton').click(function (event) {
// 	event.preventDefault();
// 	console.log('Mensaje desde la funcion');
// 	var data= $('#logoutForm').serialize();
// 	$.ajax({
// 		url: 'http://localhost:8000/products/'+$('#elinput').val()+'',
// 		type: 'post',
// 		dataType: 'json',
// 		data:{data: data}
// 	});
// });

