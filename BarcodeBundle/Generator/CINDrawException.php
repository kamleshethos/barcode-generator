<?php
/**
 *--------------------------------------------------------------------
 *
 * Draw Exception
 *
 *--------------------------------------------------------------------
 * @author  Kamlesh <kamlesh.verma@ethoswatches.com>
 * 
 * @package https://github.com/kamleshethos/barcode-generator   
 */
namespace Eforce\BarcodeBundle\Generator;
use Exception;

class CINDrawException extends Exception {
    /**
     * Constructor with specific message.
     *
     * @param string $message
     */
    public function __construct($message) {
        parent::__construct($message, 30000);
    }
}
?>