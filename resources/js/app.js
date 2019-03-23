import Vue from 'vue';
import axios from 'axios';
import Routes from './routes';
import VueRouter from 'vue-router';
import VueFeather from 'vue-feather';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
	axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

Vue.use(VueRouter);
Vue.use(VueFeather);

const router = new VueRouter({
	routes: Routes,
	mode: 'history',
	base: '/gox/',
});

new Vue({
	el: '#gox',
	router,
	data() {
		return {
			isSidebarMinimize: false
		}
	}
});