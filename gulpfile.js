
// ES6 style Promises support for gulp-autoprefixer
require('es6-promise').polyfill();

// declare variables for gulp tasks
var gulp = require('gulp');
var sass  = require('gulp-sass');
var autoprefixer  = require('gulp-autoprefixer');

// sass compiling task to relative root dir
gulp.task('sass', function() {
    return gulp.src('.sass/**/*.scss')
      .pipe(sass())
      .pipe(autoprefixer())
      .pipe(gulp.dest('./'))
  });

// default task
gulp.task('default', ['sass']);
