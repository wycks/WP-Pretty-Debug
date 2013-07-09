#WordPress Pretty Debug ##

A WordPress plugin that makes `var_dump` and `print_r` pretty!

- See [screenshot](https://github.com/wycks/WP-Pretty-Debug/blob/master/pretty-debug-screenshot.jpg) for what it looks likes (work in progress)
- Function output referances with http://queryposts.com when possible.


All the work was done by [digitalnature](https://github.com/digitalnature) I just wrapped it into a WordPress plugin.

**Usage**

- use `r ` instead of `var_dump` 
- use `rt` for text mode.

For example:

`r($GLOBALS['wp_query']->get_posts());`  
`rt($GLOBALS['wp_query']->get_posts());`

More usage  [https://github.com/digitalnature/php-ref](https://github.com/digitalnature/php-ref)


*Please note* the interface is really ugly at the moment when doing inline debugging. I am playing around with how to keep it integrated with php-ref, so stay tuned.



