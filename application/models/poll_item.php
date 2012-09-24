<?php

class PollItem extends DataMapper {
    var $has_one = array('poll');

    var $validation = array(
        'name' => array(
            'label' => 'Name',
            'rules' => array('required', 'trim', 'min_length' => 5, 'max_length' => 100),
        ),
    );
}
