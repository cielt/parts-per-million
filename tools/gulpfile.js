const { src, dest, series, watch } = require("gulp");
var sass = require("gulp-sass")(require("node-sass")),
  gulpIf = require("gulp-if"),
  cssNano = require("gulp-cssnano"),
  autoprefixer = require("gulp-autoprefixer");

sass.compiler = require("node-sass");

function clean(cb) {
  // place code for clean task here
  cb();
}

function compileSass() {
  return src("../scss/style.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(gulpIf("*.css", cssNano()))
    .pipe(dest("../"));
}

async function watchBuild() {
  await watch(
    "../scss/**/*.scss",
    { ignoreInitial: false },
    series(clean, compileSass)
  );
  // other watchers
}

exports.sass = series(clean, compileSass);
exports.watch = watchBuild;
exports.default = watchBuild;
