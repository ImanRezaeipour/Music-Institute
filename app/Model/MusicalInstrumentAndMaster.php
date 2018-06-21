<?php

/**
 * Musical Instrument And Master
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class MusicalInstrumentAndMaster extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'MusicalInstrumentAndMaster';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'musical_instruments_and_masters';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'musical_instrument_and_master_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('MusicalInstrument', 'Master');
}
