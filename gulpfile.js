// Include gulp
var gulp = require('gulp');

// Include plugins
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

// Functions
function swallowError (error) {
  // Details of the error in the console
  console.log(error.toString());
  this.emit('end');
}

// sass
gulp.task('sass', function(){
  return gulp.src('./assets/scss/**/*.scss')
    .pipe(sass())
    .on('error', swallowError)
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream());
});

// brower-sync
gulp.task('serve', ['sass'], function(){
    browserSync.init({
        proxy : "http://localhost/test1"
    });

    gulp.watch('./assets/scss/**/*.scss', ['sass']);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
    gulp.watch('./assets/js/main.js').on('change', browserSync.reload);
});


// default task
gulp.task('default', ['serve']);
