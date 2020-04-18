<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / User / Form
 */

namespace PH7;

use PFBC\Element\Button;
use PFBC\Element\Hidden;
use PFBC\Element\Textarea;
use PFBC\Element\Token;
use PFBC\Validation\Str;
use PH7\Framework\Mvc\Request\Http;
use PH7\Framework\Session\Session;
use PH7\Framework\Url\Header;

class EditWallForm
{
    /*
     * This class is still under development, if you are a developer and you want to contribute,
     * Feel free to fork MyCMS repo https://github.com/19186681/secure_website and open a PR with your changes.
     */
    public static function display()
    {
        if (isset($_POST['submit_edit_wall'])) {
            if (\PFBC\Form::isValid($_POST['submit_edit_wall'])) {
                new EditWallFormProcess();
            }

            Header::redirect();
        }

        $oWallData = (new WallModel)->get((new Session)->get('member_id'), (new Http)->get('wall_id'), 0, 1);

        $oForm = new \PFBC\Form('form_edit_wall');
        $oForm->configure(['action' => '']);
        $oForm->addElement(new Hidden('submit_edit_wall', 'form_edit_wall'));
        $oForm->addElement(new Token('edit_wall'));
        $oForm->addElement(new Textarea(t('Content:'), 'post', ['value' => $oWallData->post, 'validation' => new Str(1, 900)]));
        $oForm->addElement(new Button);
        $oForm->render();
    }
}
