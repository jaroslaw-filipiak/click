<?php

/**
 * The sidebar containing the main widget area.
 *
 * @package click5
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="col-md-3 widget-area" id="sidebar-area" role="complementary">


    <div class="widget-links">
        <h3>HVAC Services</h3>

        <ul>
            <?php wp_list_pages(array('child_of' => 18, 'title_li' => '')); ?>
        </ul>
    </div>

</div>