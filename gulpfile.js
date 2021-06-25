let gulp = require('gulp')
let sass = require('gulp-sass')

/**
 * Defines the paths for gulp to use
 */
var paths = {
  styles: {
    src: './scss/*.scss',
    dest: './resources/css'
  }
}

/**
 * Default script that executes when 'npm run gulp' is called
 * Watches the specified directories for changes and executes a compile script when changes are detected
 */
function watch() {
  gulp.watch(paths.styles.src, scss2css)
}

/**
 * Function that compiles scss files to css
 */
function scss2css() {
  return gulp
    .src(paths.styles.src)
    .pipe(sass())
    .pipe(gulp.dest(paths.styles.dest))
}

exports.scss2css = scss2css
exports.watch = watch

exports.default = watch
