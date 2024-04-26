import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import Index from "@/components/Index.vue";
app.component('Index', Index);

app.mount('#app');
