=== BuddyPress Profile Social Buttons ===
Contributors: Paul Clarkin
Tags: buddypress, buddypress member, buddypress facebook, facebook
Requires at least: 3.2.1
Tested up to: 3.9.1
BuddyPress: 2.0.1
Stable tag: 1.0
License: See readme.txt file.

== Description ==

Let your members and groups show their Social Network Buttons on their profile page. 

Using full social network URL (e.g. www.facebook.com/username), the plugin fetches your members username and displays their button in the member's header.

Members: Once you ( the site admin ) have set up the members component, all your members have to do is enter in their full Facebook URL and existing members via editing their profile settings.

== Currently Supported Networks ==
Facebook
Google+
Twitter
LinkedIn

== Installation ==


= Automatic Installation =

1. From inside your WordPress administration panel, visit 'Plugins -> Add New'
2. Search for `BuddyPress Profile Social Buttons` and find this plugin in the results
3. Click 'Install'
4. Once installed, activate via the 'Plugins -> Installed' page
5. From your admin panel, navigate to 'Buddypress' -> 'Profile fields'
6. Click 'Add New Field' and give the field a title
7. From your admin panel, navigate to 'Buddypress' -> 'BuddyPress Profile Social Buttons'
8. Enable the social network and save
9. Name 'Mirror Profile Field Title' the same as your title from step 6

= Manual Installation =

1. Upload `buddypress-facebook` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. From your admin panel, navigate to 'Buddypress' -> 'Profile fields'
4. Click 'Add New Field' and give the field a title
5. From your admin panel, navigate to 'Buddypress' -> 'BuddyPress Profile Social Buttons'
8. Enable the social network and save
7. Name 'Mirror Profile Field Title' the same as your title from step 6


== Notes ==


License.txt - contains the licensing details for this component.


== Frequently Asked Questions ==

= Will the 'Mirror Profile Field Title' also be displayed above the text box where the member will enter in their Facebook name.? =

No, the text box will use the title you gave your Xprofile field as described in step 6 of the plugin installation instructions. The 'Mirror Profile Field Title' is used to fetch the members meta ( attached data ) though if the two differ, no data will be returned thus no button will display.


== Changelog ==

= 1.0 =
Forked from Samuel Costa's version and extended for more networks.

= 0.3 =

* Fixed the group freeze problem

= 0.2 =

* Change the user after the URL for the full URL

= 0.1 =

* initial release in base of the Charl Kruger Buddypress Twitter Plugin.