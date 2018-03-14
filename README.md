# Create Divi Extension [![Build Status](https://travis-ci.org/elegantthemes/create-divi-extension.svg?branch=master)](https://travis-ci.org/elegantthemes/create-divi-extension)

Create Divi Extensions with no build configuration.

* [Creating an Extension](#creating-an-extension) – How to create a new extension.
* [User Guide](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md) – How to develop extensions bootstrapped with Create Divi Extension.

Create Divi Extension works on macOS, Windows, and Linux.<br>
If something doesn’t work, please [file an issue](https://github.com/elegantthemes/create-divi-extension/issues/new).

## Quick Overview

```sh
npx create-divi-extension my-extension
cd my-extension
yarn start
```

*([npx](https://medium.com/@maybekatz/introducing-npx-an-npm-package-runner-55f7d4bd282b) comes with npm 5.2+ and higher, see [instructions for older npm versions](https://gist.github.com/gaearon/4064d3c23a77c74a3614c498a8bb1c5f))*

Then open your WordPress site to see your extension.<br>
When you’re ready to deploy to production, create a minified bundle with `yarn build`.

<p align='center'>
<img src='./screencast.svg' width='750' alt='npx create-divi-extension my-extension'/>
</p>

### Get Started Immediately

You **don’t** need to install or configure tools like Webpack or Babel.<br>
They are preconfigured and hidden so that you can focus on the code.

Just create a project, and you’re good to go.

## Creating an Extension

**You’ll need to have Node >= 6 on your local development machine** (but it’s not required on the server). You can use [nvm](https://github.com/creationix/nvm#installation) (macOS/Linux) or [nvm-windows](https://github.com/coreybutler/nvm-windows#node-version-manager-nvm-for-windows) to easily switch Node versions between different projects.

To create a new extension, run a single command:

```sh
npx create-divi-extension my-extension
```

*([npx](https://medium.com/@maybekatz/introducing-npx-an-npm-package-runner-55f7d4bd282b) comes with npm 5.2+ and higher, see [instructions for older npm versions](https://gist.github.com/gaearon/4064d3c23a77c74a3614c498a8bb1c5f))*

It will create a directory called `my-extension` inside the current directory.<br>
Inside that directory, it will generate the initial project structure and install the transitive dependencies:

```
my-extension
├── includes
│   ├── modules
│   │   └── HelloWorld
│   │       ├── HelloWorld.jsx
│   │       ├── HelloWorld.php
│   │       └── style.css
│   ├── loader.js
│   ├── loader.php
│   └── MyExtension.php
├── languages
├── node_modules
├── scripts
│   └── frontend.js
├── styles
├── my-extension.php
├── package.json
└── README.md
```

No configuration or complicated folder structures, just the files you need to build your extension.<br>
Once the installation is done, you can open your project folder:

```sh
cd my-extension
```

Inside the newly created project, you can run some built-in commands:

### `npm start` or `yarn start`

Runs the extension in development mode.<br>
Open your WordPress website to view it.

The page will automatically reload if you make changes to the code.<br>
You will see the build errors and lint warnings in the console.

<p align='center'>
<img src='https://cdn.rawgit.com/marionebl/create-react-app/9f62826/screencast-error.svg' width='750' alt='Build errors'>
</p>

### `npm test` or `yarn test`

Runs the test watcher in an interactive mode.<br>
By default, runs tests related to files changed since the last commit.

[Read more about testing.](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#running-tests)

### `npm run build` or `yarn build`

Builds the extension for production to the `build` folder.<br>
It correctly bundles React in production mode and optimizes the build for the best performance.

The build is minified.<br>
By default, it also [includes a service worker](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#making-a-progressive-web-app) so that your extension loads from local cache on future visits.

Your extension is ready to be deployed.

## User Guide

The [User Guide](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md) includes information on different topics, such as:

- [Updating to New Releases](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#updating-to-new-releases)
- [Folder Structure](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#folder-structure)
- [Available Scripts](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#available-scripts)
- [Supported Browsers](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#supported-browsers)
- [Supported Language Features and Polyfills](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#supported-language-features-and-polyfills)
- [Syntax Highlighting in the Editor](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#syntax-highlighting-in-the-editor)
- [Displaying Lint Output in the Editor](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#displaying-lint-output-in-the-editor)
- [Formatting Code Automatically](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#formatting-code-automatically)
- [Debugging in the Editor](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#debugging-in-the-editor)
- [Changing the Page `<title>`](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#changing-the-page-title)
- [Installing a Dependency](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#installing-a-dependency)
- [Importing a Component](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#importing-a-component)
- [Code Splitting](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#code-splitting)
- [Adding a Stylesheet](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#adding-a-stylesheet)
- [Post-Processing CSS](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#post-processing-css)
- [Adding a CSS Preprocessor (Sass, Less etc.)](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#adding-a-css-preprocessor-sass-less-etc)
- [Adding Images, Fonts, and Files](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#adding-images-fonts-and-files)
- [Using the `public` Folder](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#using-the-public-folder)
- [Using Global Variables](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#using-global-variables)
- [Adding Bootstrap](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#adding-bootstrap)
- [Adding Flow](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#adding-flow)
- [Adding a Router](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#adding-a-router)
- [Adding Custom Environment Variables](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#adding-custom-environment-variables)
- [Can I Use Decorators?](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#can-i-use-decorators)
- [Fetching Data with AJAX Requests](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#fetching-data-with-ajax-requests)
- [Integrating with an API Backend](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#integrating-with-an-api-backend)
- [Proxying API Requests in Development](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#proxying-api-requests-in-development)
- [Using HTTPS in Development](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#using-https-in-development)
- [Generating Dynamic `<meta>` Tags on the Server](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#generating-dynamic-meta-tags-on-the-server)
- [Pre-Rendering into Static HTML Files](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#pre-rendering-into-static-html-files)
- [Running Tests](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#running-tests)
- [Debugging Tests](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#debugging-tests)
- [Developing Components in Isolation](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#developing-components-in-isolation)
- [Publishing Components to npm](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#publishing-components-to-npm)
- [Making a Progressive Web App](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#making-a-progressive-web-app)
- [Analyzing the Bundle Size](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#analyzing-the-bundle-size)
- [Deployment](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#deployment)
- [Advanced Configuration](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#advanced-configuration)
- [Troubleshooting](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#troubleshooting)

A copy of the user guide will be created as `README.md` in your project folder.

## How to Update to New Versions?

Please refer to the [User Guide](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#updating-to-new-releases) for this and other information.

## Philosophy

* **One Dependency:** There is just one build dependency. It uses Webpack, Babel, ESLint, and other amazing projects, but provides a cohesive curated experience on top of them.

* **No Configuration Required:** You don't need to configure anything. Reasonably good configuration of both development and production builds is handled for you so you can focus on writing code.

* **No Lock-In:** You can “eject” to a custom setup at any time. Run a single command, and all the configuration and build dependencies will be moved directly into your project, so you can pick up right where you left off.

## What’s Included?

Your environment will have everything you need to build a Divi extension:

* React, JSX, ES6, and Flow syntax support.
* Language extras beyond ES6 like the object spread operator.
* Autoprefixed CSS, so you don’t need `-webkit-` or other prefixes.
* A fast interactive unit test runner with built-in support for coverage reporting.
* A live development server that warns about common mistakes.
* A build script to bundle JS, CSS, and images for production, with hashes and sourcemaps.
* An offline-first [service worker](https://developers.google.com/web/fundamentals/getting-started/primers/service-workers) and a [web app manifest](https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/), meeting all the [Progressive Web App](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#making-a-progressive-web-app) criteria.
* Hassle-free updates for the above tools with a single dependency.

Check out [this guide](https://github.com/nitishdayal/cra_closer_look) for an overview of how these tools fit together.

The tradeoff is that **these tools are preconfigured to work in a specific way**. If your project needs more customization, you can ["eject"](https://github.com/elegantthemes/create-divi-extension/blob/master/packages/react-scripts/template/README.md#npm-run-eject) and customize it, but then you will need to maintain this configuration.

## Popular Alternatives

Create Divi Extension is a great fit for:

* **Learning React** in a comfortable and feature-rich development environment.
* **Starting new React powered Divi extensions.**
* **Creating examples** with React for your extensions.

Here’s a few common cases where you might want to try something else:

* If you want to **try React** without hundreds of transitive build tool dependencies, consider [using a single HTML file or an online sandbox instead](https://reactjs.org/docs/try-react.html).
* If you need **more customization**, check out [Neutrino](https://neutrino.js.org/) and its [React preset](https://neutrino.js.org/packages/react/).

All of the above tools can work with little to no configuration.

If you prefer configuring the build yourself, [follow this guide](https://reactjs.org/docs/add-react-to-an-existing-app.html).

## Contributing

We'd love to have your helping hand on `create-divi-extension`! See [CONTRIBUTING.md](CONTRIBUTING.md) for more information on what we're looking for and how to get started.

## Acknowledgements

We are grateful to the authors of existing related projects for their ideas and collaboration:

* [@eanplatter](https://github.com/eanplatter)
* [@insin](https://github.com/insin)
* [@mxstbr](https://github.com/mxstbr)
