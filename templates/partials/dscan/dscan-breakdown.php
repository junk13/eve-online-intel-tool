<?php

/**
 * Copyright (C) 2017 Rounon Dax
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

?>
<div class="dscan-result row">
    <!--
    // Full D-Scan Breakdown
    -->
    <div class="col-md-4 col-sm-6 col-lg-3">
        <?php
        \WordPress\Plugins\EveOnlineIntelTool\Libs\Helper\TemplateHelper::getTemplate('partials/ship/ship-classes', [
            'title' => \__('All', 'eve-online-intel-tool'),
            'count' => $countAll,
            'shipClassList' => (!empty($intelData['dscanDataAll']['data'])) ? $intelData['dscanDataAll']['data'] : null,
            'pluginSettings' => $pluginSettings
        ]);
        ?>
    </div>

    <!--
    // On Grid D-Scan Breakdown
    -->
    <div class="col-md-4 col-sm-6 col-lg-3">
        <?php
        \WordPress\Plugins\EveOnlineIntelTool\Libs\Helper\TemplateHelper::getTemplate('partials/ship/ship-classes', [
            'title' => \__('On Grid', 'eve-online-intel-tool'),
            'count' => $countOnGrid,
            'shipClassList' => (!empty($intelData['dscanDataOnGrid']['data'])) ? $intelData['dscanDataOnGrid']['data'] : null,
            'pluginSettings' => $pluginSettings
        ]);
        ?>
    </div>

    <!--
    // Off Grid D-Scan Breakdown
    -->
    <div class="col-md-4 col-sm-6 col-lg-3">
        <?php
        \WordPress\Plugins\EveOnlineIntelTool\Libs\Helper\TemplateHelper::getTemplate('partials/ship/ship-classes', [
            'title' => \__('Off Grid', 'eve-online-intel-tool'),
            'count' => $countOffGrid,
            'shipClassList' => (!empty($intelData['dscanDataOffGrid']['data'])) ? $intelData['dscanDataOffGrid']['data'] : null,
            'pluginSettings' => $pluginSettings
        ]);
        ?>
    </div>

    <!--
    // Ship Types D-Scan Breakdown
    -->
    <div class="col-md-4 col-sm-6 col-lg-3">
        <?php
        \WordPress\Plugins\EveOnlineIntelTool\Libs\Helper\TemplateHelper::getTemplate('partials/ship/ship-types', [
            'title' => \__('Ship Types', 'eve-online-intel-tool'),
            'shipTypeList' => $intelData['dscanDataShipTypes'],
            'pluginSettings' => $pluginSettings
        ]);
        ?>
    </div>
</div>
