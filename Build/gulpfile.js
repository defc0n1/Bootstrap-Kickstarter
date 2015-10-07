
var gulp = require('gulp');
var less = require('gulp-less');
var minifyCSS = require('gulp-minify-css');
var del = require('del');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

/**
 * Default task
 */
gulp.task('default', ['watch']);

/**
 * Build task
 */
gulp.task('build', ['less', 'scripts', 'copy']);

/**
 * Watcher task
 */
gulp.task('watch', function() {
	gulp.watch('Less/**/*.less', ['less']);
	gulp.watch('JavaScript/**/*.js', ['scripts']);
});

/**
 * Build CSS
 */
gulp.task('less', function() {
	del('../Web/Css/frontend.css', {force: true});

	gulp.src('Less/frontend.less')
		.pipe(less())
		.pipe(minifyCSS())
		.pipe(gulp.dest('../Web/Css'));
});

/**
 * Build JavaScript
 */
gulp.task('scripts', function() {
	gulp.src([
		'JavaScript/require.js',
		'JavaScript/base.js'
	])
	.pipe(concat('frontend.js'))
	.pipe(uglify())
	.pipe(gulp.dest('../Web/JavaScript'));

	// jquery and bootstrap
	gulp.src([
		'../vendor/twbs/bootstrap/dist/js/bootstrap.min.js',
		'../vendor/components/jquery/jquery.min.js'
	])
	.pipe(gulp.dest('../Web/JavaScript/libs'));
});

/**
 * Copy resources
 */
gulp.task('copy', function() {
	gulp.src('../vendor/fortawesome/font-awesome/fonts/*')
		.pipe(gulp.dest('../Web/Fonts'));
});
