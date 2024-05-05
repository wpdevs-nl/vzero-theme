//gulpfile.js

let gulp = require('gulp');
let sass = require('gulp-sass')(require('sass'));
let concat = require('gulp-concat');
let rename = require('gulp-rename');
let uglify = require('gulp-uglify');

//style paths
let sassFiles = 'src/scss/**/*.scss';
let cssDest = '.';
let jsFooterFiles = 'src/js/footer/*.js';
let jsHeaderFiles = 'src/js/header/*.js';
let jsDest = 'dist/js';

gulp.task('build', async function(){
    gulp.src(sassFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
    gulp.src(jsFooterFiles)
        .pipe(concat('scripts-footer.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts-footer.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
    gulp.src(jsHeaderFiles)
        .pipe(concat('scripts-header.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts-header.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});

gulp.task('dev', async function() {
    gulp.watch(sassFiles, async function(){
        gulp.src(sassFiles)
            .pipe(sass().on('error', sass.logError))
            .pipe(gulp.dest(cssDest));
    });
    gulp.watch(jsFooterFiles, async function(){
        gulp.src(jsFooterFiles)
            .pipe(concat('scripts-footer.js'))
            .pipe(gulp.dest(jsDest))
            .pipe(rename('scripts-footer.min.js'))
            .pipe(uglify())
            .pipe(gulp.dest(jsDest));
    });
    gulp.watch(jsHeaderFiles, async function(){
        gulp.src(jsHeaderFiles)
            .pipe(concat('scripts-header.js'))
            .pipe(gulp.dest(jsDest))
            .pipe(rename('scripts-header.min.js'))
            .pipe(uglify())
            .pipe(gulp.dest(jsDest));
    });
});