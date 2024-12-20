import { defineConfig } from 'vite';
import sassGlobImports from 'vite-plugin-sass-glob-import';
import { globSync } from 'glob';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const scssFiles = Object.fromEntries(
  globSync('src/assets/styles/**/*.scss', {
    ignore: ['src/assets/styles/**/_*.scss'],
  }).map((file) => [
    path.relative(
      'src',
      file.slice(0, file.length - path.extname(file).length)
    ),
    fileURLToPath(new URL(file, import.meta.url)),
  ])
);

const tsFiles = Object.fromEntries(
  globSync('src/assets/scripts/*.ts').map((file) => [
    path.relative(
      'src',
      file.slice(0, file.length - path.extname(file).length)
    ),
    fileURLToPath(new URL(file, import.meta.url)),
  ])
);

const htmlFiles = Object.fromEntries(
  globSync('src/**/*.html', { ignore: ['node_modules/**', '**/dist/**'] }).map(
    (file) => [
      path.relative(
        'src',
        file.slice(0, file.length - path.extname(file).length)
      ),
      fileURLToPath(new URL(file, import.meta.url)),
    ]
  )
);

const inputObject = { ...scssFiles, ...tsFiles, ...htmlFiles };

export default defineConfig({
  root: './src',
  build: {
    outDir: '../dist',
    rollupOptions: {
      input: inputObject,
      output: {
        entryFileNames: `[name].js`,
        chunkFileNames: `[name].js`,
        assetFileNames: (assetInfo) => {
          const names = assetInfo.names || [];
          const name = names[0] || '';
          if (/\.(gif|jpeg|jpg|png|svg|webp)$/.test(name)) {
            return '[name].[ext]';
          }
          if (/\.css$/.test(name)) {
            return '[name].[ext]';
          }
          return '[name].[ext]';
        },
      },
    },
  },
  plugins: [sassGlobImports()],
  server: {
    port: 3000,
  },
});
