# BrowserOSNameFinder

This plugin is used to add browser name and OS name in body tag class attribute. The use of this extension is to apply device specific CSS. <br>
For e.g:<br>
&lt;body class=".... browser-firefox os-windows"&gt;<br>
&lt;body class=".... browser-chrome os-apple"&gt;<br>
&lt;body class=".... browser-safari os-iphone"&gt;<br>
&lt;body class=".... browser-chrome os-android"&gt;<br>
<br>
This can help in creating responsive websites when website on some device is causing issues but in some device website is working perfectly. So we can use this in CSS as:<br>
.browser-firefox.os-windows{<br>
//Your CSS<br>
}<br>
and for same browser and other OS<br>
.browser-firefox.os-apple{<br>
//Your CSS<br>
}<br>
