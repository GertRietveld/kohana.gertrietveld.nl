module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    watch: {
        files: ['*/*.php','*/*/*.php','js/*.js','css/*.css'],
        tasks: ['notify:watch'],
        options: { 
          spawn: false,
          livereload: true,
        } 
    },
    notify: {
      watch: {
        options: {
          title: "LiveReload",
          message: 'Watching */*.php,*.js,*.css'
        }
      }
    }
  });


  // grunt.loadNpmTasks('grunt-contrib-concat');
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-notify');  
  // grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task(s).
  grunt.registerTask('default', ['watch','notify:watch']);

};