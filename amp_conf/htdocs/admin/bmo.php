<?php
// vim: set ai ts=4 ft=php:

/*
 * This is the Generator for the FreePBX Big Module Object.
 *
 * Copyright 2013 Rob Thomas <rob.thomas@schmoozecom.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
*/

include 'libraries/FreePBX.class.php';

$fpbx = new FreePBX();

// $r = $fpbx->PJSip->getAllOld();

$pjsip = $fpbx->PJSip->generateEndpoints();

$conf = $fpbx->PJSip->writePJSipConf($pjsip);

print $conf;
		


