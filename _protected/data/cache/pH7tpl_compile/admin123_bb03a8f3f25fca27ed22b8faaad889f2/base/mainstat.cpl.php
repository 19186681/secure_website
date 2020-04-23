<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2020-04-21 12:28:31
Compiled file from: /usr/share/nginx/html/_protected/app/system/modules/admin123/views/base/tpl/main/stat.tpl
Template Engine: PH7Tpl version 1.4.0 by WebMaster
*/
/***************************************************************************
 *     MyCMS Web Engineer: WebMaster
 *               --------------------
 * @since      Mon Mar 21 2011
 * @author     WebMaster
 * @email      hello@secdating.atwebpages.com
 * @link       https://secdating.atwebpages.com
 * @copyright  (c) 2011-2020, WebMaster. All Rights Reserved.
 * @license    Creative Commons Attribution 3.0 License - http://creativecommons.org/licenses/by/3.0/
 ***************************************************************************/
?><script src="https://www.google.com/jsapi"></script><script> google.load("visualization", "1", {packages:["corechart"]}); google.setOnLoadCallback(showUserChart); function showUserChart() { $('#user_chart').html(''); var oDate = new Date; var oDateOptions = { day: "numeric", month: "short", year: "numeric" }; oDate.setFullYear(oDate.getFullYear()); var sYear = oDate.toLocaleDateString('<?php echo $this->config->values['language']['lang'] ;?>', oDateOptions); oDate.setMonth(oDate.getMonth()-1); var sMonth = oDate.toLocaleDateString('<?php echo $this->config->values['language']['lang'] ;?>', oDateOptions); oDate.setDate(oDate.getDay()-7); var sWeek = oDate.toLocaleDateString('<?php echo $this->config->values['language']['lang'] ;?>', oDateOptions); oDate.setDate(oDate.getDay()); var sDay = oDate.toLocaleDateString('<?php echo $this->config->values['language']['lang'] ;?>', oDateOptions); var aData = google.visualization.arrayToDataTable([ ['<?php echo t('Time'); ?>', '<?php echo t('All'); ?>', '<?php echo t('Man'); ?>', '<?php echo t('Women'); ?>', '<?php echo t('Couples'); ?>'], [sDay, <?php echo $today_total_members; ?>, <?php echo $today_total_male_members; ?>, <?php echo $today_total_female_members; ?>, <?php echo $today_total_couple_members; ?>], [sWeek, <?php echo $week_total_members; ?>, <?php echo $week_total_male_members; ?>, <?php echo $week_total_female_members; ?>, <?php echo $week_total_couple_members; ?>], [sMonth, <?php echo $month_total_members; ?>, <?php echo $month_total_male_members; ?>, <?php echo $month_total_female_members; ?>, <?php echo $month_total_couple_members; ?>], [sYear, <?php echo $year_total_members; ?>, <?php echo $year_total_male_members; ?>, <?php echo $year_total_female_members; ?>, <?php echo $year_total_couple_members; ?>] ]); var aOptions = { title: '<?php echo t('User Statistics'); ?>' }; new google.visualization.LineChart($('#user_chart')[0]).draw(aData, aOptions); }</script><div id="user_chart"></div><div class="table-responsive panel panel-default"> <div class="panel-heading bold"><?php echo t('%site_name% Statistics'); ?></div> <table class="table table-striped"> <tr> <th class="bold"><?php echo t('Quick Stats'); ?></th> <th class="bold"><?php echo t('Today'); ?></th> <th class="bold"><?php echo t('Last week'); ?></th> <th class="bold"><?php echo t('This month'); ?></th> <th class="bold"><?php echo t('This year (%0%)', date('Y')); ?></th> <th class="bold"><?php echo t('All (since %0%)', $since_date); ?></th> </tr> <tr> <td><?php echo t('All Member Logins'); ?></td> <td><?php echo $today_login_members; ?></td> <td><?php echo $week_login_members; ?></td> <td><?php echo $month_login_members; ?></td> <td><?php echo $year_login_members; ?></td> <td><?php echo $login_members; ?></td> </tr> <tr> <td><?php echo t('Men Member Logins'); ?></td> <td><?php echo $today_login_male_members; ?></td> <td><?php echo $week_login_male_members; ?></td> <td><?php echo $month_login_male_members; ?></td> <td><?php echo $year_login_male_members; ?></td> <td><?php echo $login_male_members; ?></td> </tr> <tr> <td><?php echo t('Women Member Logins'); ?></td> <td><?php echo $today_login_female_members; ?></td> <td><?php echo $week_login_female_members; ?></td> <td><?php echo $month_login_female_members; ?></td> <td><?php echo $year_login_female_members; ?></td> <td><?php echo $login_female_members; ?></td> </tr> <tr> <td><?php echo t('Couple Member Logins'); ?></td> <td><?php echo $today_login_couple_members; ?></td> <td><?php echo $week_login_couple_members; ?></td> <td><?php echo $month_login_couple_members; ?></td> <td><?php echo $year_login_couple_members; ?></td> <td><?php echo $login_couple_members; ?></td> </tr> <tr> <td><?php echo t('All Affiliate Logins'); ?></td> <td><?php echo $today_login_affiliate; ?></td> <td><?php echo $week_login_affiliate; ?></td> <td><?php echo $month_login_affiliate; ?></td> <td><?php echo $year_login_affiliate; ?></td> <td><?php echo $login_affiliate; ?></td> </tr> <tr> <td><?php echo t('Men Affiliate Logins'); ?></td> <td><?php echo $today_login_male_affiliate; ?></td> <td><?php echo $week_login_male_affiliate; ?></td> <td><?php echo $month_login_male_affiliate; ?></td> <td><?php echo $year_login_male_affiliate; ?></td> <td><?php echo $login_male_affiliate; ?></td> </tr> <tr> <td><?php echo t('Women Affiliate Logins'); ?></td> <td><?php echo $today_login_female_affiliate; ?></td> <td><?php echo $week_login_female_affiliate; ?></td> <td><?php echo $month_login_female_affiliate; ?></td> <td><?php echo $year_login_female_affiliate; ?></td> <td><?php echo $login_female_affiliate; ?></td> </tr> <tr> <td><?php echo t('All Admin Logins'); ?></td> <td><?php echo $today_login_admins; ?></td> <td><?php echo $week_login_admins; ?></td> <td><?php echo $month_login_admins; ?></td> <td><?php echo $year_login_admins; ?></td> <td><?php echo $login_admins; ?></td> </tr> <tr> <td><?php echo t('Men Admin Logins'); ?></td> <td><?php echo $today_login_male_admins; ?></td> <td><?php echo $week_login_male_admins; ?></td> <td><?php echo $month_login_male_admins; ?></td> <td><?php echo $year_login_male_admins; ?></td> <td><?php echo $login_male_admins; ?></td> </tr> <tr> <td><?php echo t('Women Admin Logins'); ?></td> <td><?php echo $today_login_female_admins; ?></td> <td><?php echo $week_login_female_admins; ?></td> <td><?php echo $month_login_female_admins; ?></td> <td><?php echo $year_login_female_admins; ?></td> <td><?php echo $login_female_admins; ?></td> </tr> <tr> <td><?php echo t('All Member Registrations'); ?></td> <td><?php echo $today_total_members; ?></td> <td><?php echo $week_total_members; ?></td> <td><?php echo $month_total_members; ?></td> <td><?php echo $year_total_members; ?></td> <td><?php echo $total_members; ?></td> </tr> <tr> <td><?php echo t('Men Member Registrations'); ?></td> <td><?php echo $today_total_male_members; ?></td> <td><?php echo $week_total_male_members; ?></td> <td><?php echo $month_total_male_members; ?></td> <td><?php echo $year_total_male_members; ?></td> <td><?php echo $total_male_members; ?></td> </tr> <tr> <td><?php echo t('Women Member Registrations'); ?></td> <td><?php echo $today_total_female_members; ?></td> <td><?php echo $week_total_female_members; ?></td> <td><?php echo $month_total_female_members; ?></td> <td><?php echo $year_total_female_members; ?></td> <td><?php echo $total_female_members; ?></td> </tr> <tr> <td><?php echo t('Couple Member Registrations'); ?></td> <td><?php echo $today_total_couple_members; ?></td> <td><?php echo $week_total_couple_members; ?></td> <td><?php echo $month_total_couple_members; ?></td> <td><?php echo $year_total_couple_members; ?></td> <td><?php echo $total_couple_members; ?></td> </tr> <tr> <td><?php echo t('All Affiliate Registrations'); ?></td> <td><?php echo $today_total_affiliate; ?></td> <td><?php echo $week_total_affiliate; ?></td> <td><?php echo $month_total_affiliate; ?></td> <td><?php echo $year_total_affiliate; ?></td> <td><?php echo $total_affiliate; ?></td> </tr> <tr> <td><?php echo t('Men Affiliate Registrations'); ?></td> <td><?php echo $today_total_male_affiliate; ?></td> <td><?php echo $week_total_male_affiliate; ?></td> <td><?php echo $month_total_male_affiliate; ?></td> <td><?php echo $year_total_male_affiliate; ?></td> <td><?php echo $total_male_affiliate; ?></td> </tr> <tr> <td><?php echo t('Women Affiliate Registrations'); ?></td> <td><?php echo $today_total_female_affiliate; ?></td> <td><?php echo $week_total_female_affiliate; ?></td> <td><?php echo $month_total_female_affiliate; ?></td> <td><?php echo $year_total_female_affiliate; ?></td> <td><?php echo $total_female_affiliate; ?></td> </tr> <tr> <td><?php echo t('All Admin Registrations'); ?></td> <td><?php echo $today_total_admins; ?></td> <td><?php echo $week_total_admins; ?></td> <td><?php echo $month_total_admins; ?></td> <td><?php echo $year_total_admins; ?></td> <td><?php echo $total_admins; ?></td> </tr> <tr> <td><?php echo t('Men Admin Registrations'); ?></td> <td><?php echo $today_total_male_admins; ?></td> <td><?php echo $week_total_male_admins; ?></td> <td><?php echo $month_total_male_admins; ?></td> <td><?php echo $year_total_male_admins; ?></td> <td><?php echo $total_male_admins; ?></td> </tr> <tr> <td><?php echo t('Women Admin Registrations'); ?></td> <td><?php echo $today_total_female_admins; ?></td> <td><?php echo $week_total_female_admins; ?></td> <td><?php echo $month_total_female_admins; ?></td> <td><?php echo $year_total_female_admins; ?></td> <td><?php echo $total_female_admins; ?></td> </tr> <tr> <td><?php echo t('Blogs'); ?></td> <td><?php echo $today_total_blogs; ?></td> <td><?php echo $week_total_blogs; ?></td> <td><?php echo $month_total_blogs; ?></td> <td><?php echo $year_total_blogs; ?></td> <td><?php echo $total_blogs; ?></td> </tr> <tr> <td><?php echo t('Notes'); ?></td> <td><?php echo $today_total_notes; ?></td> <td><?php echo $week_total_notes; ?></td> <td><?php echo $month_total_notes; ?></td> <td><?php echo $year_total_notes; ?></td> <td><?php echo $total_notes; ?></td> </tr> <tr> <td><?php echo t('Private Messages'); ?></td> <td><?php echo $today_total_mails; ?></td> <td><?php echo $week_total_mails; ?></td> <td><?php echo $month_total_mails; ?></td> <td><?php echo $year_total_mails; ?></td> <td><?php echo $total_mails; ?></td> </tr> <tr> <td><?php echo t('Profile Comments'); ?></td> <td><?php echo $today_total_profile_comments; ?></td> <td><?php echo $week_total_profile_comments; ?></td> <td><?php echo $month_total_profile_comments; ?></td> <td><?php echo $year_total_profile_comments; ?></td> <td><?php echo $total_profile_comments; ?></td> </tr> <tr> <td><?php echo t('Photo Comments'); ?></td> <td><?php echo $today_total_picture_comments; ?></td> <td><?php echo $week_total_picture_comments; ?></td> <td><?php echo $month_total_picture_comments; ?></td> <td><?php echo $year_total_picture_comments; ?></td> <td><?php echo $total_picture_comments; ?></td> </tr> <tr> <td><?php echo t('Video Comments'); ?></td> <td><?php echo $today_total_video_comments; ?></td> <td><?php echo $week_total_video_comments; ?></td> <td><?php echo $month_total_video_comments; ?></td> <td><?php echo $year_total_video_comments; ?></td> <td><?php echo $total_video_comments; ?></td> </tr> <tr> <td><?php echo t('Blog Comments'); ?></td> <td><?php echo $today_total_blog_comments; ?></td> <td><?php echo $week_total_blog_comments; ?></td> <td><?php echo $month_total_blog_comments; ?></td> <td><?php echo $year_total_blog_comments; ?></td> <td><?php echo $total_blog_comments; ?></td> </tr> <tr> <td><?php echo t('Note Comments'); ?></td> <td><?php echo $today_total_note_comments; ?></td> <td><?php echo $week_total_note_comments; ?></td> <td><?php echo $month_total_note_comments; ?></td> <td><?php echo $year_total_note_comments; ?></td> <td><?php echo $total_note_comments; ?></td> </tr> <tr> <td><?php echo t('Game Comments'); ?></td> <td><?php echo $today_total_game_comments; ?></td> <td><?php echo $week_total_game_comments; ?></td> <td><?php echo $month_total_game_comments; ?></td> <td><?php echo $year_total_game_comments; ?></td> <td><?php echo $total_game_comments; ?></td> </tr> </table></div>