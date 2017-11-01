<header class="entry-header"><h2 class="entry-title"><?php echo \__('Corporations Breakdown', 'eve-online-intel-tool'); ?> (<?php echo $corporationCount; ?>)</h2></header>
<?php
if(!empty($corporationParticipation)) {
	?>
	<div class="table-responsive table-local-scan table-local-scan-corporation table-eve-intel">
		<table class="table table-condensed table-sortable" data-haspaging="no" data-order='[[ 1, "desc" ]]'>
			<thead>
				<th><?php echo \__('Corporation Name', 'eve-online-intel-tool'); ?></th>
				<th><?php echo \__('Count', 'eve-online-intel-tool'); ?></th>
			</thead>
			<?php
			foreach($corporationParticipation as $corporationList) {
				foreach($corporationList as $corporation) {
					?>
					<tr data-highlight="alliance-<?php echo $corporation['allianceID']; ?>">
						<td>
							<?php
							\WordPress\Plugin\EveOnlineIntelTool\Libs\Helper\TemplateHelper::getTemplate('data/corporation-logo', [
								'data' => $corporation,
								'pluginSettings' => $pluginSettings
							]);

							echo $corporation['corporationName'];
							?>
						</td>
						<td class="table-data-count">
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
