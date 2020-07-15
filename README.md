# Shortcode For Current Date
[![WordPress plugin](https://img.shields.io/wordpress/plugin/v/shortcode-for-current-date.svg?style=plastic)](https://wordpress.org/plugins/shortcode-for-current-date/)
[![WordPress plugin](https://img.shields.io/wordpress/plugin/dt/shortcode-for-current-date.svg?style=plastic)](https://wordpress.org/plugins/shortcode-for-current-date/)
[![WordPress](https://img.shields.io/wordpress/v/shortcode-for-current-date.svg)](https://wordpress.org/plugins/shortcode-for-current-date/)
[![WordPress plugin rating](https://img.shields.io/wordpress/plugin/r/shortcode-for-current-date.svg)](https://wordpress.org/support/plugin/shortcode-for-current-date/reviews/)

Shortcode for Current Date is a WordPress Plugin to show the current date or month or year on WordPress Posts/Pages.

[Live Demo](http://imtiazrayhan.com/show-current-date-month-year-in-wordpress/)


## Get Started

You can install it directly from your WordPress Dashboard just like any other WordPress Plugin. 
* Go to Plugins > Add New. 
* Search for 'Shortcode for Current Date'
* Install and Activate.

You can also download the zip from [here](https://github.com/imtiazrayhan/Shortcode-For-Current-Date/archive/master.zip) and install it.
* Go to Plugins > Add New.
* Click on Upload Plugin. 
* Select the Zip from you computer.
* Install and Activate.

## Usage

Just use the shortcode **[current_date]** and when the post or page is displayed, **[current_date]** will be replaced by the current date.

By default it will show a date like this: 7th May 2017

But you can customize it to your needs. To do that, you’ll need to pass the date format using an attribute with the shortcode.
Here are some examples:

**[current_date format=’d/m/Y’]** will show the date like this: 07/05/2017

**[current_date format=’F d, Y’]** will show the date like this: May 07, 2017

Check out [PHP date formats](http://php.net/manual/en/function.date.php) you can use.
