<?php
/**
 *--------------------------------------------------------------------
 *
 * Parse Exception
 *
 *--------------------------------------------------------------------
 * @author  Kamlesh <kamlesh.verma@ethoswatches.com>
 * 
 * @package https://github.com/kamleshethos/barcode-generator  
 */
namespace Eforce\BarcodeBundle\Generator;
use Exception;

class CINParseException extends Exception {
    protected $barcode;

    /**
     * Constructor with specific message for a parameter.
     *
     * @param string $barcode
     * @param string $message
     */
    public function __construct($barcode, $message) {
        $this->barcode = $barcode;
        parent::__construct($message, 10000);
    }
}
?>