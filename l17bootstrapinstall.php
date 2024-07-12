=>Bootstrap Install 

npm install bootstrap 
npm install @popperjs/core         (or) npm install bootstrap @popperjs/core
-------------------------------------------------------------------$_COOKIE

=> resources/js/app.js 

import 'bootstrap';
import "bootstrap/dist/css/bootstrap.min.css";
import "../css/app.css";

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

-------------------------------------------------------------------$_COOKIE
=>resources/css/app.css
@import "bootstrap/dist/css/bootstrap.min.css";


/* if you use boostrap, tailwind must disabled */
/* @tailwind base;
@tailwind components;
@tailwind utilities; */
-------------------------------------------------------------------$_COOKIE
=>vite.config.js 
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
-------------------------------------------------------------------$_COOKIE
header.blade.php 

     @vite(["resources/css/app.css","resources/js/app.js"])

<div id="app">
    all executed codes must be here....
</div>
-------------------------------------------------------------------$_COOKIE
        
npm run dev    (hosting site using vite instead of artisan comand)
npm run build
-------------------------------------------------------------------$_COOKIE
-------------------------------------------------------------------$_COOKIE
