import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

// Config dasar Vite
export default defineConfig({
    plugins: [react()],
    build: {
        outDir: 'dist', // folder hasil build
    },
});