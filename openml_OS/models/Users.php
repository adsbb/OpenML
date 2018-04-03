<?php
class Users extends Community {
  
  function __construct() {
    parent::__construct();
    $this->table = 'users';
    $this->id_column = 'id';
    $this->deleted_activated = 'id IS NOT NULL ';
  }
}
?>
