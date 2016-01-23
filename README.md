# Minion Project
>Basic Minion project for a nice start.

## Installation
#### Composer
First, create project root directory. Then use Composer to create your new project.
Type in console (in your root directory) `composer create-project dszczer/minion-project`. Relax and wait to complete the process. This may take a while...

#### Propel configuration
>*NOTE*: if you're not planning to use Propel ORM, simply skip this step.

If you want to use Propel, you need to compile your configuration. To do this type in console (beeing inside project root directory) `./bin/propel config:convert --config-dir /../vendor/dszczer/minion`.
***IMPORTANT***: if you do any change in your `propel.php` file, you need to recompile Propel configuration. To do so type `bin/console propel:config:convert`.

#### Try it out
Set up your local web server ([look here how to do this](http://silex.sensiolabs.org/doc/web_servers.html)) and access it through web browser. Project homepage with a greeting should appear.

## Documentation
For full documentation [go here](http://github.com/dszczer/Minion).