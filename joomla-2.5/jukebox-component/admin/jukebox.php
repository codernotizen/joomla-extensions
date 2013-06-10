<?php

defined('_JEXEC') or die('Restricted access');

// import controller library
jimport('joomla.application.component.controller');

// get an instance of the Jukebox controller
$controller = JController::getInstance('JukeBox');

// get the task
$jinput = JFactory::getApplication()->input;
$task = $jinput->get('task', "", 'STR');

// perform the request task
$controller->execute($task);

// redirect if set by the controller
$controller->redirect();

