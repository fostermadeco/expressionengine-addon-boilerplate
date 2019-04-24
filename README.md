# ExpressionEngine Add-ons
**_`Note: Delete any file not listed in the add-on(s) you are setting up.`_**

## Addon.setup.php file setup
- File `addon.setup.php` variables
  - 'author'      : Your name
  - 'author_url'  : Link to your profile or company
  - 'name'        : Name of your add-on
  - 'description' : About your add-on
  - 'version'     : The version of your add-on
  - 'namespace'   : Your namespace and your addon name `company\add-on`

## Plugins
Required Folders/Files: <br/>

- Folder plugin
  - addon.setup.php
  - pi.plugin.php

[ExpressionEngine Plugins](https://docs.expressionengine.com/latest/development/plugins.html)

## Extensions

- Folder extension
  - addon.setup.php
  - ext.extension.php
  
- File `ext.extension.php` variables
- Properties
  - $name           : The name of your extension
  - $version        : The version of your extension
  - $description    : About your extension
  - $settings_exist : They can be y/n
  - $docs_url       : Link to the docs for the extension
- activate_extension()
  - 'method'        : The method that the hook will run when triggered
  - 'hook'          : System event that will run the method [ExpressionEngine Hooks](https://docs.expressionengine.com/latest/development/extensions.html#multiple-extensions-same-hook)
  <br/>
**_`Note: Navigate through ExpressionEngines Extension Hooks to see which hook works for you.`_**

[ExpressionEngine Extensions](https://docs.expressionengine.com/latest/development/extensions.html)
