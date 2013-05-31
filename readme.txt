=== Really Simple Events ===
Contributors: huntlyc
Donate link: http://www.tagonline.org.uk/howtodonate.asp
Tags: events, gigs, performances
Requires at least: 3.4.1
Tested up to: 3.5.1
Stable tag: 1.5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple, easy to use, event module!

== Description ==

Simple event module, just a title and start date/time needed!  You can, of course, provide extra information about the event if you wish.
This plugin was created for bands/performers who do one off shows lasting a couple of hours rather than a few days, so event date ranges, custom post type and so on are not included.

This plugin features a small widget that you can use to embed into your themes side bar or you can just use the shortcode "[hc_rse_events]"

For advanced users, you can show just upcoming,past or all events and change the ordering by using the following shortcode "[hc_rse_events showevents="upcoming|upcoming-reverse|past|past-reverse|all|all-reverse]".
You also have the ability to select which columns get output when using the shortcode as well as their ordering and finally you can change the default date format.

Check the Help/Usage page in the events admin menu for more details.

== Installation ==

1. Extract to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the shortcode "[hc_rse_events]" or "[hc_rse_events showevents="upcoming|upcoming-reverse|past|past-reverse|all|all-reverse]" in your pages.
1. Or use the widget

== Frequently Asked Questions ==

= When using just [hc_rse_events], what's shown on my page? =

Only upcoming events

= How do I get this plugin translated into my language? =

If you're willing to take 10-20 mins to do a translation (it's a small plugin), get in touch!!! :)

== Screenshots ==

1. How the front end looks on the twenty eleven theme with gig info expanded
2. The main admin events view
3. The add/edit event page
4. The settings page
5. The widget configuration
6. The widget with an event that has the link field filled in

== Changelog ==

= 1.5.2 =
* Housekeeping update - no new functionality

= 1.5.1 =
* fixed: pop-up calendar sits behind admin bar

= 1.5 =
* fixed: widget event title breaking onto new line.
* added: tranlation files

= 1.4.9 =
* fixed: Front end 'more info' \'

= 1.4.8 =
* fixed: 'More Infos' showing instead of 'More Info'
* fixed: Settings page values with an apportraphe were being escaped
* added: Ability to set different link on event widget title.

= 1.4.7 =
* fixed: front end date_i18n

= 1.4.6 =
* Removed css on the td > p tag

= 1.4.5 =
* New: Hungarian translation

= 1.4.4 =
* New: link field for events
* Fixed: Special characters in widget

= 1.4.3 =
* Fixed: Special characters in the admin

= 1.4.2 =
* Fixed: Special characters in the title and menu position conflicts

= 1.4.1 =
* New: Easily customize front-end link text

= 1.4.0 =
* New: Optional link to events page on widget

= 1.3.9 =
* Updated help section to show new short code param

= 1.3.8 =
* new: limit number of events with [hc_rse_events numevents=4] shortcode
* new: Danish translation file added (although with only two tranlations)

= 1.3.7 =
* apply_filter('the_content') added to more info output to handle shortcodes

= 1.3.6 =
* Allow html in event title

= 1.3.5 =
* Removed accidental debug left in.

= 1.3.4 =
* New: Widget now has options to allow user to customize output.
* Fixed: DB version not saving correctly

= 1.3.3 =
* Fixed: More info link

= 1.3.2 =
* Fixed: More info not working properly after last update

= 1.3.1 =
* New: 'past-reverse' and 'upcoming-reverse' options added to order events.
* Fixed: htmlchars not working and non-ascii characters not showing properly

= 1.3 =
* New: 'all-reverse' option to show all events but in the wrong order (newest to oldest)


= 1.2.9 =
* Fixed: Admin Add/Edit/Delete links not working properly
* Updated: DB table now use utf8 instead of the default latin1 charset

= 1.2.8 =
Fixed: Past events showing up in wrong order (oldest first rather than newest first)

= 1.2.7 =
Fixed: Time column showing when no time is selected for viewing

= 1.2.6 =
Removed console.logs from JS

= 1.2.5 =
Choose which columns get displayed as well as choose not to show time value per individual event.

= 1.2.4 =
Added simple widget for sidebar use: $eventDate - $eventTitle

= 1.2 =
Everythings all up to date with the wp plugin hosting

= 1.1 =
* Readme cleaned up

= 1.0 =
* Initial version

== Upgrade Notice ==

= 1.5.2 =
* Housekeeping update - no new functionality

= 1.5.1 =
* fixed: pop-up calendar sits behind admin bar

= 1.5 =
Fixed: widget event title breaking onto new line.

= 1.4.9 =
* fixed: Front end 'more info' \' & Title for "title link" widget option

= 1.4.8 =
Couple of bug fixes and the ability to link to a page on the widget title.

= 1.4.7 =
* fixed: front end date_i18n

= 1.4.6 =
* Removed css on the td > p tag

= 1.4.5 =
* New: Hungarian translation

= 1.4.4 =
* New: link field for events
* Fixed: Special characters in widget

= 1.4.3 =
* Fixed: Special characters in the admin

= 1.4.2 =
* Fixed: Special characters in the title and menu position conflicts

= 1.4.1 =
* New: Easily customize front-end link text

= 1.4.0 =
* New: Optional link to events page on widget

= 1.3.9 =
* Updated help section to show new short code param

= 1.3.8 =
* new: limit number of events with [hc_rse_events numevents=4] shortcode
* new: Danish translation file added (although with only two tranlations)

= 1.3.7 =
* apply_filter('the_content') added to more info output to handle shortcodes

= 1.3.6 =
* Allow html in event title

= 1.3.5 =
* Removed accidental debug left in.

= 1.3.4 =
* New: Widget now has options to allow user to customize output.
* Fixed: DB version not saving correctly

= 1.3.3 =
* Fixed: More info link

= 1.3.2 =
* Fixed: More info not working properly after last update

= 1.3.1 =

* New: 'past-reverse' and 'upcoming-reverse' options added to order events
* Fixed: htmlchars not working and non-ascii characters not showing properly

= 1.3 =
* New: 'all-reverse' option to show all events but in the wrong order (newest to oldest)
* Fixed: HTML in extra info

= 1.2.9 =
* Fixed: Admin Add/Edit/Delete links not working properly
* Updated: DB table now use utf8 instead of the default latin1 charset

= 1.2.8 =
Fixed: Past events showing up in wrong order (oldest first rather than newest first)

= 1.2.7 =
Fixed: Time column showing when no time is selected for viewing

= 1.2.6 =
Removed console.logs from JS

= 1.2.5 =
Choose which columns get displayed as well as choose not to show time value per individual event.

= 1.2.4 =
Added simple widget for sidebar use: $eventDate - $eventTitle

= 1.2.3 =
Readme installation section

= 1.2.2 =
Fixed confirm box showing on all delete links

= 1.2.1 =
Stripslashes for title in admin section

= 1.2 =
Everythings all up to date with the wp plugin hosting

= 1.1 =
Readme cleaned up

= 1.0 =
New and shiny stuff is cool!
