import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import viteImagemin from 'vite-plugin-imagemin';

export default defineConfig(() => {


    return {
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
            viteImagemin({
                mozjpeg: { quality: 65 },
                optipng: { optimizationLevel: 4 },
                svgo: { removeViewBox: false },
                gifsicle: { interlaced: true, optimizationLevel: 2 },
                webp: { quality: 70 },
            }),
        ],


    };
});
