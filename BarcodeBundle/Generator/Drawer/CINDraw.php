<?php
/**
 *--------------------------------------------------------------------
 *
 * Base class to draw images
 *
 *--------------------------------------------------------------------
 * @author  Kamlesh <kamlesh.verma@ethoswatches.com>
 * 
 * @package https://github.com/kamleshethos/barcode-generator  
 */
namespace Eforce\BarcodeBundle\Generator\Drawer;

abstract class CINDraw {
    protected $im;
    protected $filename;

    /**
     * Constructor.
     *
     * @param resource $im
     */
    protected function __construct($im) {
        $this->im = $im;
    }

    /**
     * Sets the filename.
     *
     * @param string $filename
     */
    public function setFilename($filename) {
        $this->filename = $filename;
    }

    /**
     * Method needed to draw the image based on its specification (JPG, GIF, etc.).
     */
    abstract public function draw();
}
?>