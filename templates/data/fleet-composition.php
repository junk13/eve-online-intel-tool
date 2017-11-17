<header class="entry-header"><h2 class="entry-title"><?php echo \__('Who is flying what', 'eve-online-intel-tool'); ?></h2></header>
<?php
if(\is_array($fleetOverview) && \count($fleetOverview)) {
	?>
	<div class="table-responsive table-fleetcomposition-scan table-fleetcomposition-scan-fleetinfo table-eve-intel">
		<table class="table table-sortable table-condensed" data-haspaging="no">
			<thead>
				<th><?php echo \__('Name', 'eve-online-intel-tool'); ?></th>
				<th><?php echo \__('Ship Class', 'eve-online-intel-tool'); ?></th>
				<th><?php echo \__('Where', 'eve-online-intel-tool'); ?></th>
			</thead>
			<?php
			foreach($fleetOverview as $data) {
				?>
				<tr data-highlight="shiptype-<?php echo \sanitize_title($data['shipType']); ?>">
					<td>
						<?php
						\WordPress\Plugin\EveOnlineIntelTool\Libs\Helper\TemplateHelper::getTemplate('data/pilot-avatar', [
							'data' => [
								'characterID' => $data['pilotID'],
								'characterName' => $data['pilotName']
							],
							'pluginSettings' => $pluginSettings
						]);

						echo $data['pilotName'];
						?>
					</td>
					<td>
						<?php echo $data['shipClass']; ?>
					</td>
					<td>
						<?php echo $data['system']; ?>
					</td>
				</tr>
				<?php
			} // END foreach($fleetOverview as $data)
			?>
		</table>
	</div>
	<?php
} // END if(\is_array($shipTypes) && \count($shipTypes))
