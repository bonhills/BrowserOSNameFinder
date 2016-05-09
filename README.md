Browser and Operating System Name Finder
========================================
This plugin is used to add browser name and OS name in body tag class attribute. The use of this extension is to apply device specific CSS. <br>
For e.g:<br>
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


Facts
-----
- version: 1.0.0

Installation Instructions
-------------------------
1. Copy extension to your Magento installation root directory
2. Clear the cache, logout from the admin panel and then login again.
3. Activate/Deactivate the extension under System - Configuration - Advanced - BonHills_BrowserOSNameFinder

Uninstallation
--------------
1. Remove all extension files from your Magento installation

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/bonhills/BrowserOSNameFinder/issues).
