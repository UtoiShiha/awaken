const VueLoaderPlugin = require('vue-loader/lib/plugin');

const path = require('path');
const environment = process.env.NODE_ENV;
console.log(process.env.NODE_ENV );
console.log(environment);
console.log(path.resolve(__dirname, `./src/conf/${environment}.js`));
console.log(path.resolve(__dirname,'./'));
module.exports = {
    entry: './index.js',
    output: {
        filename:'main.js',
        path:path.resolve(__dirname,'../')
    },
    mode:'development',
    module:{
        rules:[{
               test:/\.vue$/,
               exclude: /node_module/,
               loader: 'vue-loader'
            },
            {
                test: /\.scss$/,
                exclude: /node_module/,
                use: ['vue-style-loader','css-loader','sass-loader']
            },
            {
                test: /\.js?$/,
                exclude: /node_module/,
                loader: 'babel-loader'
            },
            {
                test: /\.pug$/,
                loader: 'pug-plain-loader'
            },
            {
                test: /\.ts$/,
                exclude: /node_modules|vue\/src/,
                loader: 'ts-loader',
                options: { appendTsSuffixTo: [/\.vue$/] }
              }
        ]
    },
    plugins:[
        new VueLoaderPlugin()
    ],
    resolve:{
        extensions:['.ts','.js'],
        alias:{
            'vue$': 'vue/dist/vue.esm.js',
            '@':path.resolve(__dirname,'./'),
            userEnv: path.resolve(__dirname, `./src/conf/${environment}.js`),

        }
    },
    devServer:{
        contentBase: '../../',
        port:3000,
        host:'localhost',
        historyApiFallback:true
    }


}