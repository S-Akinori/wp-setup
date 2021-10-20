const mix = require('laravel-mix');

mix.webpackConfig({
  devtool: "source-map",
  module: {
    rules: [
      {
        test: /\.scss/,
        loader: 'import-glob-loader'
      }
    ]
  }
});

mix.js('src/app.js', 'dist/js')
    .sass('src/app.scss', 'dist/css')