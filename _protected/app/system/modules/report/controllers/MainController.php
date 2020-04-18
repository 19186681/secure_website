<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2013-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Report / Controller
 */

namespace PH7;

class MainController extends Controller
{
    public function abuse()
    {
        $this->view->page_title = t('Report Abuse/Content');

        $this->output();
    }
}
