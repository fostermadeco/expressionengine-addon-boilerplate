<?php

class Module_Name_upd
{

    var $version = '1.0.0';

    function install()
    {
        $data = array(
            'module_name' => 'Module_Name',
            'module_version' => $this->version,
            'has_cp_backend' => 'n',
            'has_publish_fields' => 'n'
        );

        ee()->db->insert('modules', $data);

        $data = array(
            'class' => 'Module_Name',
            'method' => 'Method_Name'
        );

        ee()->db->insert('actions', $data);

        return true;
    }

    function update($current = '')
    {
        if (version_compare($current, '1.0.0', '='))
        {
            return FALSE;
        }

        if (version_compare($current, '1.0.0', '<'))
        {
            // todo: Update code goes here
        }

        return TRUE;
    }

    function uninstall()
    {
        ee()->db->where('module_name', 'Module_Name');
        ee()->db->delete('modules');

        ee()->db->where('class', 'Module_Name');
        ee()->db->delete('actions');

        return TRUE;
    }
}