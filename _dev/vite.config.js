import { resolve } from 'path';
import { defineConfig } from 'vite';

export default defineConfig({
    build: {
        outDir: './../dist',
        watch: {},
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html'),
            },
            output: {
                entryFileNames: `js/scripts.js`,
                chunkFileNames: `js/scripts.js`,
                assetFileNames: ({name}) => {
                    if (/\.(gif|jpe?g|png|svg)$/.test(name ?? '')){
                        return 'images/[name].[ext]';
                    }
                    
                    if (/\.css$/.test(name ?? '')) {
                        return 'css/[name].[ext]';   
                    }

                    return 'js/[name].[ext]';
                  },
            },
        },
    },

});


