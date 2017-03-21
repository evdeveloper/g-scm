"use stricts";

var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	cleanCSS = require('gulp-clean-css'),
	concatCSS = require('gulp-concat-css'),
	pump = require('pump'),
	watch = require('gulp-watch');

 
gulp.task('sass', function () {
	return gulp.src(['scss/styles.scss', 'scss/responsive/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

gulp.task('concat-js', function() {
  return gulp.src('js/sliders/*.js')
    .pipe(concat('sliders.js'))
    .pipe(gulp.dest('build/js/'));
});

gulp.task('minify-js', function (cb) {
	pump([gulp.src('build/js/*.js'), uglify(), gulp.dest('build/js')], cb);
});

gulp.task('concat-css', function () {
	return gulp.src(['css/responsive_320.css', 'css/responsive_648.css', 'css/responsive_1170.css', 'css/responsive_320-648.css'])
		.pipe(concatCSS('responsive.css'))
    	.pipe(gulp.dest('build/css/'));
});

gulp.task('minify-css', function() {
  return gulp.src('build/css/responsive.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('build/css/'));
});

gulp.task('watch', function () {
    gulp.watch(['scss/styles.scss', 'scss/responsive/*.scss'], ['sass', 'concat-js', 'minify-js', 'concat-css', 'minify-css']);
});