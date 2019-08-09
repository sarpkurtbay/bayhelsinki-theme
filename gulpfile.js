var gulp = require('gulp')
var sass = require('gulp-sass')
var CleanCSS = require('gulp-clean-css')
var sourcemaps = require('gulp-sourcemaps')
var browserSync = require('browser-sync').create()
var imagemin = require('gulp-imagemin')
// var ghpages = require('gh-pages')

sass.compiler = require('node-sass');

gulp.task("sass", function() {
    return gulp.src("src/scss/stylesheet.scss")
        .pipe(sourcemaps.init())    // start creating the sourcemap for the changes otherwise minified css will be on one row
        .pipe(sass())               // change the scss to css
        .pipe(                      // minify css to one intense line
            CleanCSS({ 
                compatibility: 'ie8' 
            })
        )
        .pipe(sourcemaps.write())   // write the "real" locations or rows of code so that they can be viewed with the dev inspector tools
        .pipe(gulp.dest("dist"))    // put the css file in the folder called "dist"
        .pipe(browserSync.stream());// sync the browser to update
})

// gulp.task("html", function(){
//     // "copy" the index.html file in the src folder and paste it into "dist" folder
//     return gulp.src("src/*.html")
//         .pipe(gulp.dest("dist"))
// })

gulp.task("fonts", function() {
    return gulp.src("src/fonts/*")
        .pipe(gulp.dest("dist/fonts"))
})

gulp.task("images", function() {
    return gulp.src("src/img/*")
        .pipe(imagemin())
        .pipe(gulp.dest("dist/img"))
})

gulp.task("watch", function () {    // run in the background until stopped if the task "watch" has been started (see below)
    browserSync.init({              // sync the browser
        server: {
            baseDir: "dist"
        }
    });

    // // watch for any changes in the src/index.html, if there's a change, run the task called "html"
    // gulp.watch("src/*.index", ["html"]).on('change', browserSync.reload);

    gulp.watch("src/scss/stylesheet.scss", ["sass"])   // watch for any changes in the src/css/app.css, if there's a change, run the task called "sass"
    gulp.watch("src/fonts/*", ["fonts"])              // watch for any changes in the src/fonts, if there's a change, run the task called "fonts"
    gulp.watch("src/img/*", ["images"])               // watch for any changes in the src/img, if there's a change, run the task called "images"
})

// gulp.task("deploy", function() {
//     ghpages.publish('dist')
// })

// run as the default when gulp has been started in the command line
// start by running the tasks: "html", "sass" and "watch" (which runs until it's paused with ctrl + C )
gulp.task('default', ["sass", "watch", "fonts", "images"]);
  
