import '../css/app.css';
import './bootstrap';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';

createInertiaApp({
  resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob<DefineComponent>('./pages/**/*.vue')),
    setup({ el, App, props, plugin }: any) {
      createApp({ render: () => h(App, props) })
        .use(plugin)
        .mount(el)
    },
})