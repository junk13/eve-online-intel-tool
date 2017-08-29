<header class="entry-header"><h2 class="entry-title"><?php echo \__('Corporations Breakdown', 'eve-online-intel-tool'); ?> (<?php echo $corporationCount; ?>)</h2></header>
<?php
if(!empty($corporationParticipation)) {
	?>
	<div class="table-responsive table-local-scan table-local-scan-corporation table-eve-intel">
		<table class="table table-condensed">
			<?php
			foreach($corporationParticipation as $corporationList) {
				foreach($corporationList as $corporation) {
					?>
					<tr>
						<td>
							<?php
							$image = \WordPress\Plugin\EveOnlineIntelTool\Libs\Helper\ImageHelper::getInstance()->getLocalCacheImageUriForRemoteImage('corporation', \WordPress\Plugin\EveOnlineIntelTool\Libs\Helper\ImageHelper::getInstance()->getImageServerUrl('corporation') . $corporation['corporationID'] . '_32.png');
							?>
							<img src="<?php echo $image; ?>" alt="<?php echo $corporation['corporationName']; ?>" width="32" heigh="32">
							<?php echo $corporation['corporationName']; ?>
						</td>
						<td>
							<?php echo $corporation['count']; ?>
						</td>
					</tr>
					<?php
				} // END foreach($corporationList as $corporation)
			} // END foreach($localDataCorporationParticipation as $corporationList)
			?>
		</table>
	</div>
	<?php
} // END if(!empty($localDataCorporationParticipation))
