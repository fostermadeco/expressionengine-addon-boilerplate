<?php

class Extension_Name_ext
{

    var $name           = 'Extension_Name';
    var $version        = '1.0';
    var $description    = 'Extension description';
    var $settings_exist = '';
    var $docs_url       = '';

    var $settings       = array();

    /**
     * Constructor
     *
     * @param   mixed   Settings array or empty string if none exist.
     */

    function __construct($settings = '')
    {
        $this->settings = $settings;
    }

    /**
     * Activate Extension
     *
     * This function enters the extension into the exp_extensions table
     *
     * @return void
     */

    function activate_extension()
    {
        $this->settings = array();

        $data = array(
            'class'     => __CLASS__,
            'method'    => '',
            'hook'      => '',
            'settings'  => serialize($this->settings),
            'priority'  => 10,
            'version'   => $this->version,
            'enabled'   => 'y'
        );

        ee()->db->insert('extensions', $data);
    }

    /**
     * Update Extension
     *
     * This function performs any necessary db updates when the extension
     * page is visited
     *
     * @return  mixed   void on update / false if none
     */

    function update_extension($current = '')
    {
        if ($current == '' OR $current == $this->version)
        {
            return FALSE;
        }

        if ($current < '1.0')
        {
            // Update to version 1.0
        }

        ee()->db->where('class', __CLASS__);
        ee()->db->update(
            'extensions',
            array('version' => $this->version)
        );
    }

    /**
     * Disable Extension
     *
     * This method removes information from the exp_extensions table
     *
     * @return void
     */

    function disable_extension()
    {
        ee()->db->where('class', __CLASS__);
        ee()->db->delete('extensions');
    }

    /**
     * Sets up the settings for the extension for more details and options
     * https://docs.expressionengine.com/latest/development/extensions.html#settings
     * 
     * @return array
     */

    function settings()
    {
        $settings = array();

        // General pattern:
        //
        // $settings[variable_name] => array(type, options, default);
        //
        // variable_name: short name for the setting and the key for the language file variable
        // type: i - text input, t - textarea, r - radio buttons, c - checkboxes, s - select, ms - multiselect
        // options: can be string (i, t) or array (r, c, s, ms)
        // default: array member, array of members, string, nothing

        return $settings;
    }
    
}