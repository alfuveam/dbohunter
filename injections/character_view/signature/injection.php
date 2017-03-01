<?PHP

	// Reject any unwanted access.
	if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
	
	echo '<br/><br/><div class="title">Assinatura</div>';
	echo '<div class="info">';
	echo '<input type="text" size="71" class="form-control" value="[IMG]'.WEBSITE.'/injections/character_view/signature/signature.php?name='.strtolower( urlencode( $player->getName( ) ) ).'[/IMG]" /><br />';
	echo '<img src="../../../injections/character_view/signature/signature.php?name='.strtolower( urlencode( $player->getName( ) ) ).'" alt="'.$player->getName( ).'\'s signature" />';
	echo '</div>';