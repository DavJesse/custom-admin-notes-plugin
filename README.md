# Custom Admin Notes

A simple WordPress plugin that adds a customizable dashboard widget for admin-only notes.

## Description

Custom Admin Notes adds a widget to the WordPress dashboard where administrators can save and display important notes. This is perfect for team communication, reminders, or instructions for other WordPress administrators.

## Features

- **Dashboard Widget**: Adds a notes widget to the WordPress dashboard
- **Customizable Title**: Change the widget title from the settings page
- **Visibility Control**: Choose whether the widget is visible to all admins or super admins only
- **Simple Interface**: Clean, easy-to-use textarea for notes
- **Internationalization**: Full support for translation

## Installation

1. Upload the `custom-admin-notes` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. The notes widget will automatically appear on your dashboard
4. Configure settings under Settings > Admin Notes

## Usage

### Adding Notes

1. Navigate to your WordPress Dashboard
2. Find the "Custom Admin Notes" widget (or your custom title if changed)
3. Enter your note in the text area
4. Click "Save Note"

### Customizing Settings

1. Go to Settings > Admin Notes
2. Change the widget title if desired
3. Set visibility to "All Admins" or "Super Admin Only"
4. Click "Save Changes"

## Frequently Asked Questions

### Can regular users see these notes?

No, the notes are only visible to administrators.

### Can I format the text in the notes?

The plugin uses a simple textarea, so basic text is supported. HTML is sanitized for security.

### Is the data secure?

Yes, the plugin uses WordPress nonces for form security and properly sanitizes all user input.

## Screenshots

1. Dashboard widget with notes
2. Settings page

## Changelog

### 1.0
* Initial release

## Credits

Developed by David Jesse Odhiambo

## License

This plugin is licensed under the GPL v2 or later.

```
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
```
