import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks(id) {
                    if (id.includes('node_modules')) {
                        return 'vendor'; // Menggabungkan semua node_modules menjadi satu chunk 'vendor'
                    }
                    // Tambahkan logika chunking kustom lainnya di sini
                }
            }
        },
        chunkSizeWarningLimit: 2000, // Menyesuaikan batas ukuran chunk
    }
});
