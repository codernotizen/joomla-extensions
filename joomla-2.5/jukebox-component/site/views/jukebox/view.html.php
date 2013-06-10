<?php

defined('_JEXEC') or die('Restricted access');

// import view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the Jukebox Component
 */
class JukeboxViewJukebox extends JView {

    // overwrite JView display method
    function display($tpl = null) {
        
        // assign data to the view
        $this->msg = $this->get('Msg');

        if (count($errors = $this->get('Errors'))) {
            
            JLog::add(implode('<br />', $errors),
                      JLog::WARNING,
                      'jerror');
            return false;
        }

        // display view
        parent::display($tpl);
    }
}
