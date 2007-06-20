<?php
/*
Plugin Name: Inline MP3 Player
Plugin URI: http://pjoe.net/software/mp3inline/
Description: Inline mp3 player replacing any link directly to a mp3 file, such as 'http://yoursite.com/musicfile.mp3' into a special link. Clicking it will turn the link into a small media player with a dhtml slider interface. It works simple, click the link the music starts playing. Drag the tab to browse throught the music. Click the link again to stop. This player uses <a href="http://jssoundkit.sourceforge.net/">Javascript Soundkit</a> and the slider of <a href="http://script.aculo.us/">Scriptaculous</a>.
Version: 0.1
Author: Joep Vermaat
Author URI: http://joep-i.nl/

Copyright 2007  Joep vermaat  (email : joep@joep-i.nl)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function setplayerscripts() {
?>
<link rel="stylesheet" href="/wp-content/plugins/inline-mp3-player/css/player.css" type="text/css" media="screen" />
<script type="text/javascript" src="/wp-content/plugins/inline-mp3-player/javascripts/prototype.js"></script>
<script type="text/javascript" src="/wp-content/plugins/inline-mp3-player/javascripts/domready.js"></script>
<script type="text/javascript" src="/wp-content/plugins/inline-mp3-player/javascripts/sprintf.js"></script>
<script type="text/javascript" src="/wp-content/plugins/inline-mp3-player/javascripts/Sound.js"></script>
<script type="text/javascript" src="/wp-content/plugins/inline-mp3-player/javascripts/Player.js"></script>
<script type="text/javascript" src="/wp-content/plugins/inline-mp3-player/javascripts/scriptaculous.js"></script>
<?php
}

add_action('wp_head', 'setplayerscripts');


?>
