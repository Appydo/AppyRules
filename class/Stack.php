class Stack {
	private $this->stack;
	function __construct() {
		$this->stack = array();
	}
	function add($atom) {
		$this->stack[] = $atom
	}
	function get($position = 0) {
		if (!empty($this->stack)) {
			return $this->stack[$position];
		} else {
			return false;
		}
	}
	function getCurrentPosition() {
		return count($this->stack);
	}
}
