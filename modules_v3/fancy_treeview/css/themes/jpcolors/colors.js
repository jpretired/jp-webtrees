/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
 * Copyright (C) 2015 JustCarmen
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

function setStyle() {
	jQuery('li.generation-block div.blockheader').each(function () {
		jQuery(this).replaceWith('<table class="blockheader" cellspacing="0" cellpadding="0"><tbody><tr><td class="blockh1"></td><td class="blockh2"><div class="blockhc">' + jQuery(this).html() + '</div></td><td class="blockh3"></td>')
	});
}
setStyle();
jQuery(document).ajaxComplete(function () {
	setStyle();
})