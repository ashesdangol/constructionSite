var gulp = require('gulp'),
browserSync = require('browser-sync').create();

// watch the changes throuh gulp watch
function watch(done){
  browserSync.init({
    notify: false,
    proxy: 'http://constructionsite.local',
    ghostMode: false
  });
  gulp.watch('./*.php').on('change',browserSync.reload);
  gulp.watch('./bundled.js').on('change',browserSync.reload);
  done();
}



exports.watch = watch;


