<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_sis_videogrid
 *
 * @copyright	Copyright © 2023 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

defined('_JEXEC') or die;

?>
<div id="sisvideogrid" class="row <?php echo $module->module.$module->id; ?>">
<div class="col-md-9">
<div class="ratio ratio-16x9"><iframe src="https://www.youtube.com/embed/<?php echo $videos->videos0->id_video; ?>" id="sis_player" class="embed-responsive-item" allowfullscreen="allowfullscreen" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe></div>
</div>
<div class="col-md-3">
<div id="sis_videogrid">
<?php
foreach($videos as $num => $video)
{
    $class = '';
    if($num == 'videos0'){ $class = 'active'; }
    echo '<div class="sis_video '.$class.'"><img src="'.$video->image.'" alt="Vídeo" data-div="'.$module->module.$module->id.'" data-video="'.$video->id_video.'"></div>';
}
?>
</div>
</div>
</div>