module.exports = function( grunt ) {
	require( 'matchdep' ).filterDev( [ 'grunt-*' ] ).forEach( grunt.loadNpmTasks );

	grunt.initConfig( {
		copy: {
			fonts: {
				files: [
					{
						expand: true,
						flatten: true,
						cwd: 'node_modules/source-sans-pro',
						src: '{OTF,WOFF*/OTF}/SourceSansPro-{Regular,Bold}.*',
						dest: 't/fonts/',
						rename: function( dest, src ) {
							return dest + src.replace( /.*?-/, 'content-sans-' ).toLowerCase();
						}
					}
				]
			}
		},
		cssmin: {
			options: {
				keepSpecialComments: 0,
				advanced: false,
				aggressiveMerging: false
			},
			index: {
				files: {
					't/index.css': [ 't/css/index.css' ]
				}
			}
		}
	} );

	grunt.registerTask( 'default', [ 'copy', 'cssmin' ] );
};
