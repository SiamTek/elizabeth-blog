#What will we need to do to port elizabeth-blog to WordPress?

1. We need to create a blog.php, a page.php, and a single.php, and functions.php, comments.php, category.php, tag.php, taxonomy.php, author.php, date.php, archive.php, search.php, attachment.php, image.php, 404.php.  Many of these pages will use similar, if not the exact same layout and styles. See ["Theme Development: Template Files List"](http://codex.wordpress.org/Theme_Development#Template_Files_List)

2. We need to update the file structure, which is different from what we currently have.  This means that as we do this, we need to fix the links between files that we break as we go

3. We need to follow a tutorial (or several) to turn HTML into a WordPress Theme. Basic tutorials will make it usable by WP, but the content shown will be uneditable.  Better tutorials will make it so the content can be completely changed, updated, or replaced through the WP UI.

4.  We need to use the `wp_{function}` functions, hooks, etc.  
Examples of hooks: 
+ `wp_head()`
+ `wp_footer()`
+ `wp_meta()`
+ `comment_form()`
Examples of [classes/functions](http://codex.wordpress.org/Theme_Development#Template_File_Checklist)
+ `body_class()`
+ `post_class()`
+ `comment_class()`
+ `bloginfo()`
+ `wp_title()`
+ `get_stylesheet_uri()`
+ `wp_head()`
+ `wp_link_pages()`

 These, and more, will make the content WP UI editable by lay-users, add functionality and ease of use.


##RESOURCES
---

1. ["Theme Development" - VALUABLE REFERENCE - from WordPress Codex](http://codex.wordpress.org/Theme_Development)

2. ["The Loop" - VALUABLE REFERENCE - from Wordpress Codex](http://codex.wordpress.org/The_Loop)

3. ["Theme Development: Theme Testing Process"](http://codex.wordpress.org/Theme_Development#Theme_Testing_Process)

4. ["WordPress Coding Standards" - from WordPress Codex](http://codex.wordpress.org/WordPress_Coding_Standards)

5. ["Know Your Sources" - HTML, CSS, PHP WP Theme References](http://codex.wordpress.org/Know_Your_Sources)