'use strict';
// TODO - Would like to add a minified style.css from SASS.

module.exports = function(grunt) {
  var jsFileList = [
    'assets/js/plugins/*.js',
    'assets/js/_*.js',
    'assets/vendor/jquery-color/jquery.color.js'
  ];

  grunt.initConfig({ pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'assets/css/main.css': 'assets/scss/main.scss',
        }
      }
    },

    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        '!assets/js/scripts.js',
        '!assets/**/*.min.*'
      ]
    },

    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: [jsFileList],
        dest: 'assets/js/scripts.js'
      }
    },

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        files: {
          'assets/js/scripts.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },

    watch: {
      sass: {
        files: ['assets/scss/*.scss', 'assets/scss/**/*.scss'],
        tasks: 'sass'
      },

      js: {
        files: [
          jsFileList,
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'concat']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');

  grunt.registerTask('build', ['concat', 'uglify', 'sass']);
};
