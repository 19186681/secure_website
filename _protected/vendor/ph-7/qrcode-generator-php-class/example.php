<?php
/**
 * @title            QR Code Example
 *
 * @author           WebMaster <x19186681@student.ncirl.ie>
 * @copyright        (c) 2012-2017, WebMaster. All Rights Reserved.
 * @license          GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 */

require 'QRCode.class.php'; // Include the QRCode class

try {
    /**
     * If you have PHP 5.4 or higher, you can instantiate the object like this:
     * (new QRCode)->fullName('...')->... // Create vCard Object
     */
    $oQRC = new QRCode; // Create vCard Object
    $oQRC->fullName('WebMaster')// Add Full Name
    ->nickName('PH7')// Add Nickname
    ->gender('M')// Add Gender
    ->email('x19186681@student.ncirl.ie')// Add Email Address
    ->impp('phs_7@aol.com')// Add Instant Messenger
    ->url('http://ph-7.github.com')// Add URL Website
    ->note('Hello to all! I am a web developer. As hobbies I like climbing and swimming ...')// Add Note
    ->categories('developer,designer,climber,swimmer')// Add Categories
    ->photo('http://files.phpclasses.org/picture/user/1122955.jpg')// Add Avatar
    ->lang('en-US')// Add Language
    ->finish(); // End vCard

    // echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
    $oQRC->display(); // Display

} catch (Exception $oExcept) {
    echo '<p><b>Exception launched!</b><br /><br />' .
        'Message: ' . $oExcept->getMessage() . '<br />' .
        'File: ' . $oExcept->getFile() . '<br />' .
        'Line: ' . $oExcept->getLine() . '<br />' .
        'Trace: <p/><pre>' . $oExcept->getTraceAsString() . '</pre>';
}
