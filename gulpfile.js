"use stricts";

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat');
	cleanCSS = require('gulp-clean-css');
	watch = require('gulp-watch');

 
gulp.task('sass', function () {
	return gulp.src(['scss/styles.scss', 'scss/responsive/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

gulp.task('concat', function() {
  return gulp.src('js/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest('build/js/'));
});

gulp.task('minify-css', function() {
  return gulp.src('css/styles.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('build/css/'));
});

gulp.task('watch', function () {
    gulp.watch(['scss/styles.scss', 'scss/responsive/*.scss'], ['sass', 'concat', 'minify-css']);
});