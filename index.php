<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class EnglishTranslation
{

    /**
     * Just a function are controls different functions.
     *
     * @return void
     */	
	public function mainController()
	{
		$translatedfile = 'translatedfile.xlsx';
		$engTranslatedFile = 'eng-translation.xlsx';
		$locations = [$engTranslatedFile,$translatedfile];

		foreach($locations as $location) {
			$data[] = $this->getSpreadSheetData($location);
		}
		
		$this->findAndReplace($data);	
	}

    /**
     * Grabs data from spreadsheet supplied from the mainController.
     *
     * @return array
     */
	public function getSpreadSheetData($location) :array
	{
		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($location)->getActiveSheet();

		$array = $spreadsheet->rangeToArray('A3:A69');

		return $array;
	}

    /**
     * Uses data from both spreadsheets to find and replace.
     *
     * @return void
     */
	public function findAndReplace(array $translatedfile) {
		[$from,$to] = $translatedfile;
		$path = 'validation.php';
		
		$file_contents = file_get_contents($path);
			
		foreach($from as $keys => $values) {
			foreach($values as $key =>$value) {
				$file_contents = str_replace($value,$to[$keys][$key],$file_contents);
			}
		}

		file_put_contents($path,$file_contents);
	}
}

$file = new EnglishTranslation();
$file->mainController();
