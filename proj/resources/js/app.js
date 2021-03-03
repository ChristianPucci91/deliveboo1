

require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

 function init() {


 const app = new Vue({
     el: '#app',
     data: {
         showtypo: true,
         showRestaurant: false,
         allTypoArray: [],
         randomTypoArray: [],
         restaurantArray: [],
     },
     mounted: function() {
         axios.get('/gettypo')
             .then(response => {
                 console.log(response.data);
                 this.allTypoArray = response.data;
             });
     },
     methods: {
         getRestaurant(id) {
             axios.get('/getRestaurantByType/' + id)
                 .then(response => {
                     this.restaurantArray = response.data;
                     this.showtypo = !this.showtypo;
                     this.showRestaurant = !this.showRestaurant;
                     console.log(response.data);
                 });
         }
     }
 });
}
document.addEventListener("DOMContentLoaded",init);
