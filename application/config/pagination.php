<?php

//CONFIG
$config['base_url'] = 'http://localhost/ci-app/peoples/index';
$config["num_links"] = 5; 

//STYLING PAGINATION
$config["full_tag_open"] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
$config["full_tag_close"] = '</ul></nav>';

$config["first_link"] = 'First';
$config["first_link_open"] = '<li class="page-item">';
$config["first_link_close"] = '</li>';

$config["last_link"] = 'Last';
$config["last_link_open"] = '<li class="page-item">';
$config["last_link_close"] = '</li>';

$config["next_link"] = '&raquo';
$config["next_link_open"] = '<li class="page-item">';
$config["next_link_close"] = '</li>';

$config["prev_link"] = '&laquo';
$config["prev_link_open"] = '<li class="page-item">';
$config["prev_link_close"] = '</li>';

$config["cur_tag_open"] = '<li class="page-item active"><a class="page-link" href="#">';
$config["cur_tag_close"] = '</a></li>';

$config["num_tag_open"] = '<li class="page-item">';
$config["num_tag_close"] = '</li>';

$config['attributes'] = array('class' => 'page-link');