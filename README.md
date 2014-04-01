<h1>alacritous</h1>
====================

Project starter kit, includes pre linked index.html file with reset, grid, style sheet, jquery and mixins, extends, classes, functions.

<h1>Features</h1>
=================
<ul>
  <li>CSS Reset (Eric Meyer's Reset CSS v2.0 - http://cssreset.com)</li>
  <li>Responsive Grid System (http://getbootstrap.com/css/#grid)</li>
  <li>Mixins, Functions, Helper Classes and extends</li>
  <li>jQuery CDN Link + Fallback file</li>
  <li>HTML5 Shiv (https://github.com/aFarkas/html5shiv)</li>
  <li>index.html pre linked with assets and meta tags</li>
  <li>NEW - Creative Link Effects as Mixins (Original Source: https://github.com/codrops/CreativeLinkEffects)</li>
</ul>

<h1>Index.html</h1>
===================

    <!doctype html>
    <html lang="en">
    <head>
      <!--[if lt IE 9]><script src="js/lib/html5shiv.js"></script> <![endif]-->
    	<link rel="stylesheet" href="css/reset.css" media="screen">
    	<link rel="stylesheet" href="css/grid.css" media="screen">
     	<link rel="stylesheet" href="css/style.css" media="screen">
     	<meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="copyright" content="" />
        <meta name="geo.region" content="" />
        <meta name="geo.placename" content="" />
        <meta name="geo.position" content="" />
        <meta name="ICBM" content="" />
    	<meta charset="UTF-8">
    	<title>Project Name</title>
    </head>
    
    <body>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	  <!-- <script src="js/lib/jquery.1.10.2.js"></script> --> <!-- Fall back file included incase CDN is down -->
  	<script>
  		window.onload = function() {
  		    if (window.jQuery) {  
  		        // jQuery is loaded  
  		        console.log("jQuery Loaded");
  		    } else {
  		        // jQuery is not loaded
  		        console.log("jQuery NOT Loaded");
  		    }
  		}
  	</script>

    </body>
    </html>

<h1>Mixins</h1>
======
All vendor prefixes are included, where needed.
Full comments in sass/_mixins.scss file

<ul>
  <li>padding</li>
  <li>margin</li>
  <li>opacity</li>
  <li>transition</li>
  <li>transform</li>
  <li>boxShad</li>
  <li>boxSizing</li>
  <li>position</li>
  <li>linkColorL</li>
  <li>linkColorD</li>
  <li>marginRight - Has last-child set to 0.</li>
</ul>

<h1>Functions</h1>
==================
<h2>PX to EM (Body font-size is preset to 16px)</h2>
====================================================

    @function em($target) {
       	@return ($target/16)+0em;
    }
    
<h4>Usage</h4>
==============

    .social-icon {
        font-size: em(32);
    }
    
<h4>Outputs</h4>
================

    .social-icon {
        font-size: 2em;
    }
    
<h2>Convert TARGET SIZE TO %</h2>
=================================

    @function percent($target, $container) {
        @return ($target / $container) * 100%;
    }
    
<h4>Usage</h4>
==============

    aside {
        width: percent(320px, 960px);
    }
    
<h4>Outputs</h4>
================

    aside{
         width: 33.33333%;
    }
    
<h1>Extends</h1>
================
Full comments in sass/_extends.scss file

<ul>
  <li>%clearfix</li>
  <li>%centerBlock</li>
  <li>%inlineList</li>
</ul>

<h1>Classes</h1>
================

<h2>Helper Classes</h2>
Full comments sass/_classes.scss

<ul>
  <li>.right</li>
  <li>.left</li>
  <li>.hide</li>
  <li>.show</li>
  <li>.invisible</li>
  <li>.hidden</li>
  <li>.fixed</li>
</ul>

<h2>Grid Classes</h2>
See grid.css or http://getbootstrap.com/css/#grid

<h1>Creative Link Mixin Library</h1>
Firstly to see them in use see http://tympanus.net/Development/CreativeLinkEffects/

Now to use these aweseome effects I added them to a mixin libray for ease of use. CSS/SASS/_hovers.scss is where they are.

Step 1 - HTML Mark-Up add .fancy to container element eg

```

    <nav class="fancy">

    </nav>


```

Step 2 - Choose your effect and add the include to the .fancy class in CSS

```

  .fancy a { @extend %hoverPre; } // MUST BE INCLUDED REGARDLESS OF THE EFFECT CHOSEN
  .fancy {
      @include lineSlide(); 
  }

```

Step 3 - Add the appropriate link markup inside your container element. See link Syntax for reference

```

  <nav class="fancy">
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#">Link</a>
  </nav>

```

Step 4 - Preview in Browser! Your Done.

<h2>Link Syntax List</h2>
SOME OF THESE MAY LOOK THE SAME BUT IT IS VERY IMPORTANT THAT YOU MARKUP APPROPRIATLY FOR THE MIXIN.

The following Syntax is used by the mixins named - brackets, lineSlide, borderEnlarge, borderSlide, borderUp, borderTran, borderTran2, circle, circleS, borderSwitch

```

    <a href="#">Link</a>

```

The following Syntax is used by the mixins named - textFill, scaleReveal, fallDown, moveOut, cross

```

    <a href="#" data-hover="Link">Link</a>

```

The following Syntax is used by the mixins named - borderText

```

    <a href="#"><span>Main Text</span><span>Sub Text</span></a>


```

The following Syntax is used by the mixins named - rollingLinks, wordSlide,slide3D, flipOver

```

    <a href="#"><span data-hover="Link">Link</span></a>


```

The following Syntax is used by the mixins named - revealPush

```

    <a href="#" data-hover="Link"><span>Link</span></a>

```


<h1>License</h1>
=================

The MIT License (MIT)
[OSI Approved License]
The MIT License (MIT)

Copyright (c) 2014 Adam Sackfield

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

<h1>Contribute</h1>
===================
If you would like to add to this project them send a pull request and get in touch @Sacki2013 (Twitter)




















