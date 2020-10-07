const path = require('path');
const minify = require('optimize-css-assets-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
	entry: [
        './src/js/script.js',
        './src/scss/global.scss'
    ], 
	output: {
		path: path.resolve(__dirname, 'js'),
		filename: 'script.js'
	},
	module: {
		rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [],
            }, 
            {
                test: /\.s[ac]ss$/i,
                use: [
                  // fallback to style-loader in development
                  MiniCssExtractPlugin.loader,
                  'css-loader',
                  'sass-loader',
                ],
              },
        ]
	},
	optimization: {
		minimizer: [
			new minify({})
		],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../styles/[name].css',
        }),
        new BrowserSyncPlugin({
          files: '**/*.php',
          injectChanges: true,
          proxy: 'http://ridemybicycle.loc'
        })
    ],
};