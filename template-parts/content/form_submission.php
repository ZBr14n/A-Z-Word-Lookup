<?php
/**
 * Template part for form submission
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


function add_new_definitions(){
	$the_word = $_POST['the_word'];
	$the_meaning = $_POST['the_meaning'];

	$fields = array(
		'word' => $the_word,
		'meaning' => $the_meaning
	);

	$new_id = pods('definition')->add($fields);
	return $new_id;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submit</title>
</head>
<body>

    <h1>it works!</h1>
    
</body>
</html>