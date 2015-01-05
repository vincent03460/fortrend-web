<?php
//  Create empty stub Peer class which extends the Base class created in Peer.tpl.
//
// $Id: ExtensionPeer.tpl,v 1.2 2004/10/31 10:24:41 micha Exp $

echo '<' . '?' . 'php';

$db = $table->getDatabase();
if ($table->getPackage()) {
    $package = $table->getPackage();
} else {
    $package = $targetPackage;
}

$thisClass = $table->getPhpName() . 'Peer';
$baseClass = $basePrefix . $thisClass;
?>

require_once '<?php echo ClassTools::getFilePath($pkbase, $basePrefix . $table->getPhpName() . 'Peer') ?>';
include_once '<?php echo ClassTools::getFilePath($package, $table->getPhpName()) ?>';

/**
 * The skeleton for this class was autogenerated by Propel <?php if ($addTimeStamp) { ?>on:
 *
 * [<?php echo $now ?>]
 *
<?php } ?>
 *  You should add additional methods to this class to meet the
 *  application requirements.  This class will only be generated as
 *  long as it does not already exist in the output directory.
 *
 * @package <?php echo $package ?>
 */
class <?php echo $table->getPhpName()?>Peer extends <?php echo $basePrefix . $table->getPhpName() ?>Peer
{
}
