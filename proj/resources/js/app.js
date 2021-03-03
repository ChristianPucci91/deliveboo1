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
         allTypologies: [],
         userArray: [],
         showTypology: true,
         showUser: false,
     },
     mounted: function() {
         axios.get('/getTypologies')
             .then(response => {
                 this.allTypologies = response.data;
                 console.log(this.allTypologies);
             });
     },
     methods: {
         getRestaurant(id) {
             axios.get('/getUserId/' + id)
                 .then(response => {
                     this.userArray = response.data;
                     this.showTypology = !this.showTypology;
                     this.showUser = !this.showUser;
                     console.log(this.userArray);
                 });
         }
     }
 });
}
document.addEventListener("DOMContentLoaded",init);
