module.exports = function (grunt) {
	'use strict';
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		connect:{
			server:{
				options:{
					port:9000,
					hostname: '*',
					open: true
				}
			},
			test:{
				options:{
					port:9002,
					hostname: '*',
					keepalive: true
				}
			}
		},
		compass:{
			dev:{
				options:{
					sassDir: 'sass/',
					cssDir: 'css/',
					imagesDir: 'images/',
					fontsDir: 'fonts/',
					outputStyle: 'expanded',
					generatedImagesDir: 'sprites/',
					relativeAssets: true
				}
			},
			prod: {
				options:{
					sassDir: 'sass/',
					cssDir: 'prod/css/',
					imagesDir: 'images/',
					fontsDir: 'fonts/',
					outputStyle: 'compressed',
					generatedImagesDir: 'prod/sprites/',
					relativeAssets: true
				}
			}
		},
		csslint: {
			dev: {
				csslintrc: '.csslintrc',
			},
			strict: {
				src: ['css/*']
			}
		},
		watch:{
			css: {
				files: ['sass/**/*'],
				tasks: ['css']
			},
			options: {
				livereload: true
			}
		},
		uglify:{
			prod:{
				files:{
					'prod/js/jquery.min.js': ['scripts/jquery.js']
				}
			}
		},
		'sftp-deploy': {
		  build: {
		    auth: {
		      host: '200.132.38.51',
		      port: 2251,
		      authKey: 'key1'
		    },
		    src: '/home/paulo/projetos/pronatec/front/etec',
		    dest: '/home/paulovianna/public_html/etec',
		    exclusions: ['/home/paulo/projetos/pronatec/node_modules', '/home/paulo/projetos/pronatec/sass', '/home/paulo/projetos/pronatec/Gruntfile.js', '/home/paulo/projetos/pronatec/pronatec.sublime-project', '/home/paulo/projetos/pronatec/pronatec.sublime-workspace', '/home/paulo/projetos/pronatec/package.json', '/home/paulo/projetos/pronatec/prod', '/home/paulo/projetos/pronatec/.sass-cache', '/home/paulo/projetos/pronatec/.ftppass'],
		    server_sep: '/'
		  }
		}
	});

	grunt.loadNpmTasks('grunt-contrib-connect');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-csslint');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-sftp-deploy');

	grunt.registerTask('css', ['compass:dev', 'csslint:dev']);
	grunt.registerTask('run', ['connect:server', 'watch']);
	grunt.registerTask('build', ['compass:prod', 'uglify:prod', 'connect:test']);
}