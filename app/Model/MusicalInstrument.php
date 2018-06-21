<?php

/**
 * Musical Instrument
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class MusicalInstrument extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'MusicalInstrument';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'musical_instruments';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'musical_instrument_id';
}
