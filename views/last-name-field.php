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

/** @var array $options Options passed through from SettingsPage class. */

?>
<input type='text' name='assb1_settings[assb1_text_field_last_name]'
       value='<?php echo $options['assb1_text_field_last_name']; ?>'>
