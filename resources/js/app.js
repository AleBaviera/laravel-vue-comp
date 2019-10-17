require('./bootstrap');
window.Vue = require('vue');
var $ = require('jquery');

function init() {

  console.log("Hello World");

  new Vue({
    el: '#app1',
    data: {

      'hello': "Hello from AleVUE"

    }
  });
}

$(document).ready(init);
