import './bootstrap';

import App from "./App.vue"

import { createApp } from 'vue';

import vuetify from './plugins/vuetify';
import router from './plugins/router';
import store from './plugins/store';

createApp(App)
    .use(vuetify)
    .use(router)
    .use(store)
    .mount("#app")