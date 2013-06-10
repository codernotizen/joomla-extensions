<?php

defined('_JEXEC') or die('Restricted access');

// import controller library
jimport('joomla.application.component.controller');

// get an instance of the controller
$controller = JController::getInstance('Jukebox');

// perform request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// redirect if set by the controller
$controller->redirect();

