var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
  //watch files
  var files = [
  './**/main.css',
  './*.php'
  ];

  //initialize browsersync
  browserSync.init(files, {
      proxy: "localhost/hulk",
      notify: true
    });
});

gulp.task('sass', function () {
  return gulp.src('scss/*.scss')
  .pipe(sass())
  .pipe(gulp.dest('./css/'))
  .pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
  gulp.watch("scss/**/*.scss", ['sass']);
});
