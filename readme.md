# Simple Social Icons Custom

A plugin template showing how to add custom icons to the [Simple Social Icons](https://wordpress.org/plugins/simple-social-icons/) plugin.

The is a separate plugin thta adds a Spotify, Codepen, and Etsy icon as examples. You can modify the plugin code further to add your own icons.

First, install and activate [Simple Social Icons](https://wordpress.org/plugins/simple-social-icons/) and [Simple Social Icons Custom](https://github.com/nickcernis/ssi-custom-icons/archive/master.zip). You can then edit Simple Social Icons Custom as follows:

## How to add an icon

### 1. Find or create the SVG icon.

This [Font Awesome SVG repository](https://github.com/encharm/Font-Awesome-SVG-PNG/tree/master/black/svg) is a good source of ready-made icons that are scaled correctly for use with this plugin.

From that page, you can:

- Click the icon filename you're interested in.
- Click the 'raw' link to view the raw source of the icon.
- Copy the `path` element inside the `svg` element.
- Paste that code into the `icons/custom.svg` file, inside a symbol element following the format you see in that file:

    ~~~
    <symbol id="social-codepen" viewBox="0 0 1792 1792">
        <title>Codepen</title>
        <path d="M216 1169l603 402v-359l-334-223zm-62-144l193-129-193-129v258zm819 546l603-402-269-180-334 223v359zm-77-493l272-182-272-182-272 182zm-411-275l334-223v-359l-603 402zm960 93l193 129v-258zm-138-93l269-180-603-402v359zm485-180v546q0 41-34 64l-819 546q-21 13-43 13t-43-13l-819-546q-34-23-34-64v-546q0-41 34-64l819-546q21-13 43-13t43 13l819 546q34 23 34 64z"/>
    </symbol>
    ~~~

- Edit the symbol ID to `social-your_icon_name`, replacing `your_icon_name` with your icon name. The `social-` prefix is required.
- Edit the `title` tag with the icon title. This can be used by screen readers.

If you're making your own icons, you will need to edit the `viewBox` attributes in the custom.svg file to match your icon's exported size. You can alternatively scale your icon to 1792px square and export it at that size.

### 2. Edit the `config.php` file to add your new icon information.

Examples are given in the file, which is documented.

When you activate the plugin, you should then see fields for your new icons in the Simple Social Icons widget.
