=== Debug My Plugin with Debug Bar ===
Plugin Name:  Debug My Plugin with Debug Bar
Contributors: charlestonsw
Donate link: http://www.charlestonsw.com/product/debug-my-plugin/
Tags: debugging, debug bar, plugin
Requires at least: 3.3
Tested up to: 4.0
Stable tag: 1.0.0

Debug your plugin with the help of Debug Bar.  Puts debugging messages in the drop down Debug Bar interface.

== Description ==

After a trip to WordCamp I learned about a cool new utility to help tighten up my plugin development, Debug Bar.
When I got back home the first thing I did was install Debug Bar.
Then installed a dozen other plugins related to Debug Bar.

While many provided some very cool and very useful "inside data" that did help with my plugin development, a key feature I was looking for was missing.
I wanted a simple way to add my own personal debugging output to Debug Bar.
After a couple of hours of searching I decided I'd write my own.

And here it is. Now I can debug any of my plugins with ease.

Install Debug Bar.

Install Debug My Plugin.

Use the Debug My Plugin methods in my code and look at my own internal messages when I need to see what is going on.

[youtube http://youtu.be/20dOoa77_DU]

= Your Dev Helper =

You "talk" to this plugin via the DebugMyPlugin global and use that to set properties or invoke methods.

This global, $GLOBALS['DebugMyPlugin'], is a named array that starts out with a single panel object called 'main'.
If you want to, you can just work on this "scratchpad" for output.

This method will output a print_r dump of a variable, like a named array:
$GLOBALS['DebugMyPlugin']->panels['main']->addPR('Big Array is now:',$bigArray,__FILE__,__LINE__);

This method is for simple string based messages, HTML supported:
$GLOBALS['DebugMyPlugin']->panels['main']->addMessage('I Want To Say:','Hello World');

= Support =

Support for the plugin can be found on the [CSA Website](http://www.charlestonsw.com/).  If you have an urgent issue or want one-on-one support you can [purchase premium support](http://www.charlestonsw.com/product/product-support).

= My Philosophy =

I strive to create code that runs efficiently and without bugs.
In my opinion, well-written plugins are few and far between.
While there are plenty of plugins that look nice, far too many of those plugins, including the "cool shiny ones" have too many hidden problems.
I have found that over 90% of the plugins available on the WordPress plugin directory generate dozens, if not hundreds, of warnings and errors when you turn off the "hide all the problems" settings.

These hidden problems impact memory usage, fill up disk space, and reduce performance via the typical default logging settings.
While you may not see the errors on your WordPress site, they are still being tracked.
The more errors, the more disk I/O, the slower the app.

During 20+ years of software development, I have found that leaving "innocuous" warnings in place tends to lead to trouble further down the road.
Warnings today often become errors tomorrow.
Many programming languages, PHP included, continue to tighten security and close loopholes that are typically found living near all those warning messages.
Some warnings are telling you to "change this now, it will be gone tomorrow".
Eventually tomorrow will come.

While my plugins may not be the prettiest on the block, I do try to make sure that all the hidden stuff you don't see is designed as well as it can be.
My code is not perfect, but when I find a bug I try to fix it fast. 
If I create a bug I try to fix it even faster.
To sum it all up, I like to write plugins that last.
I hope you appreciate my work.

= Rate This Plugin =

Please [rate this plugin](http://wordpress.org/extend/plugins/store-locator-le/)!
Rating the plugin, hopefully with 5 stars, helps increase the exposure on WordPress, which generates more downloads and purchases of add-ons.
The more add-ons I sell the easier it is to put food on the table and give me more time to code cool new features.
No ratings, no food, more hours working as the Walmart Greeter, less coolness in the plugins.

Give me a chance to address your concerns if this plugin doesn't earn 5 stars by [contacting me](http://www.charlestonsw.com/mindset/contact-us/) directly or by posting in the [support forum](http://www.charlestonsw.com/forums/) at the CSA website.

= Special Thanks =

* [Jan de Baat](http://www.de-baat.nl) for providing the Dutch translation.

== Installation ==

= Requirements =

* PHP 5.2.4+ (same as WordPress 3.5)
* MySQL 5.0+ (same as WordPress 3.5)
* WordPress: 3.5+

= Main Plugin =

Use the automatic installer.

== Frequently Asked Questions ==

= How do I report a bug? =

Post in the [support forum](http://www.charlestonsw.com/forums/).
You can also [contact me](http://www.charlestonsw.com/product/product-support) to request premium support if you need immediate assistance.

= Who is Charleston Software Associates? =

Currently it is one guy hacking code in a home office.
I ONLY do WordPress plugins for a living.
Dad.
Husband.
Rum Lover.
Code Geek.
Not necessarily in that order.

= What are the terms of the license? =

The license is GPL.  You get the code, feel free to modify it as you
wish. I prefer that customers pay because they like what I do and
want to support the effort that brings useful software to market.  Learn more
on the [CSL License Terms page](http://www.charlestonsw.com/products/general-eula/).

== Screenshots ==

1. Using the Debug My Plugin in code.
2. Debug My Plugin output in Debug Bar showing a var dump from my Store Locator Plus plugin.
3. Debug My Plugin in "short window mode" while debugging a plugin.
4. The Tools/DebugMP Settings.
5. Example multi-panel output with no timestamp, file or line output, or counter.
6. Example multi-panel, first plugin panel, output with leading counter.
7. Example multi-panel, second plugin panel, output with leading counter.

== Changelog ==

= 1.0.0 =

* Updated to remove the "shutdown" vs.  "wp_after_admin_bar_render" WordPress hook "hack".   Apparently this was fixed in WP4.0.

= 0.9.3 =

* Tested with WordPress 3.9

= 0.9.2 =

* Enhancement : Fix the slider CSS for the on/off switches so they work well with the MP6 (WP3.8 preview) plugin.

= 0.9.1 =

* Fix. Again. : How in the hell did this ever work?  As I noted in the readme above (note to self: read own notes) relocating the Debug Bar render hook is a MUST.

= 0.9 =

* Fix: Make it work with WP 3.6. 
* Fix: Update init sequence.  Something in WP 3.6 broke the way the init and admin menu stack was called.

= 0.8 =

* Enhancement: Add a global step counter with setting in the global settings panel.  Can also be enabled in the addMessage call.

= 0.7 =

* Enhancement: Added Dutch (nl_NL) translation.

= 0.6 =

* Enhancement: Turn on/off REQUEST and SERVER var dumps via the Tools/DebugMP settings panel.
* Enhancement: New action hook: dmp_panelinit_<panel_class_name> provided to allow for initial panel content.
* Change: blank panel starting message.

= 0.5 =

* Enhancement: option to turn on/off timestamp

= 0.4 =

* Fix: Product Page typo.
* Enhancement: Add ability to pass a new Debug Bar label to the DebugMyPluginPanel constructor to make it easier to differentiate secondary panels.
* Enhancement: Action hook 'dmp_addpanel' added, use to add a secondary debug my plugin panel to debug bar.

= 0.3 =

* Change: Stop debug bar from bastardizing AJAX output on JSON requests.  This will disable Debug Bar for AJAX calls.
* Add the screen shots and banner.   The WP Repo was fubar after the 0.2 update with this info so this is the re-do.

= 0.1 =

* Initial release.

