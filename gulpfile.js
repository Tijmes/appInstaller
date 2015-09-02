// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');

// Compile Frontend Sass 
gulp.task('sass', function() {
	return gulp.src('assets/scss/style.scss')
		.pipe(plumber())
		.pipe(sass())
    	.pipe(gulp.dest('assets/dist'));
});

// Concatenate & Minify Base JS
gulp.task('scripts-base', function() {
	return gulp.src([
	        'assets/js/vendor/jquery-1.11.2.min.js',
	        'assets/js/gsap/TweenMax.min.js',
	        'assets/js/plugins.js',
	        'assets/js/lib/underscore.js',
	        'assets/js/lib/backbone.js',
			'assets/js/vendor/modernizr-2.8.3.min.js'
		])
		.pipe(plumber())
		.pipe(concat('all-base.js'))
		.pipe(gulp.dest('assets/dist'))
		.pipe(rename('base.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('assets/dist'));
});

// Concatenate & Minify Frontend JS
gulp.task('scripts', function() {
	return gulp.src([
			'assets/js/main.js'
		])
		.pipe(plumber())
		.pipe(concat('all.js'))
		.pipe(gulp.dest('assets/dist'))
		.pipe(rename('j.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('assets/dist'));
});


// Watch Files For Changes
gulp.task('watch', function() {
	gulp.watch('assets/*.js', ['scripts']);
	gulp.watch('assets/lib/*.js', ['scripts-base']);
	gulp.watch('assets/scss/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['scripts-base', 'scripts', 'sass', 'watch']);


