<?php
namespace Jpspace\JpColors;

/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
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
use Fisharebest\Webtrees\Menu;
use Fisharebest\Webtrees\Theme\ColorsTheme;
use Fisharebest\Webtrees\Theme\AbstractTheme;
use Fisharebest\Webtrees\Individual;
use Fisharebest\Webtrees\Auth;
use Fisharebest\Webtrees\Filter;
use Fisharebest\Webtrees\FlashMessages;
use Fisharebest\Webtrees\Functions\Functions;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module;
use Fisharebest\Webtrees\Theme\ThemeInterface;


/**
 * Class CustomTheme - This is a template showing how to create a custom theme.
 *
 * Since theme folders beginning with an underscore are reserved for special
 * use, you should copy this entire folder ("themes/_custom") to a new name.
 * For example, "themes/custom".  You should also rename the class.
 *
 * In this example, we are extending the webtrees theme, but you could
 * also extend any of the core themes, or even the base theme.
 *
 * Only the first two functions are required: themeId() and themeName().
 * The rest are just examples, and should be removed in actual themes.
 */
class JpColors extends ColorsTheme {
	/**
	 * Give your theme a unique identifier.  Themes beginning with an underscore
	 * are reserved for internal use.
	 *
	 * {@inheritdoc}
	 */
	public function themeId() {
		return 'jpcolors';
	}

	/**
	 * Give your theme a name.  This is shown to the users.
	 * Use HTML entities where appropriate.  e.g. “Black &amp; white”.
	 *
	 * You could use switch($this->locale) {} to provide a translated versions
	 * of the theme name.
	 *
	 * {@inheritdoc}
	 */
	public function themeName() {
		return 'JpColors';
	}
	/**
	 * This is an example function which shows how to add an additional CSS file to the theme.
	 *
	 * {@inheritdoc}
	 */
	public function stylesheets() {
		try {
			$css_files   = parent::stylesheets();
			// Put a version number in the URL, to prevent browsers from caching old versions.
			$css_files[] = WT_BASE_URL . 'themes/jpcolors/jpcolors.css';
		} catch (\Exception $ex) {
			// Something went wrong with our script?  Use the default behaviour instead.
			return parent::stylesheets();
		}

		return $css_files;
	}
	/**
	 * This function is copied from App/Theme/ColorsTheme
	 *
	 * $this->menuPalette() removed
	 * ----------------------------
	 * {@inheritdoc}
	 */
	protected function secondaryMenu() {
		return array_filter(array(
			$this->menuPendingChanges(),
			$this->menuMyPages(),
			$this->menuFavorites(),
			$this->menuThemes(),
                        $this->menuPalette(),
			$this->menuLanguages(),
			$this->menuLogin(),
			$this->menuLogout(),
		));
	}
	/**
	 * This is an example function which shows one way to remove an entry from a menu.
	 *
	 * @param string $surname The significant surname for the page.
	 *
	 * {@inheritdoc}
	 */
/*	public function menuLists($surname) {
		// Start with the default "Lists" menu.
		$menu = parent::menuLists($surname);
		// Remove the "notes" sub-menu.
		$submenus = array_filter($menu->getSubmenus(), function (Menu $menu) {
			return $menu->getClass() !== 'menu-list-note';
		});
		// Replace the sub-menus
		$menu->setSubmenus($submenus);

		return $menu;
	}
*/
        /**
         * Jak přidat do hlavního menu nový odkaz
         * viz: https://www.webtrees.net/index.php/en/forum/11-converting-from-phpgedview-pgv/31238-solved-menu-order
         * @return type
         */
/*
        protected function primaryMenu() {
		$primary_menu = parent::primaryMenu();
		$jpcolors_menu    = new Menu('JpColors', 'http://www.bvff.de/', 'menu-tree');
		return array_merge( $primary_menu, array($jpcolors_menu));
	}
*/
}

return new JpColors; // This script must return a theme object.

