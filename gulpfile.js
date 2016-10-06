// Include gulp
var gulp = require('gulp');

// Watch file for changes
gulp.task('watch', function () {
	gulp.watch(['sass/**/*'], ['sass']);
});

var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
// Default task
gulp.task('default', function(){
	elixir(function(mix) {
	    mix.sass('app.scss');
	});
});


