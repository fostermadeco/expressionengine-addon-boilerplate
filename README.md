# ExpressionEngine Add-ons
**_`Note: Delete any file not listed in the add-on(s) you are setting up.`_** <br/>
**_`Note: Add-ons folders should be placed in the system/user/addon folder.`_**

## Addon.setup.php file setup
- File `addon.setup.php` variables
  - 'author'      : Your name
  - 'author_url'  : Link to your profile or company
  - 'name'        : Name of your add-on
  - 'description' : About your add-on
  - 'version'     : The version of your add-on
  - 'namespace'   : Your namespace and your addon name `company\add-on`

## Plugins
Required Folders/Files: 
<br/>
Replace the word "plugin" in the filename with the snake case name of your plugin.<br />
Place the files in your plugin folder

- Folder plugin
  - addon.setup.php
  - pi.plugin.php
  

**_`In the pi.plugin.php file, be sure to replace the class name of "Plugin" with the
name of your plugin with the first letter uppercased.`_**

[ExpressionEngine Plugins](https://docs.expressionengine.com/latest/development/plugins.html)

## Extensions

Replace `extension` with the name of your extensions name <br/>
Place the files in your extension folder

- Folder extension
  - addon.setup.php
  - ext.extension.php
  
**_`In the ext.extension.php file, be sure to replace the class name of "Extension_ext" with the
name of your plugin with the first letter uppercased followed by _ext.`_**
  
- File `ext.extension.php` variables
- In the Properties area at the top of the file set these variables
  - $name           : The name of your extension
  - $version        : The version of your extension
  - $description    : About your extension
  - $settings_exist : They can be y/n
  - $docs_url       : Link to the docs for the extension
  
- In the activate_extension() method set these variables
  - 'method'        : The method that the hook will run when triggered
  - 'hook'          : System event that will run the method [ExpressionEngine Hooks](https://docs.expressionengine.com/latest/development/extensions.html#multiple-extensions-same-hook)
  <br/>
**_`Note: Navigate through ExpressionEngines Extension Hooks to see which hook works for you.`_**

[ExpressionEngine Extensions](https://docs.expressionengine.com/latest/development/extensions.html)
