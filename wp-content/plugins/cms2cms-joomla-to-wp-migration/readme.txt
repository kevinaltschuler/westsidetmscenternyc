=== CMS2CMS: Automated Joomla to WordPress Migration  ===
Contributors: cms2cms
Tags: joomla to wordpress, joomla to wordpress migration, migrate joomla to wordpress, comments, images, plugin, convert joomla to wordpress
Requires at least: 3.0.0
Tested up to: 3.9.1
Stable tag: 3.6.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Migrate your website content from Joomla to WordPress easily and automatedly in just a few simple steps.

== Description ==

Migrate your website content from Joomla to WordPress easily and automatedly in just a few simple steps.

= The following content items can be migrated from Joomla to WordPress with CMS2CMS =
* articles
* pages
* images (as an option)
* categories
* tags
* users
* internal links
* comments

*Supported Joomla versions:* 1.5.x, 1.6.x, 1.7.x, 2.5.x, 3.x
*Supported WordPress versions:* 3.x (new software versions are constantly being added).

= Features of Automated Migration =
- **easy** - no need for coding skills to complete it.
- **fast** - 15 minutes on average, depending on the size of Joomla website.
- **free Demo available** - in order to see it in action.
- **live chat support** - you get instant answers to any questions, no need to search for support on forums.

= Additional Migration Options =
- opportunity to form internal URLs according to SEO URL structure on WordPress website.
- 301 redirects from Joomla URLs to WordPress URLs
- clear WordPress data before migration

= Additional Supported Modules =
- **Jcomments** - migration of comments to WordPress directly
- **Joomla sh404SEF** - migration of meta descriptions and keywords to WordPress SEO by Yoast
- **Phoca Gallery** - migration of images and galleries to NextGen Gallery.

**Note.** *This plugin installs connection bridge on WordPress website, which is necessary for data exchange between Joomla and WordPress websites. After activation, you’ll be redirected to CMS2CMS website in order to complete the migration.*

**Website design (styles, themes) isn’t migrated.**

= Steps to Take before Migration =
1. Install WordPress and make sure that Joomla and WordPress websites are available online.
1. Have Joomla website FTP access details at hand (host, username, password) - you use them to install connection bridge on Joomla website.
1. Set up custom URL structure for WordPress (it should be set before the migration for internal links to work correctly, if you change them after migration, site navigation will be broken).
1. Install WordPress plugins supported by CMS2CMS (if you want to migrate metadata or image galleries).

= Video =
[youtube https://www.youtube.com/watch?v=itYSg_gHxZk]

To learn more about automated migration from Joomla to WordPress, visit http://www.cms2cms.com/supported-cms/joomla-to-wordpress-migration


By the way, don\"t forget to rate our plugin and leave a feedback. It\"s really important for us!
http://wordpress.org/support/view/plugin-reviews/cms2cms-joomla-to-wp-migration?rate=5#postform

== Installation ==

1. Download the plugin zip file
1. Extract plugin zip file to your PC
1. Upload extracted file to wp-content/plugin directory
1. Go to Admin -> Plugins, find “CMS2CMS Joomla to WordPress Migration” and click Activate
1. You’ll be redirected to CMS2CMS website in order to complete your migration

== Frequently Asked Questions ==

= Your website is unreachable =
If your website cannot be reached, pay attention to the following points:
1. Make sure your site is available online at the moment.
2. It’s possible that your firewall blocks certain IP requests. Contact your system administrator or hosting provider support for details about this issue.

= Your server responds with 401 Unauthorized =
If you get this error, try the following solutions:
1. Ensure that access to your site content is not blocked by HTTP Basic Authentication (http://en.wikipedia.org/wiki/Basic_access_authentication). HTTP Basic Authentication is a protection method which requests additional login and password to access webpage or other resource.
2. Make sure that your website content is available on the Internet during the Migration process.

= Your server responds with 403 Forbidden =
This error means that access to certain files or folders is limited. Find below the possible solutions:
1. Your firewall may be causing this by blocking access to the server for our IP addresses. Please, contact your hosting provider and ask them to add the following IPs to the white-list:
92.52.129.82
204.62.12.42
Port 80.
This is done to enable data exchange between your websites. After the migration is complete, you’ll be able to remove our IPs from the white list.
2. Check the access permissions. For ‘cms2cms’ folder specify the file permissions 755. For files in the ‘cms2cms’ folder specify permissions 644.
3. Find out whether there are access restrictions for bridge file. Usually, restrictions are specified in .htaccess file. Contact your system administrator for details.

= Your server responds with 413 Request Entity Too Large =
It indicates that the request is too large for your server. These are possible solutions:
Increase values for the following parameters: ‘memory_limit’ and ‘post_max_size’ in PHP configuration.
If the module suhosin for PHP is installed on the server, increase the parameter ‘suhosin.post.max_value_length’. Usually, the value of 32 Mb is enough.

= Your server responds with 500 Server Error =
Incorrect permissions for bridge folder are the most common reason of this internal server error.
1. for \'cms2cms\' folder, specify the file permissions 755
2. for \'index.php\', \'bridge.php\' and \'key.php\' files in \'cms2cms\' folder, specify the permissions 644
3. If it won’t help, contact your system administrator who can provide you with server logs access for further error detection. You can also request technical assistance from your hosting provider.

= Failed to connect to host / Operation timed out / Nothing was returned from the server / The connection to your server has timed out =
Each of these errors indicates that your website cannot be reached online. Solutions are as follows:
1. Make sure your site is available online at the moment.
2. It’s possible that your firewall blocks certain IP requests. Contact your system administrator or hosting provider support for details about this issue.

= POST Method Not Allowed =
This is a server error. Contact your system administrator or your hosting provider support to have POST method allowed for your server.

= Site is connected already by another account =
Each CMS2CMS user has the unique key which can be found in the Bridge file. So, the Bridge of user A is different from the Bridge of user B. If you have downloaded a bridge using one account, but you try to migrate with this bridge under another account, you get this error.

To fix it, you should either download the bridge again under the account you are going to use for migration or login to the account you used previously to download the Bridge file.

= Invalid response received =
Сontact us at support@cms2cms.com.

= An error occurred when trying to connect to your site =
Сontact us at support@cms2cms.com.

= An unknown error occurred =
Сontact us at support@cms2cms.com.


== Screenshots ==

1. /assets/screenshot-1.png
2. /assets/screenshot-2.png
3. /assets/screenshot-3.png
4. /assets/screenshot-4.png
5. /assets/screenshot-5.png

== Changelog ==

= 3.0.1 =
* Bug fixes

= 3.0 =
* Bug fixes

= 2.0.2 =
* Bug fixes

= 2.0.1 =
* Improved Connection Bridge

= 1.0.3 =
* Bug fixes

= 1.0.2 =
* Bug fixes

= 1.0.1 =
* Added German Language
* Minor fixes of html

= 1.0 =
* Initial commit
