<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category  Symmetrics
 * @package   Symmetrics_TweaksGerman
 * @author    symmetrics - a CGI Group brand <info@symmetrics.de>
 * @author    Torsten Walluhn <torsten.walluhn@cgi.com>
 * @copyright 2012 symmetrics - a CGI Group brand
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://www.symmetrics.de/
 */

/**
 * Block class to render the additional quote informations.
 *
 * @category  Symmetrics
 * @package   Symmetrics_TweaksGerman
 * @author    symmetrics - a CGI Group brand <info@symmetrics.de>
 * @author    Torsten Walluhn <torsten.walluhn@cgi.com>
 * @copyright 2012 symmetrics - a CGI Group brand
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      http://www.symmetrics.de/
 */
class Symmetrics_TweaksGerman_Block_Checkout_Additional extends Mage_Core_Block_Text
{
    /**
     * Returns the html output.
     *
     * @return string
     */
    public function _toHtml()
    {
        $text = Mage::getStoreConfig('checkout/cart/additional_info');
        return $text;
    }
}
