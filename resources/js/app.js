import Vue from 'vue';
import StarRating from 'vue-star-rating';
import Products from './components/Products.vue'
import SearchProducts from './components/SearchProducts.vue'

Vue.component('star-rating', StarRating);
Vue.component('products', Products);
Vue.component('search-products', SearchProducts);

let app = new Vue({
    el: '#app',
});