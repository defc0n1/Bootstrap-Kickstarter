# Bootstrap-Kickstarter

## Demo Page

You can find a demo page here: https://neoblack.github.io/bootstrap/

## How to use it?

1. Clone this repository: `clone git@github.com:NeoBlack/Bootstrap-Kickstarter.git`

2. Use composer to install dependencies `composer install`

3. Switch to Build folder and install dependencies `cd Build && npm install`

4. Build the CSS and JavaScript for the first time `gulp build`

5. Remove the `.git` folder and add all the stuff to your own version control system

## Customize

Go to `Build/Less` and add your custom styles to `frontend.less` and build your CSS again

## Gulp

This project contains a gulp file with the following commands:

| Command        | Description                                      |
| -------------- | ------------------------------------------------ |
| `gulp watch`   | default task: watch changes in less and js files |
| `gulp build`   | call: less, scripts and copy                     |
| `gulp less`    | build CSS from Less files                        |
| `gulp scripts` | build JavaScript files                           |
| `gulp copy`    | copy files like fonts to the Web folder          |
