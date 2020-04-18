<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / SMS Verification / Controller
 */

namespace PH7;

class AdminController extends MainController
{
    public function config()
    {
        $this->view->page_title = $this->view->h2_title = t('Configuration - SMS Gateways');
        $this->output();
    }
}
