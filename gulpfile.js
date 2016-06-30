var gulp = require('gulp');
var watch = require('gulp-watch');
var jshint = require('gulp-jshint');
var plumber = require('gulp-plumber');
var cleanCss = require('gulp-clean-css');
var uglyfly = require('gulp-uglyfly');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var ftp = require('vinyl-ftp');
var stylish = require('jshint-stylish');
var rename = require('gulp-rename');

var js_asset_path = 'wp-content/themes/socnetwork-theme/assets/js/*.js';
var js_path = 'wp-content/themes/socnetwork-theme/js';

var scss_asset_path = 'wp-content/themes/socnetwork-theme/assets/scss/**/*.scss';
var css_path = 'wp-content/themes/socnetwork-theme/css';

gulp.task('jshint', function() {
    return gulp.src('resources/assets/js/*.js')
        .pipe(plumber())
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('compress', ['jshint'], function() {
    gulp.src(js_asset_path)
        .pipe(uglyfly({
            mangle: false
        }))
        // .pipe(rename({
        //     suffix: '.min',
        //     extname: '.js'
        // }))
        .pipe(gulp.dest(js_path))
});

gulp.task('styles', function () {
    return gulp.src(scss_asset_path)
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest(css_path))
        //.pipe(cleanCss())
        // .pipe(rename({
        //     suffix: '.min',
        //     extname: '.css'
        // }))
        //.pipe(gulp.dest('public/src/css'))
});

gulp.task('cleanCss', function () {
   return gulp.src(css_path)
       .pipe(cleanCss)
       .pipe(gulp.dest(css_path))
});

var globs = [
    'css-min/**',
    'js-min/**',
    'images/**',
    'fonts/**',
    '*.html',
    '*.php'
];

// gulp.task('ftp', function () {
//     var conn = ftp.create({
//         host: 'durlanactest.comxa.com',
//         user: ' a5829335',
//         password: 'Strike12',
//         log: gutil.log
//     });
//
//     return gulp.src(globs, {base: '.', buffer: false})
//         .pipe(conn.newerOrDifferentSize('/public_html'))
//         .pipe(conn.dest('/public_html'));
// });

gulp.task('watch', function() {
    gulp.watch(js_asset_path, ['compress']);
    gulp.watch(scss_asset_path, ['styles']);
});

gulp.task('default', ['watch']);
