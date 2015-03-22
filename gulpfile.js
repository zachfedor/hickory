var gulp = require( 'gulp' ),
    bower = require( 'gulp-bower' ),
    sass = require( 'gulp-sass' ),
    autoprefixer = require( 'gulp-autoprefixer' ),
    notify = require( 'gulp-notify' ),
    minifyCSS = require( 'gulp-minify-css' ),
    rename = require( 'gulp-rename' ),
    browserSync = require( 'browser-sync' ),
    reload = browserSync.reload;

var assets = 'wp-content/themes/hickory/assets';
var config = {
    sassDir: assets + '/sass',
    cssDir: assets + '/css',
    imgDir: assets + '/images',
    jsDir: assets + '/js',
    bowerDir: './bower_components'
}

gulp.task('bower', function() {
    return bower()
        .pipe( gulp.dest( config.bowerDir ))
});

gulp.task('styles', function() {
    return gulp.src( config.sassDir + '/**/*.scss' )
        .pipe(sass())
        .pipe(autoprefixer('last 3 version', 'ie 8', 'ie 9'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifyCSS())
        .pipe(gulp.dest( config.cssDir ))
        .pipe(reload({stream: true}));
});

gulp.task('watch', function() {
    browserSync({
        proxy: "http://hickory.dev/"
    });
    gulp.watch(config.sassDir + '/**/*.scss', ['styles']);
    gulp.watch("./**/*.php").on('change', reload);
});

gulp.task('default', ['bower', 'styles']);
