<?php
class Physics{
	private		$_pos = new Position();
	private int	$_w;
	private int	$_h;
	private		$_life;

	public function set_pos($p)	{ $this->_pos = $p; }
	public function get_pos()	{ return $this->_pos; }
}
?>