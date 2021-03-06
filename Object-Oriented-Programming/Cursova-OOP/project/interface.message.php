<?php
/**
 * Storable interface
 *
 * @category    The Principles of Object Oriented Programming
 * @package     Курсова з предмету "Об'єкно Орієнтованого Програмування"
 * @author      Oleg Butuzov <butuzov@made.ua>
 *
 * Requires PHP: 7.1
 */

namespace Cursova;

interface Message {

	public function __toString() : string;
	public function type() : string;

	public function do( Student $student );
}
