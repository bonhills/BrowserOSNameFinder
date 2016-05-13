Browser and Operating System Name Finder
========================================
Overview
--------
This extension adds the browser name and the operating system to the < body > element as a class. This is useful for developers in cases when a responsive website doesn’t look the way it is supposed to on some devices. It allows you to directly address these devices or operating systems. <br>

Current Version
---------------
- Version: 1.0.0

Highlighted Features
--------------------
1. Used to apply device specific CSS
2. Adds the browser name and the operating system to the < body > element as a class
3. Useful for developers to debug device specific issues related to a responsive website
4. Support for Admin HTML as well
5. Easy Installation
6. Easy and friendly to use
7. Compatible with all themes

Example
-------
&lt;body class=".... **browser-firefox os-windows**"&gt;<br>
&lt;body class=".... **browser-chrome os-apple**"&gt;<br>
&lt;body class=".... **browser-safari os-iphone**"&gt;<br>
&lt;body class=".... **browser-chrome os-android**"&gt;<br>
<br>
This can help in creating responsive websites when website on some device is causing issues but in some device website is working perfectly. So we can use this in CSS as:<br>
**.browser-firefox.os-windows**{<br>
//Your CSS<br>
}<br>
and for same browser and other OS<br>
**.browser-firefox.os-apple**{<br>
//Your CSS<br>
}<br>

Installation Instructions
-------------------------
1. Copy extension to your Magento installation root directory
2. Clear the cache, logout from the admin panel and then login again.
3. Activate/Deactivate the extension under **System -> Configuration -> Advanced -> BonHills_BrowserOSNameFinder**

Uninstallation
--------------
Remove all files of this extension from your Magento installation directory.

Magento Compatibility
---------------------
Compatible with Magento Community Edition Version(1.7.x - 1.9.x)

Support
-------
Have any questions regarding this extension? Need help with installation and/or configuration? Have some good tips and tricks about using it or enhancing? Open an issue on [GitHub](https://github.com/bonhills/BrowserOSNameFinder/issues).
