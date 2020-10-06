[![](https://img.shields.io/maintenance/yes/2019.svg)](https://github.com/fritzmg/contao-lightcase)
[![](https://img.shields.io/packagist/v/fritzmg/contao-lightcase.svg)](https://packagist.org/packages/fritzmg/contao-lightcase)
[![](https://img.shields.io/packagist/dt/fritzmg/contao-lightcase.svg)](https://packagist.org/packages/fritzmg/contao-lightcase)

Contao Lightcase
=====================

Contao extension to integrate the [Lightcase](http://cornel.bopp-art.com/lightcase/) overlay.

## Usage

Simply activate the `j_lightcase` template in your page layout under _jQuery_. Do _not_ activate `j_colorbox` or `moo_mediabox` as well!

Lightcase will work with all links that use the `data-lightbox="…"` parameter. Of course you can still initialize via your own JavaScript. Customizing the options works the same way as with the `j_colorbox` template for example.

## Adjust Labels

In order to adjust the translation of the labels within your application (or to create translations for additional languages), create files in the following format:

```
translations/im_contao_lightcase.<LANGUAGE>.yaml
```

For example if you want to change the English and German label of the close button:

```yaml
# translations/im_contao_lightcase.en.yaml
close: Close overlay
```

```yaml
# translations/im_contao_lightcase.de.yaml
close: Overlay schließen
```

See the [API documentation](https://cornel.bopp-art.com/lightcase/documentation/#api) for the available labels.
