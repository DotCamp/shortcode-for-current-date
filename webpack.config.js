const autoprefixer = require("autoprefixer");
const MiniCSSExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");

module.exports = (env, argv) => {
	function isDevelopment() {
		return argv.mode === "development";
	}
	var config = {
		entry: {
			editor: "./src/editor.js",
			script: "./src/script.js"
		},
		output: {
			filename: "[name].js"
		},
		optimization: {
			minimizer: [
				new TerserPlugin({
					sourceMap: true
				}),
				new OptimizeCSSAssetsPlugin({
					cssProcessorOptions: {
						map: {
							inline: false,
							annotation: true
						}
					}
				})
			]
		},
		plugins: [
			new CleanWebpackPlugin(),
			new MiniCSSExtractPlugin({
				chunkFilename: "[id].css",
				moduleFilename: chunk => {
					return chunk.name === "script" ? "style.css" : "[name].css";
				}
			})
		],
		devtool: isDevelopment() ? "cheap-module-source-map" : "source-map",
		module: {
			rules: [
				{
					test: /\.js$/,
					exclude: /node_modules/,
					use: {
						loader: "babel-loader",
						options: {
							plugins: ["@babel/plugin-proposal-class-properties"],
							presets: [
								"@babel/preset-env",
								[
									"@babel/preset-react",
									{
										pragma: "wp.element.createElement",
										pragmaFrag: "wp.element.Fragment",
										development: isDevelopment()
									}
								]
							]
						}
					}
				},
				{
					test: /\.(sa|sc|c)ss$/,
					use: [
						{
							loader: MiniCSSExtractPlugin.loader
						},
						"css-loader",
						{
							loader: "postcss-loader",
							options: {
								plugins: [autoprefixer()]
							}
						},
						"sass-loader"
					]
				}
			]
		},
		externals: {
			"@wordpress/blocks": ["wp", "blocks"],
			"@wordpress/i18n": ["wp", "i18n"],
			"@wordpress/editor": ["wp", "editor"],
			"@wordpress/components": ["wp", "components"],
			"@wordpress/element": ["wp", "element"],
			"@wordpress/date": ["wp", "date"]
		}
	};

	return config;
};
