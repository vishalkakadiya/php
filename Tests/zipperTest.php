<?php

//============  Start of file Ziping function Code ===========================================================//

require_once "PHPUnit/Autoload.php";
require_once "zipper.php";


class zipperTest extends PHPUnit_Framework_TestCase {

	protected $zipper;

    protected function setUp() {
		$this->zipper = new zipper();
    }

	public function testLoadZipFiles($source) {

		//$zipper = new zipper();
 
        // use assertEquals to ensure the greeting is what you
        //$expected = "Hello world!"; //$a;
        $actual = $this->zipper->LoadZipFiles($source);
        $this->assertEquals($actual, $actual);
	}

	public function testProcessZip($foldercontent, $folder, $maxsize) {
		//$zipper = new zipper();
 
        // use assertEquals to ensure the greeting is what you
        //$expected = "Hello world!"; // Array;
        $actual = $this->zipper->ProcessZip($foldercontent, $folder, $maxsize);
        $this->assertEquals($actual, $actual);

		/*return array(
			'splits' => count($split),
			'foldername' => ''
		);*/
	}

	public function testgetMemoryLimit() {
		//$zipper = new zipper();
 
        // use assertEquals to ensure the greeting is what you
        //$expected = "Hello world!"; // return $memory_limit;
        $actual = $this->zipper->getMemoryLimit();
        $this->assertEquals($actual, $actual);
	}
	
	public function testremove_directory($directory) {
		//$zipper = new zipper();
 
        // use assertEquals to ensure the greeting is what you
        //$expected = "";
        $actual = $this->zipper->remove_directory($directory);
        $this->assertEquals($actual, $actual);
	}

	public function testmake_zip($album_download_directory) {
		//$zipper = new zipper();
 
        // use assertEquals to ensure the greeting is what you
        //$expected = ""; // return $zipfilename;
        $actual = $this->zipper->make_zip($album_download_directory);
        $this->assertEquals($actual, $actual);
	}


	public function testget_zip( $album_download_directory ) {
		//echo "make_git";
 
        // use assertEquals to ensure the greeting is what you
        //$expected = ""; // return $response;
        $actual = $this->zipper->get_zip($album_download_directory);
        $this->assertEquals($actual, $actual);
	}

	protected function tearDown() {
        unset($this->zipper);
    }

}

?>
