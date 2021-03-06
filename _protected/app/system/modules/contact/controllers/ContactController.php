<?php
/**
 * @author         WebMaster <hello@secdating.atwebpages.com>
 * @copyright      (c) 2012-2019, WebMaster. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Module / Contact / Controller
 */

namespace PH7;

use PH7\Framework\Layout\Html\Meta;

class ContactController extends Controller
{
    public function index()
    {
        /**
         * For SEO: Google shouldn't waste time indexing a contact form.
         * Instead, it will use that time indexing important pages on MyCMS
         */
        $this->view->header = Meta::NOINDEX;

        $this->view->page_title = t('Contact Us');
        $this->view->h1_title = t('Contact %site_name%');
        $this->output();
    }
}
