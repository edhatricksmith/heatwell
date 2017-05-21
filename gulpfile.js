var gulp = require('gulp'),
  connect = require('gulp-connect-php'),
  browserSync = require('browser-sync'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  cssnano = require('cssnano'),
  pixrem = require('pixrem'),
  customMedia = require('postcss-custom-media'),
  cssvariables = require('postcss-css-variables'),
  colorRgbaFallback = require("postcss-color-rgba-fallback"),
  opacity = require("postcss-opacity"),
  pump = require('pump');

gulp.task('sass', function(){
  return gulp.src('src/styles/**/*.+(scss|sass)')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

gulp.task('postcss', ['sass'], function () {
  var processors = [
    autoprefixer({browsers: ['last 2 version', 'ie 8-9']}),
    pixrem(),
    colorRgbaFallback(),
    opacity(),
    cssvariables(),
    customMedia(),
    cssnano({
      discardComments: {
        removeAll: true
      }
    }),
  ];
  return gulp.src('css/**/*.css')
    .pipe(postcss(processors))
    .pipe(gulp.dest('css/'))
    .pipe(browserSync.stream());
});

gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
});

gulp.task('default', ['connect-sync', 'postcss'], function(){
  gulp.watch('src/styles/**/*.+(scss|sass)', ['postcss']);
})
