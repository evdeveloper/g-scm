"use stricts";

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	watch = require('gulp-watch');

 
gulp.task('sass', function () {
	return gulp.src(['scss/styles.scss', 'scss/responsive/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

gulp.task('watch', function () {
    gulp.watch(['scss/styles.scss', 'scss/responsive/*.scss'], ['sass']);
});