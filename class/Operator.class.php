class Operator {
	function And($a, $b) {
		return $a and $b;
	}
	function Or($a, $b) {
		return $a or $b;
	}
	function Egal($a, $b) {
		return $a == $b;
	}
	function Lesser($a, $b) {
		return $a < $b;
	}
}
