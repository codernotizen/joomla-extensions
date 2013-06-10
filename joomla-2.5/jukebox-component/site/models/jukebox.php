<?php

defined('_JEXEC') or die('Restricted access');

// import modelitem library
jimport('joomla.application.component.modelitem');

/**
 * Jukebox Model
 */
class JukeboxModelJukebox extends JModelItem {

    /**
     * @var string msg
     */
    protected $msg;

    /**
     * Get the message
     * @return string The message displayed to the user
     */
    public function getMsg() {

        if (!isset($this->msg)) {
            $this->msg = 'I am a jukebox!';
        }
        return $this->msg;
    }
}
