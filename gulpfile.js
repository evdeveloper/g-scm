"use stricts";

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	watch = require('gulp-watch');
 
gulp.task('sass', function () {
	return gulp.src('scss/styles.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

gulp.task('watch', function () {
    // Watch .css files
    gulp.watch('scss/styles.scss', ['sass']);
});