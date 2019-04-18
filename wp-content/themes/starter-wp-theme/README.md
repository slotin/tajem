## What you need to do

Install [NodeJS](https://nodejs.org/en/)  
Install plugin for [Editorconfig](http://editorconfig.org) editor

## Project start

Edit the `projectConfig.json` file to specify your development domain.

Open this folder in the console and install dependencies  

```bash
npm install
npm install -g gulp-cli (if not installed)
```

After that use the available commands

## Available commands

`gulp` - run a project for development, proxy server and file watcher  
`gulp build` - style minification  
`gulp sprite` - sprite generator

## Theme structure

```
wordpress-starter-theme/
├── /assets/               # Theme resources.
│   ├── /css/              # CSS libraries.
│   ├── /dist/             # Compiled Styles (never edited).
│   ├── /fonts/            # Fonts.
│   ├── /images/           # Images.
│   │   └── /sprite/       # Images of sprites.
│   ├── /scripts/          # JS scripts.
│   └── /sass/             # See below for the folder structure.
├── /include/              # PHP files included in function.php
├── /node_modules/         # Node modules (never edited).
├── /template-parts/       # Templates used on Pages.
│   ├── comments.php       # Template used for Comments.
│   ├── content-none.php   # Used if there are no posts.
│   ├── content-page.php   # Used to display page content.
│   ├── content-search.php # Template used for Search Result output.
│   ├── content-single.php # Used to display post content.
│   ├── content.php        # Template used for posts content.
│   ├── head.php           # The content of the <head> tag.
│   └── sidebar.php        # Sidebar content.
└── .editorconfig          # Configuration for Editor.
└── .gitignore             # Specifies intentionally untracked files to ignore
└── 404.php                # Page 404.
└── footer.php             # Footer content
└── function.php
└── gulpfile.js            # Configuration for Gulp.
└── header.php             # Header content
└── index.php              # Displays the latest blog posts (by default).
└── package.json           # NPM packages.
└── page.php               # Template for all pages.
└── projectConfig.json     # Project configuration.
└── screenshot.png         # PNG for theme screenshot in wp dashboard.
└── search.php             # Template for displaying search results.
└── single.php             # Template for single post.
└── style.css              # File to specify the theme name.
└── template-custom.php    # Template for the page (Example).
```

## Structure of the sass folder

```
sass/
├── /block/                # Styles for repeating blocks.
├── /elements/             # Styles for items and elements.
├── /pages/                # Styles for each page in the theme.
└── _base.scss             # Basic styles. Box sizing.
└── _mixins.scss           # Mixins.
└── _sprite.scss           # Sprites (Never edited).
└── _typography.scss       # Project typography.
└── _variables.scss        # Variables.
└── _wp-classes.scss       # Styles for standard WP elements.
└── main.scss              # Compiled file.
```
