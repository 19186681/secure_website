/*
 * Author:        WebMaster <x19186681@student.ncirl.ie>
 * Copyright:     (c) 2012-2019, WebMaster. All Rights Reserved.
 * License:       GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 */

function display_status() {
    var sSelected = 'select#status option:selected';
    var sStatusTitle = $(sSelected).text();
    var iStatusVal = $(sSelected).val();
    var sCssClass = (iStatusVal == 1 ? 'green' : (iStatusVal == 2 ? 'orange' : (iStatusVal == 3 ? 'red' : 'gray')));
    $('#status_div').html('<span class="' + sCssClass + '" title="' + sStatusTitle + '">•</span>');
}

function init_status() {
    display_status();
}
