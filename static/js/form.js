/*
 * Author:        WebMaster <ph7software@gmail.com>
 * Copyright:     (c) 2012-2019, WebMaster. All Rights Reserved.
 * License:       GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 */

var sButtonPattern = 'button[type=submit]';

function enable_button() {
    $(sButtonPattern).attr('disabled', false);
    $(sButtonPattern).css({background: '#E6E6E6'});
}

function disable_button() {
    $(sButtonPattern).attr('disabled', 'disabled');
    $(sButtonPattern).css({background: '#FFF'});
}

var sInputAgree = 'input[name="agree[]"]';
$(sInputAgree).click(function () {
    $(sInputAgree + ':checked').val() == 1 ? enable_button() : disable_button();
});

$('input[name=all_action]').on('click', function () {
    $('input[name="action[]"]').prop('checked', $(this).is(':checked'));
});

/**
 * Check the checkbox fields.
 *
 * @param {Boolean} [extra=false]. Put FALSE if you do not want the confirmation alert. Default: TRUE
 * @return {Boolean}
 */
function checkChecked(bIsConfirmAlert) {
    if (typeof bIsConfirmAlert == "undefined")
        bIsConfirmAlert = true; // Default value

    var iCountChecked = 0;
    $('input[name="action[]"]').each(function () {
        iCountChecked += $(this).is(':checked');
    });

    if (iCountChecked == 0) {
        alert(pH7LangCore.select_least_one);
        return false;
    }
    if (bIsConfirmAlert) {
        return confirm(pH7LangCore.warning_irreversible_action);
    }

    return true;
}