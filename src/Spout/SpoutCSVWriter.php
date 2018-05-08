<?php

namespace CaT\Libs\ExcelWrapper\Spout;

use \CaT\Plugins\MateriaList\ilActions;
use \CaT\Libs\ExcelWrapper\Writer;

use Box\Spout\Common\Type;
use Box\Spout\Writer\WriterFactory;

use Box\Spout\Writer\Style\Style;
use Box\Spout\Writer\Style\BorderBuilder;
use Box\Spout\Writer\Style\StyleBuilder;

/**
 * Export a single material list
 */
class SpoutCSVWriter implements Writer {
	public function __construct() {
		$this->writer = WriterFactory::create(Type::CSV);
	}

	/**
	 * Open file for spout
	 *
	 * @throws \LogicException if path or file name is not set.
	 *
	 * @return null
	 */
	public function openFile() {
		if($this->file_path === null || $this->file_name === null) {
			throw new \LogicException(__METHOD__." path or filename is not set.");
		}

		$this->writer->openToFile($this->getFilePath());
	}

	/**
	 * @inheritdoc
	 */
	public function setFileName($file_name) {
		$this->file_name = $file_name;
	}

	/**
	 * @inheritdoc
	 */
	public function setPath($file_path) {
		$this->file_path = $file_path;
	}

	/**
	 * @inheritdoc
	 */
	public function createSheet($sheet_name) {
		return;
	}

	/**
	 * @inheritdoc
	 */
	public function selectSheet($sheet_name) {
		return;
	}

	/**
	 * @inheritdoc
	 */
	public function setColumnStyle($column, $style) {
	}

	/**
	 * @inheritdoc
	 */
	public function addRow(array $values) {
		$this->writer->addRowToWriter($values);
	}

	/**
	 * @inheritdoc
	 */
	public function addSeperatorRow() {
		$this->writer->addRowToWriter(array(""));
	}

	/**
	 * Add new empty row
	 *
	 * @return null
	 */
	public function addEmptyRow() {
		$this->writer->addRowToWriter(array(""));
	}

	/**
	 * @inheritdoc
	 */
	public function saveFile() {
		return;
	}

	/**
	 * @inheritdoc
	 */
	public function close() {
		$this->writer->close();
	}

	/**
	 * Get the full path to file
	 *
	 * @return string
	 */
	protected function getFilePath() {
		return $this->file_path.$this->file_name;
	}

	/**
	* Sets the field delimiter for the CSV
	*
	* @api
	* @param string $fieldDelimiter Character that delimits fields
	* @return Writer
	*/
	public function setFieldDelimiter($fieldDelimiter) {
		$this->writer->setFieldDelimiter($fieldDelimiter);
	}

	/**
	* Sets the field enclosure for the CSV
	*
	* @api
	* @param string $fieldEnclosure Character that enclose fields
	* @return Writer
	*/
	public function setFieldEnclosure($fieldEnclosure) {
		$this->writer->setFieldEnclosure($fieldEnclosure);
	}
}