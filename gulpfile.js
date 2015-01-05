//gulp init
var gulp = require('gulp'),
	less = require('gulp-less'),
	runSequence = require('run-sequence'),
	rename = require('gulp-rename'),
	concat = require('gulp-concat'),
	clean = require('gulp-clean'),
	path = require('path'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'),
	minifyCSS = require('gulp-minify-css'),
	del = require('del'),
	htmlMinify = require('gulp-minify-html'),
	usemin = require('gulp-usemin');

//Gulp default
gulp.task('default', ['clean'], function(callback){
	runSequence('image-optz', 'less-css', 'vendor-css', 'css', 'scripts', 'html-build');
});

//Clean task
//Clean the build directory
gulp.task('clean', function(cb) {
    del(['build/'], cb)
});

//JS Minify
// 1 - concatenate scripts
// 2 - minify/uglify script
gulp.task('scripts', function(){
    gulp.src(['js/**/*', '!js/vendor/less.js'])
    //.pipe(concat('main.js'))
    .pipe(uglify())
    //.pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('build/js'));
});

//LESS Compile
gulp.task('less-css', function(){
	gulp.src(['css/main.less', 'css/grid.less', 'default.less'])
    .pipe(less({paths:[path.join(__dirname, 'less', 'includes')]}))
    .pipe(minifyCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('build/css'));
});

gulp.task('vendor-css', function(){
	//get another css files and concatenate it
    gulp.src(['css/*.css'])
    .pipe(concat('vendors.css'))
    .pipe(minifyCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('build/css'));
});

gulp.task('css', function(){
	//get another css files and concatenate it
    gulp.src(['build/css/*.css'])
    .pipe(concat('style.css'))
    .pipe(minifyCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('build/css'));
});

//HTML build
//Replace concatenated and minified files into HTML file.
gulp.task('html-build', function(){
	var opts = {empty: true, cdata: true, comments: true, conditionals: true, quotes: true, spare: true};

	gulp.src('*.html')
	.pipe(usemin())
	.pipe(htmlMinify(opts))
	.pipe(gulp.dest('build/'));
});

gulp.task('image-optz', function(){
	gulp.src(['images/**/*'])
	.pipe(imagemin({ optimizationLevel: 6, progressive: true, interlaced: true }))
	.pipe(gulp.dest('build/images'));
});