import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: false,
        }),
    ],
    server: {
        host: '0.0.0.0',   // allows connections from your VHost
        port: 5173,        // or any free port
        strictPort: true,  // prevents automatic port fallback
        cors: true,
        hmr: {
            host: 'laravelpractice.local', // ensures HMR works on custom domain
            protocol: 'ws',
        },
    },
});
