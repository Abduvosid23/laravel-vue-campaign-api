

import '/resources/js/bootstrap.js';
import Vue from 'vue';


import ExampleComponent from '/resources/js/components/ExampleComponent.vue';

// Create a new Vue instance and register the component
new Vue({
    el: '#app', // Attach Vue to the HTML element with id 'app'
    components: {
        'example-component': ExampleComponent,
    },
});



// Uncomment and use if needed
// Object.entries(require.context('./components', true, /\.vue$/)).forEach(([path, definition]) => {
//     const componentName = path.split('/').pop().replace(/\.\w+$/, '');
//     Vue.component(componentName, definition.default);
// });
