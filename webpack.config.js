var path = require("path");
var webpack = require("webpack");

module.exports = {
	entry: {
		js: "./js/entry.js",
		css: "bootstrap-sass!./bootstrap-sass.config.js"
	},
	output: {
		path: "./assets",
		filename: "[name].bundle.js",
		publicPath: "http://localhost:8080/assets/"
	},
	module : {
		loaders: [
			// { test:  /\.css$/, loader: 'style!css'},
			// **IMPORTANT** This is needed so that each bootstrap js file required by 
			// bootstrap-webpack has access to the jQuery object 
			{ test: /bootstrap\/js\//, loader: 'imports?jQuery=jquery' },

			// Needed for the css-loader when [bootstrap-webpack](https://github.com/bline/bootstrap-webpack) 
			// loads bootstrap's css. 
			{ test: /\.woff(\?v=\d+\.\d+\.\d+)?$/,   loader: "url?limit=10000&mimetype=application/font-woff" },
			{ test: /\.woff2(\?v=\d+\.\d+\.\d+)?$/,  loader: "url?limit=10000&mimetype=application/font-woff" },
			{ test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/,    loader: "url?limit=10000&mimetype=application/octet-stream" },
			{ test: /\.eot(\?v=\d+\.\d+\.\d+)?$/,    loader: "file" },
			{ test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,    loader: "url?limit=10000&mimetype=image/svg+xml" },
			{ test: /\.js$/, exclude: /node_modules/, loader: "babel-loader"}
		]
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: "jquery",
			jQuery: "jquery",
			"window.jQuery": "jquery",
		})
	]
};