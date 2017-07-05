module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'css/app.css': 'scss/app.scss'
        }
      }
    },

    // uglify: {
    //   options: {
    //     sourceMap: true
    //   },
    //   dist: {
    //     files: {
    //       'js/app.min.js': ['js/owl.carousel.js', 'js/menu.js', 'js/scroll.js', 'js/media.js',
    //         'js/article.js', 'js/gallery.js']
    //     }
    //   }
    // },

    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass']
      }

      // js: {
      //   files: ['js/*.js', '!js/*.min.js', '!**/node_modules/**'],
      //   tasks: ['uglify']
      // }
    }

  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);
};