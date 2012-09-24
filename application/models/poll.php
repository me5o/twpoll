<?php

class Poll extends DataMapper {
    var $has_many = array('poll_item', 'entry');
    var $has_one = array('user', 'poll_type', 'status');

    var $validation = array(
        'name' => array(
            'label' => 'Name',
            'rules' => array('required', 'trim', 'min_length' => 5, 'max_length' => 100),
        ),
    );
}
