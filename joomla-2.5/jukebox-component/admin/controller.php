<?php

defined('_JEXEC') or die('Restricted access');

// import controller library
jimport('joomla.application.component.controller');

/**
 * General Controller of Jukebox Component
 */
class JukeboxController extens JController {

    /**
     * display task
     *
     * @return void
     */
    public function display($cachable = false, $urlparams = false) {
    
        // set default view if not set
        $input = JFactory::getApplication()->input;
        $input->set('view',
                    $input->getCmd('view', 'Jukebox'));

        // call parent behaviour
        parent::display($cachable);
    }
}
