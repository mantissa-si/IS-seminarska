import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    build: {
        chunkSizeWarningLimit: 1600,
    },
    plugins: [
        laravel ({
            input: [ 
                'resources/js/app.jsx',
                'resources/js/swagger.js',
            ],
            refresh: true,
        }),
        react(),
    ],
});
