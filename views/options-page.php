<?php
/**
 * Example Code: Settings Page - Broken Implementation v2.
 *
 * This code is part of the article "Using A Config To Write Reusable Code"
 * as published on https://www.alainschlesser.com/.
 *
 * @see       https://www.alainschlesser.com/config-files-for-reusable-code/
 *
 * @package   AlainSchlesser\BrokenSettings2
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   GPL-2.0+
 * @link      https://www.alainschlesser.com/
 * @copyright 2016 Alain Schlesser
 */

namespace AlainSchlesser\BrokenSettings2;

/** @var array $elements Form elements passed through from SettingsPage class. */

?>
<form action='options.php' method='post'>

	<h2>Broken Settings v2 Settings Page</h2>

	<?php echo $elements['fields']; ?>
	<?php echo $elements['sections']; ?>
	<?php echo $elements['submit']; ?>

</form>
