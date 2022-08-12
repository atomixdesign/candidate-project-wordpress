# Atomix theme

### The theme used in this trial is a simplified version of the "Twenty-Twenty-One" theme from WordPress.

## Setting up the project

1. Once the WordPress site is setup and configured in your local environment and database.
2. You will need to navigate via the terminal into the `atomix` theme folder.
3. Using `yarn install`, install all the node dependencies
4. Thereafter, to watch the SCSS and JS files, run `yarn dev`

### ** Note:

Depending on your local environment setup you are using to run this WordPress site locally, you will need to update this line\
`const localDomain = 'https://candidate-project-wordpress.local.dev';` with the correct domain name in your environment to proxy **IF** you are using "LiveReload". \
If not, please comment out this section on the `webpack.config.js` file:

```javascript
new BrowserSyncPlugin({
  proxy: localDomain,
  files: [ outputPath + '/*.css' ],
  injectCss: true,
}, { reload: false, })
```

### Important

We are using WebPack in this theme to compile the SCSS and TS files to the `dist` folder. So any SCSS or TS files, need to be included to their respective folders inside the `assets` folder to be watch via Webpack.

All the Webpack configuration settings are in the `webpack.config.js` file. \
You won't need to touch this file for your work. But it's there if needed to be edited.



