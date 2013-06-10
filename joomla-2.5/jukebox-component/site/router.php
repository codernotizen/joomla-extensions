<?php

defined('_JEXEC') or die('Restricted access');

/**
 * Router for the Jukebox component
 *
 * the following SE-friendly URLs are supported
 *
 * http://websi.te/jukebox/  displays all songs
 * http://websi.te/jukebox/interpret/id lists all songs of 
 *                            interpret owning id
 * http://websi.te/jukebox/interpret/ lists all singers and bands
 * http://websi.te/jukebox/genre/id lists all songs of thegenre id
 * http://websi.te/jukebox/genre/ lists all songs of a genre
 * http://websi.te/jukebox/song/id lists all cover versions of a song id
 * http://websi.te/jukebox/song/ lists all available songs
 * http://websi.te/jukebox/play/id plays the song id
*/

function JukeboxBuildRoute(&$query) {

    $segments = array();

    // something happens here

    return $segments;
}

function JukeboxParseRoute($segments) {

}
