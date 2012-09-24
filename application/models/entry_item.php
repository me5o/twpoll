<?php

class EntryItem extends DataMapper {
    var $has_one = array('entry', 'poll_item');
}
