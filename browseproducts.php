<?php


require_once(__DIR__ . '../../../config.php');

$url = new moodle_url('/local/commercedev/browseproducts.php');
$PAGE->set_url($url);
// Print title and header.
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('browseproducts', 'local_commercedev'));
$PAGE->set_heading(get_string('browseproducts', 'local_commercedev'));

echo $OUTPUT->header();

$data = json_decode(file_get_contents("$CFG->dirroot/local/commercedev/exampledata.json"));


echo $PAGE->get_renderer('core')->render_from_template('local_commercedev/productlisting', $data);

echo $OUTPUT->footer();
