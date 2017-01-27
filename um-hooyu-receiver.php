<?php
/**
 * Ultimate Member Hooyu Receiver
 *
 * A file that retrieves values from a POST request and then renders
 * the markup for the request.
 *
 * @package   UM_Hooyu
 * @author    Matt Radford <matt@10degrees.uk>
 * @license   GPL-2.0+
 * @link      https://www.10degrees.uk
 * @copyright 2017 10°
 */

// Build up the HTML display of of the data
$html = '<div id="wp-remote-post-example-container">';

	$html .= '<h4>The Post Data</h4>';

	$html .= '<ul>';

	foreach( $_POST as $key => $value ) {
		$html .= '<li>' . $key . ': ' . $value . '</li>';
	} // end foreach

	$html .= '</ul>';

$html .= '</div><!-- /#wp-remote-post-example-container -->';

// Finally, echo the HTML to the requester
echo $html;
