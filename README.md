# About Google Analytics

The Google Analytics plugin allows users to insert a Google Analytics
Tracking Code (GATC) into each page of their Omeka website.  The GATC is
a small chunk of Javascript generated by Google Analytics that connects
the website back to the Analytics platform and tracks a wide range of
statistics about how many people are visiting the site, where they come
from, and how they interact with content.

# Download

You can download the plugin from [github].

[github]: https://github.com/clured/GoogleAnalytics

#Features

The plugin adds a simple configuration form to the administrative
interface of Omeka that allows users to paste in the tracking code for
the corresponding site account in Google Analytics.

# Technical Notes / Needed Features

Right now, the plugin makes use of the "public theme header" hook to
print the GATC. Because of the location from which the hook is fired in
the template rendering process, this causes the tracking code to output
in the middle of the &lthead&rt tag. This is generally fine, although
ideally the tracking code would be located at the very end of the
document, just before the close of the &ltbody&rt tag, so as to avoid
any hanging during page load if there is higher than normal latency when
the script tries to dial back to Google. Omeka does not currently fire a
plugin hook at that location in the template rendering process, and a
different solution would need to be used.

#Installing and Configuring

- Download and install the GoogleAnalytics plugin. (See [installing a
  plugin])

[installing a plugin]: http://omeka.org/codex/Installing_a_Plugin

# Getting the Tracking Code

- Once a Google Analytics account has been registered for the site, go to [Google Analytics] and click on the "Access Analytics" button.
- Click on the name of the account for the Omeka website.
- From the "Overview" page, click on the "Edit" link in the rightmost
  column of the "Website Profiles" box.
- Click on the "Check Status" link at the top right of the "Main Website
  Profile Information" box.
- Copy the tracking code to the clipboard.

# Inserting the Tracking Code into Omeka

- In the Omeka administration, click on the "Settings" button at the top
  right of the screen.
- Click on the "Plugins" tab.
- Click on the blue "Configure" button for the Google Analytics plugin.
- Paste the tracking code into the box and click "Save Changes."