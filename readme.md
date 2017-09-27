# Pixel Looper

Easily include pixels with minimal code throughout your website, no GTM required. Control which pixels are displayed on which pixels.

## Getting Started

Pixel looper is just a simple starter for including pixels in a loop on desired pages of your website. It is a lighter-weight alternative to GTM.

### Installing

Move the `pixel_looper` directory folder into your project.

Add your pixels to the `pixels` folder, individually, with proper names.
i.e. `facebook.php` with a `facebook pixel script` in it

Then, include `_loop.php` and the desired list of pixels like so:
``` 
<?php
include($_SERVER['DOCUMENT_ROOT']."/pixel_looper/_loop.php");
$pixels = array("example","example","example");
displayPixels($pixels); 
?>
```


## Running the test

View `_test.php` in your browser to display the test, which displays `This is an example` 3 times.

## Authors

Joey Scarim

## License

This project is open source.
