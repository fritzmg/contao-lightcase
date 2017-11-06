[![](https://img.shields.io/maintenance/yes/2017.svg)](https://github.com/fritzmg/contao-lightcase)
[![](https://img.shields.io/packagist/v/fritzmg/contao-lightcase.svg)](https://packagist.org/packages/fritzmg/contao-lightcase)
[![](https://img.shields.io/packagist/dt/fritzmg/contao-lightcase.svg)](https://packagist.org/packages/fritzmg/contao-lightcase)

Contao Lightcase
=====================

Contao extension to integrate the [Lightcase](http://cornel.bopp-art.com/lightcase/) overlay.

## Usage

Simply activate the `j_lightcase` template in your page layout under _jQuery_. Do _not_ activate `j_colorbox` or `moo_mediabox` as well!

Lightcase will work with all links that use the `data-lightbox="…"` parameter. Of course you can still initialize via your own JavaScript. Customizing the options works the same way as with the `j_colorbox` template for example.
