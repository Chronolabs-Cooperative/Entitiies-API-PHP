<?php
/**
 * Email Account Propogation REST Services API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://syd.au.snails.email
 * @license         ACADEMIC APL 2 (https://sourceforge.net/u/chronolabscoop/wiki/Academic%20Public%20License%2C%20version%202.0/)
 * @license         GNU GPL 3 (http://www.gnu.org/licenses/gpl.html)
 * @package         emails-api
 * @since           1.1.11
 * @author          Dr. Simon Antony Roberts <simon@snails.email>
 * @version         1.1.11
 * @description		A REST API for the creation and management of emails/forwarders and domain name parks for email
 * @link            http://internetfounder.wordpress.com
 * @link            https://github.com/Chronolabs-Cooperative/Emails-API-PHP
 * @link            https://sourceforge.net/p/chronolabs-cooperative
 * @link            https://facebook.com/ChronolabsCoop
 * @link            https://twitter.com/ChronolabsCoop
 * 
 */

defined('API_ROOT_PATH') || exit('Restricted access');

api_load('APIFormRadio');

/**
 * Yes/No radio buttons.
 *
 * A pair of radio buttons labelled _YES and _NO with values 1 and 0
 */
class APIFormRadioYN extends APIFormRadio
{
    /**
     * Constructor
     *
     * @param string $caption
     * @param string $name
     * @param string $value Pre-selected value, can be "0" (No) or "1" (Yes)
     * @param string $yes   String for "Yes"
     * @param string $no    String for "No"
     */
    public function __construct($caption, $name, $value = null, $yes = _YES, $no = _NO)
    {
        parent::__construct($caption, $name, $value);
        $this->addOption(1, $yes);
        $this->addOption(0, $no);
    }
}
