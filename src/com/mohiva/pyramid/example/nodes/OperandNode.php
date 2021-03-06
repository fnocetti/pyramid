<?php
/**
 * Mohiva Pyramid
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.textile.
 * It is also available through the world-wide-web at this URL:
 * https://github.com/mohiva/pyramid/blob/master/LICENSE.textile
 *
 * @category  Mohiva/Pyramid
 * @package   Mohiva/Pyramid/Example/Nodes
 * @author    Christian Kaps <christian.kaps@mohiva.com>
 * @copyright Copyright (c) 2007-2012 Christian Kaps (http://www.mohiva.com)
 * @license   https://github.com/mohiva/pyramid/blob/master/LICENSE.textile New BSD License
 * @link      https://github.com/mohiva/pyramid
 */
namespace com\mohiva\pyramid\example\nodes;

use com\mohiva\pyramid\Node;

/**
 * Represents an operand node.
 *
 * @category  Mohiva/Pyramid
 * @package   Mohiva/Pyramid/Example/Nodes
 * @author    Christian Kaps <christian.kaps@mohiva.com>
 * @copyright Copyright (c) 2007-2012 Christian Kaps (http://www.mohiva.com)
 * @license   https://github.com/mohiva/pyramid/blob/master/LICENSE.textile New BSD License
 * @link      https://github.com/mohiva/pyramid
 */
class OperandNode implements Node {

	/**
	 * The operand which this node represents.
	 *
	 * @var mixed
	 */
	private $operand = null;

	/**
	 * The class constructor.
	 *
	 * @param mixed $operand The operand which this node represents.
	 */
	public function __construct($operand) {

		$this->operand = $operand;
	}

	/**
	 * Evaluates the node.
	 *
	 * @return number The result of the evaluation.
	 */
	public function evaluate() {

		return $this->operand;
	}
}
