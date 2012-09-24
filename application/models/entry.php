<?php

class Entry extends DataMapper {
    var $has_many = array('entry_item');
    var $has_one = array('poll', 'user');
}
