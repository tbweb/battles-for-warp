<?php
class Physics{
	private $_pos = new Position();
	private $_life;

	public function set_pos($p)	{ $this->_pos = $p; }
	public function get_pos()	{ return $this->_pos; }
}
?>