<?php
/**
 * Copyright (C) 2017 Rounon Dax
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

namespace WordPress\Plugin\EveOnlineIntelTool\Libs;

\defined('ABSPATH') or die();

/**
 * Parsing our intel data
 */
class IntelParser {
	/**
	 * Intel data to parse
	 *
	 * @var string
	 */
	public $eveIntel = null;

	/**
	 * Unique ID for this run
	 *
	 * @var string
	 */
	public $uniqueID = null;

	/**
	 * ID of the new post
	 *
	 * @var int
	 */
	public $postID = null;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->eveIntel = \filter_input(\INPUT_POST, 'eveIntel');
		$this->uniqueID = \uniqid();

		$nonce = \filter_input(\INPUT_POST, '_wpnonce');
		if(!\wp_verify_nonce($nonce, 'eve-online-intel-tool-new-intel-form')) {
			die('Busted!');
		}

		/**
		 * Let's get the intel type
		 * dscan / fleetcomposition / local
		 */
		$intelType = $this->checkIntelType($this->eveIntel);

		switch($intelType) {
			case null:
				$this->postID = null;
				break;

			case 'dscan':
				$this->postID = $this->saveDscanData($this->eveIntel);
				break;

			case 'fleetcomposition':
				$this->postID = $this->saveFleetComositionData($this->eveIntel);
				break;

			case 'local':
				$this->postID = $this->saveLocalScanData($this->eveIntel);
				break;

			default:
				$this->postID = null;
				break;
		} // END switch($intelType)
	} // END public function __construct()

	/**
	 * Determine what type of intel we might have
	 *
	 * @param string $scanData
	 * @return string
	 */
	private function checkIntelType($scanData) {
		$intelType = null;

		/**
		 * Correcting line breaks
		 *
		 * mac -> linux
		 * windows -> linux
		 */
		$cleanedScanData = Helper\IntelHelper::getInstance()->fixLineBreaks($scanData);

		switch($cleanedScanData) {
			case '':
				$intelType = null;
				break;

			/**
			 * First: Fleet Comp
			 */
			case (\preg_match('/^([a-zA-Z0-9 -_]{3,37})[\t](.*)[\t](.* \/ .*) ?$/m', $cleanedScanData) ? true : false):
//				 ^([a-zA-Z0-9 -_]{3,37})[\t](.*)[\t](.*)[\t](.*)[\t](.*)[\t](.*)[\t](.* \/ .*) ?$
				$intelType = 'fleetcomposition';
				break;

			/**
			 * Second: D-Scan
			 */
			case (\preg_match('/^\d+[\t](.*)[\t](-|\d(.*)) ?$/m', $cleanedScanData) ? true : false):
				$intelType = 'dscan';
				break;

			/**
			 * Third: Chat Scan
			 */
			case (\preg_match('/^[a-zA-Z0-9 -_]{3,37}$/m', $cleanedScanData) ? true : false):
				$intelType = 'local';
				break;

			default:
				$intelType = null;
				break;
		} // END switch($cleanedScanData)

		return $intelType;
	} // END private function checkIntelType($scanData)

	/**
	 * Saving the D-Scan data
	 *
	 * @param string $scanData
	 * @return int
	 */
	private function saveDscanData($scanData) {
		$returnData = null;

		$parsedDscanData = Parser\DscanParser::getInstance()->parseDscan($scanData);

		if($parsedDscanData !== null) {
			$postName = $this->uniqueID;

			/**
			 * If we have a system, add it to the post title
			 */
			if(!empty($parsedDscanData['system']['systemName'])) {
				$postName = $parsedDscanData['system']['systemName'];

				if(!empty($parsedDscanData['system']['constellationName'])) {
					$postName .= ' - ' . $parsedDscanData['system']['constellationName'];
				} // END if(!empty($parsedDscanData['system']['constellationName']))

				if(!empty($parsedDscanData['system']['regionName'])) {
					$postName .= ' - ' . $parsedDscanData['system']['regionName'];
				} // END if(!empty($parsedDscanData['system']['regionName']))

				$postName .= ' ' . $this->uniqueID;
			} // END if(!empty($parsedDscanData['system']['name']))

			$metaData = [
				'eve-intel-tool_dscan-rawData' => \maybe_serialize(Helper\IntelHelper::getInstance()->fixLineBreaks($scanData)),
				'eve-intel-tool_dscan-all' => \maybe_serialize($parsedDscanData['all']),
				'eve-intel-tool_dscan-onGrid' => \maybe_serialize($parsedDscanData['onGrid']),
				'eve-intel-tool_dscan-offGrid' => \maybe_serialize($parsedDscanData['offGrid']),
				'eve-intel-tool_dscan-shipTypes' => \maybe_serialize($parsedDscanData['shipTypes']),
				'eve-intel-tool_dscan-system' => \maybe_serialize($parsedDscanData['system']),
				'eve-intel-tool_dscan-time' => \maybe_serialize(\gmdate('Y-m-d H:i:s', \time())),
			];

			$returnData = $this->savePostdata($postName, $metaData, 'dscan');
		} // END if($parsedDscanData !== null)

		return $returnData;
	} // END private function saveDscanData($scanData)

	/**
	 * Saving the fleet composition data
	 *
	 * @param string $scanData
	 * @return int
	 */
	private function saveFleetComositionData($scanData) {
		$returnData = null;
		$parsedFleetComposition = Parser\FleetCompositionParser::getInstance()->parseFleetCompositionScan($scanData);

		if($parsedFleetComposition !== null) {
			$postName = $this->uniqueID;
			$metaData = [
				'eve-intel-tool_fleetcomposition-rawData' => \maybe_serialize($parsedFleetComposition['rawData']),
				'eve-intel-tool_fleetcomposition-fleetOverview' => \maybe_serialize($parsedFleetComposition['fleetCompositionData']['overview']),
				'eve-intel-tool_fleetcomposition-fleetInformation' => \maybe_serialize($parsedFleetComposition['fleetInformation']),
				'eve-intel-tool_fleetcomposition-shipClasses' => \maybe_serialize($parsedFleetComposition['fleetCompositionData']['shipClasses']),
				'eve-intel-tool_fleetcomposition-shipTypes' => \maybe_serialize($parsedFleetComposition['fleetCompositionData']['shipTypes']),
				'eve-intel-tool_fleetcomposition-pilotDetails' => \maybe_serialize($parsedFleetComposition['participationData']['pilotDetails']),
				'eve-intel-tool_fleetcomposition-pilotList' => \maybe_serialize($parsedFleetComposition['participationData']['characterList']),
				'eve-intel-tool_fleetcomposition-corporationList' => \maybe_serialize($parsedFleetComposition['participationData']['corporationList']),
				'eve-intel-tool_fleetcomposition-allianceList' => \maybe_serialize($parsedFleetComposition['participationData']['allianceList']),
				'eve-intel-tool_fleetcomposition-corporationParticipation' => \maybe_serialize($parsedFleetComposition['participationData']['corporationParticipation']),
				'eve-intel-tool_fleetcomposition-allianceParticipation' => \maybe_serialize($parsedFleetComposition['participationData']['allianceParticipation']),
				'eve-intel-tool_fleetcomposition-time' => \maybe_serialize(\gmdate('Y-m-d H:i:s', \time())),
			];

			$returnData = $this->savePostdata($postName, $metaData, 'fleetcomposition');
		}

		return $returnData;
	} // END private function saveFleetComositionData($scanData)

	/**
	 * Saving the local/chat scan data
	 *
	 * @param string $scanData
	 * @return int
	 */
	private function saveLocalScanData($scanData) {
		$returnData = null;

		$parsedLocalData = Parser\LocalScanParser::getInstance()->parseLocalScan($scanData);

		if($parsedLocalData !== null) {
			$postName = $this->uniqueID;
			$metaData = [
				'eve-intel-tool_local-rawData' => \maybe_serialize($parsedLocalData['rawData']),
				'eve-intel-tool_local-pilotDetails' => \maybe_serialize($parsedLocalData['pilotDetails']),
				'eve-intel-tool_local-pilotList' => \maybe_serialize($parsedLocalData['characterList']),
				'eve-intel-tool_local-corporationList' => \maybe_serialize($parsedLocalData['corporationList']),
				'eve-intel-tool_local-allianceList' => \maybe_serialize($parsedLocalData['allianceList']),
				'eve-intel-tool_local-corporationParticipation' => \maybe_serialize($parsedLocalData['corporationParticipation']),
				'eve-intel-tool_local-allianceParticipation' => \maybe_serialize($parsedLocalData['allianceParticipation']),
				'eve-intel-tool_local-time' => \maybe_serialize(\gmdate('Y-m-d H:i:s', \time())),
			];

			$returnData = $this->savePostdata($postName, $metaData, 'local');
		} // END if($parsedDscanData !== null)

		return $returnData;
	} // END private function saveFleetComositionData($scanData)

	/**
	 * Save the post data
	 *
	 * @param string $postName
	 * @param array $metaData
	 * @param string $category
	 * @return int
	 */
	private function savePostdata($postName, $metaData, $category) {
		$returnData = null;

		switch($category) {
			case 'dscan':
				$postTitle = 'D-Scan: ' . \wp_filter_kses($postName);
				break;

			case 'fleetcomposition':
				$postTitle = 'Fleet Composition: ' . \wp_filter_kses($postName);
				break;

			case 'local':
				$postTitle = 'Chat Scan: ' . \wp_filter_kses($postName);
				break;
		}

		$newPostID = \wp_insert_post([
			'post_title' => $postTitle,
			'post_name' => \sanitize_title($postTitle),
			'post_content' => '',
			'post_category' => '',
			'post_status' => 'publish',
			'post_type' => 'intel',
			'comment_status' => 'closed',
			'ping_status' => 'closed',
			'meta_input' => $metaData
		], true);

		if($newPostID) {
			\wp_set_object_terms($newPostID, $category, 'intel_category');

			$returnData = $newPostID;
		} // END if($newPostID)

		return $returnData;
	}
} // END class IntelParser
