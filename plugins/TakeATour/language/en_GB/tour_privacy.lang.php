<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2017 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['privacy_stp6'] = 'When you upload the photos, you can change the Privacy Level of the uploaded photos right there...';
$lang['privacy_stp7'] = '... or you can do that later one, here in the Batch Manager in Global Mode.<br><br>This is the page <em>Photos » Recent photos</em>, so the filter "Last Import" is set.';
$lang['privacy_stp8'] = 'Select one or more photos...';
$lang['privacy_stp9'] = '... and select the action "Who can see the photos?". Now you can change the privacy level of the selected photos.<br><br>But you can also do that for a specific photo, on its edit page. You can access to it from the public part, or from here.<br><br>Now, I will show you the other system of permission per album based on the groups and users.';
$lang['privacy_title1'] = 'Welcome in the Privacy Tour';
$lang['privacy_title10'] = 'Album permissions';
$lang['privacy_title11'] = 'Album permissions';
$lang['privacy_title12'] = 'Album permissions';
$lang['privacy_title15'] = 'Tip';
$lang['privacy_title17'] = 'Groups';
$lang['privacy_title18'] = 'Groups';
$lang['privacy_title19'] = 'Users';
$lang['privacy_title2'] = 'Help inside your Piwigo';
$lang['privacy_title20'] = 'Public photos';
$lang['privacy_title21'] = 'Public photos';
$lang['privacy_title22'] = 'Local Config: Original protection';
$lang['privacy_title24'] = 'It\'s been a great time';
$lang['privacy_title3'] = 'Permissions';
$lang['privacy_title4'] = 'Permissions';
$lang['privacy_title5'] = 'Privacy Level';
$lang['privacy_title6'] = 'Privacy Level';
$lang['privacy_title7'] = 'Privacy Level';
$lang['privacy_title8'] = 'Privacy Level';
$lang['privacy_title9'] = 'Privacy Level';
$lang['privacy_stp1'] = 'Hello! I will be your guide to discover how to protect your photos in Piwigo. Please follow my instructions, and click Next (or use the arrows of your keyboard) to navigate. If you go to an other page of the administration, you will be redirected to the current page of the Tour. If you are stuck and can\'t end the tour, going to <em>Plugins » Take A Tour</em> will end the tour.<br>Let\'s start!';
$lang['privacy_stp10'] = 'We are in the Album list management available from the menu using <em>Albums » Manage</em><br><br>Edit on album by hovering it and then click on Edit.';
$lang['privacy_stp11'] = 'Now click on the Permissions tab';
$lang['privacy_stp12'] = 'On that page, you can choose if the album will be available for anyone or will be restricted to some users';
$lang['privacy_stp13'] = 'Now click on private.';
$lang['privacy_stp14'] = 'Now click on private.';
$lang['privacy_stp14b'] = 'Important fact: on public side, permissions apply to webmasters and administrators as to any other user. In the administration, they can access any album or photo.';
$lang['privacy_stp15'] = 'Just before explaining the groups, a pro tip: here is the link to a page to set as private/public several albums at once. Click on it';
$lang['privacy_stp16'] = 'Like on your computer, you can select several albums using the keys Shift and Control, then click on the arrow to switch them.<br><br>Now, let me introduce the groups.';
$lang['privacy_stp17'] = 'A group in Piwigo is just a set of users: so groups make it easier to manage album permissions, and to manage users\' properties. Here is the page where you can manage groups, i.e. rename, merge, duplicate, delete them. You also can set one or more groups as "default group" which means that newly registered users will be associate to those default groups.';
$lang['privacy_stp18'] = 'To manage associations between users to groups, go to the <em>Users » Manage</em> page';
$lang['privacy_stp19'] = 'Here you can quickly edit a single user by hovering over it and then click on the Edit link.<br><br>You can select multiple users and edit them at once by then choosing an Action to apply.';
$lang['privacy_stp2'] = 'Here you can access the integrated Help. Click Next to continue directly to the Help page about managing permissions';
$lang['privacy_stp20'] = 'Now you know how to keep your photos private, but you may wonder about how to protect your public photos. You might first think about blocking the visitor to download the photo: you can\'t, because the web has been created that way (the browser of the visitor download all the resources displayed and more). The right-click can be disabled, a blank layer can be put on top of the photo etc but it will not disable the download. Full webpages can be saved by any web browser.';
$lang['privacy_stp21'] = 'Solutions are:<ul><li>put a watermark, at least on medium and high def photos.</li><li>and disable XL and XXL sizes.</li><li>and disable the High Definition (download and display of the original photo) for the concerned users.';
$lang['privacy_stp22'] = '<em>For Advanced Users</em><br><br>In Piwigo, you can protect the original photos using your local configuration. Use the variable $conf[\'original_url_protection\']: by default empty, you set the value to "images" to protect only the photos or "all" to protect also all type of media, which can be ressource consumming or might simply don\'t work on your server.<br><br>This option works for public and private content. This option currently requires you to deny the acces to the folders /upload and /galleries, by using an .htaccess file (usually a text file with "Deny from all" for content) or the server configurations.<br><br>Please note that filenames of photos uploaded using other method than FTP are <b>randomized</b>, so they are impossible to guess: that filename and so the path to the original photo can be known only if the visitor has access to a resized version of that photo, like the thumbnail. $conf[\'original_url_protection\'] and denying access to the folders /upload and /galleries are meant to avoid that case.';
$lang['privacy_stp24'] = 'This tour is over.<p style="text-align:center">Enjoy your Piwigo!</p>If you like Piwigo and want to support us, you can contribute by helping for translations, donating, etc. <a href="http://piwigo.org/basics/contribute" target="_blank">Click here to support us</a>. Thanks!';
$lang['privacy_stp3'] = 'Take a moment to read the information below.';
$lang['privacy_stp4'] = 'So we have two systems for managing acccess permissions to the photos. They are independent, so you can create a group called Family, but that group has nothing to do with the privacy level Family. <br><br>The levels of privacy are applied per photo, and the group/user permissions are applied per album. You can use both or only one system, that\'s flexible.<br><br>The next Tab is about group managment.';
$lang['privacy_stp5'] = 'Below is explained how you can manage the Groups.<br>Those permissions are only for the access of the photos and the albums, when browsing on the public part or for the external applications. We will see later other protections, but let\'s now practice!';