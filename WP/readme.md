#What will we need to do to port elizabeth-blog to WordPress?

1. We need to create a blog.php, a page.php, and a single.php, and functions.php, comments.php, category.php, tag.php, taxonomy.php, author.php, date.php, archive.php, search.php, attachment.php, image.php, 404.php.  Many of these pages will use similar, if not the exact same layout and styles.

2. We need to update the file structure, which is different from what we currently have.  This means that as we do this, we need to fix the links between files that we break as we go

3. We need to follow a tutorial (or several) to turn HTML into a WordPress Theme. Basic tutorials will make it usable by WP, but the content shown will be uneditable.  Better tutorials will make it so the content can be completely changed, updated, or replaced with the WP UI.

4.  We need to use the `wp_{function}` functions, hooks, etc.  They will make the content WP UI editable by lay-users 

5. ["Theme Development" - VALUABLE REFERENCE - from WordPress](http://codex.wordpress.org/Theme_Development)