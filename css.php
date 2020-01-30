<?php
include('top.php');
?>
        <?php ?>
<html lang="en">

    <head>
        <title>the way to use lists</title>
    </head>

    <body class="main">
        <a href="#nav"><button onclick="topFunction()" id="myBtn" title="Go to top">Top</button></a>
        <article class="block4">
            <a href="#BACKGROUND-ATTACHMENT"><button>Background-attachment</button></a>
            <a href="#BACKGROUND-COLOR"><button>Background-color</button></a>
            <a href="#BACKGROUND-IMAGE"><button>Background-image</button></a>
            <a href="#BACKGROUND-POSITION"><button>Background-position</button></a>
            <a href="#BACKGROUND-PROPERTY"><button>Background-property</button></a>
            <a href="#BACKGROUND-REPEAT"><button>Background-repeat</button></a>
            <a href="#BORDER-COLOR"><button>Border-color</button></a>
            <a href="#BORDER-STYLE"><button>Border-style</button></a>
            <a href="#EMPTY-CELLS"><button>Empty-cells</button></a>
            <a href="#BORDER-SPACING"><button>Border-spacing</button></a>
            <a href="#BORDER-COLLAPSE"><button>Border-collapse</button></a>
            <a href="#BORDER-IMAGE"><button>Border-image</button></a>
            <a href="#BOX-SHADOW"><button>Box-shadow</button></a>
            <a href="#BORDER-RADIUS"><button>Border-radius</button></a>
            <a href="#POSITIONING-ELEMENTS"><button>Positioning-elements</button></a>
            <a href="#Z-INDEX"><button>Z-Index</button></a>
            <a href="#FLOAT"><button>Float</button></a>
            <a href="#CLEAR"><button>Clear</button></a>
            <a href="#COLOR"><button>Color</button></a>
            <a href="#FONT-FAMILY"><button>Font-family</button></a>
            <a href="#FONT-SIZE"><button>Font-size</button></a>
            <a href="#HSLA"><button>HSLA</button></a>
            <a href="#LETTER-SPACING"><button>Letter-spacing</button></a>
            <a href="#WORD-SPACING"><button>Word-spacing</button></a>
            <a href="#TEXT-ALIGN"><button>Text-align</button></a>
            <a href="#TEXT-INDENT"><button>Text-indent</button></a>
            <a href="#TEXT-SHADOW"><button>Text-shadow</button></a>
            <a href="#TEXT-DECORATION"><button>Text-decoration</button></a>
            <a href="#FONT-STYLE"><button>Font-style</button></a>
            <a href="#TEXT-TRANSFORM"><button>Text-transform</button></a>
            <a href="#LINE-HEIGHT"><button>Line-height</button></a>
            <a href="#LIST-STYLE-TYPE"><button>List-style-type</button></a>
            <a href="#MARGIN"><button>Margin</button></a>
            <a href="#OPACITY"><button>Opacity</button></a>
            
            <a href="#PADDING"><button>Padding</button></a>
            <a href="#STYLING-LINKS"><button>Styling-links</button></a>
            
            
        </article> 
        <!-- ################ background section ######################### -->
        <article id="BACKGROUND-ATTACHMENT">
        <h4>background-attachment</h4>
        <p>a background image should stay in one position or move as the user scrolls up and down the page.</p>
        <p>fixed: the background image stays in the same position on the page.</p>
        <p>scroll: the background image moves up and down as the user scrolls up and down the page.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">background-image</span><span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/tulip.gif&quot;)</span>;
  <span style="color: #008800; font-weight: bold">background-repeat</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">no-repeat</span>;
  <span style="color: #008800; font-weight: bold">background-attachment</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">fixed</span>;}
            </pre></div>
        </article>
        <article id="BACKGROUND-COLOR">
        <h4>background-color</h4>
        <p>sets the color of the background for that box.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">rgb</span>(<span style="color: #6600EE; font-weight: bold">200</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">200</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">200</span>);}
<span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> DarkCyan;}
<span style="color: #007700">h2</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#ee3e80</span>;}
<span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #007020">white</span>;}
            </pre></div>
        </article>
<article id="BACKGROUND-IMAGE">
        <h4>background-image </h4>
        <p>Allows to place an image behind any HTML element. it could be the entire page or just part of the page.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">background-image</span><span style="color: #333333">:</span><span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/pattern.gif&quot;)</span>;}
            </pre></div>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">background-image</span><span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/pattern.gif&quot;)</span>;}
            </pre></div>
        </article>
<article id="BACKGROUND-POSITION">
        <h4>background-position </h4>
        <p>specify where in the browser window the background image should be placed.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">background-image</span><span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/tulip.gif&quot;)</span>;
  <span style="color: #008800; font-weight: bold">background-repeat</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">no-repeat</span>;
  <span style="color: #008800; font-weight: bold">background-position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">center</span> <span style="color: #008800; font-weight: bold">top</span>;}
            </pre></div>
        </article>
<article id="BACKGROUND-PROPERTY">
        <h4>background property</h4>
        <p>background property acts like a shorthand for all of the other background properties</p>
        <p>the properties must be specified in the following order,but id you do not want to specify it, you can miss any value.</p>
        <ul>
            <li>background-color</li>
            <li>background-image</li>
            <li>background-repeat</li>
            <li>background-attachment</li>
            <li>background-position</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">background</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#ffffff</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/tulip.gif&quot;)</span>
    <span style="color: #008800; font-weight: bold">no-repeat</span> <span style="color: #008800; font-weight: bold">top</span> <span style="color: #008800; font-weight: bold">right</span>;}
            </pre></div>
        </article>
<article id="BACKGROUND-REPEAT">
        <h4>background-repeat</h4>
        <p>have four values:repeat, repeat-x, repeat-y,no-repeat.</p>
        <p>repeat: the background image is repeated both horizontally and vertically.</p>
        <p>repeat-x: the image is repeated horizontally only.</p>
        <p>repeat-y: the image is repeated vertically only.</p>
        <p>no-repeat: the image is only shown once.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">background-image</span><span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/header.gif&quot;)</span>;
  <span style="color: #008800; font-weight: bold">background-repeat</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">repeat-x</span>;}
            </pre></div>
        </article>
<article id="BORDER">
        <!-- ####################### border section ################################ -->
        <h4>Border</h4>
        <p>The border property allows you to specify the width, style and color of a border in one property.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">250px</span>;
<span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">3px</span> <span style="color: #008800; font-weight: bold">dotted</span> <span style="color: #6600EE; font-weight: bold">#0088dd</span>;}
</pre></div>
        </article>
<article id="BORDER-COLOR">
        <h4>border-color</h4>    
        <p>the border-color is possible to individually control the color of the borders on different sides of a box using:</p>
        <ul>
            <li>border-top-color</li>
            <li>border-right-color</li>
            <li>border-bottom-color</li>
            <li>border-left-color</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.one</span> {
  <span style="color: #008800; font-weight: bold">border-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#0088dd</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.two</span> {
  <span style="color: #008800; font-weight: bold">border-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#bbbbaa</span> <span style="color: #6600EE; font-weight: bold">#111111</span> <span style="color: #6600EE; font-weight: bold">#ee3e80</span> <span style="color: #6600EE; font-weight: bold">#0088dd</span>;}
</pre></div>
        </article>
<article id="BORDER-STYLE">
        <h4>border-style</h4>
        <p>the border-style can control the style of a border using the border-style property.</p>
        <p>this property can take the following values:</p>
        <ul>
            <li>solid: a signle solid line</li>
            <li>dotted: a series of square dots</li>
            <li>dashed: a series of short lines</li>
            <li>double: two solid lines</li>
            <li>groove: appears to be carved into the page</li>
            <li>ridge: appears to stick out from the page</li>
            <li>inset: appears embedded into the page</li>
            <li>outset: looks like it is coming out the screen</li>
            <li>hidden/none: no border is shown</li>
        </ul>
        <p>you can individually change the styles of different borders using:</p>
        <ul>
            <li>border-top-style</li>
            <li>border-left-style</li>
            <li>border-right-style</li>
            <li>border-bottom-style</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.one</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">solid</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.two</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">dotted</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.three</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">dashed</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.four</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">double</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.five</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">groove</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.six</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">ridge</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.seven</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">inset</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.eight</span> {<span style="color: #008800; font-weight: bold">border-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">outset</span>;}
</pre></div>
        </article>
<article id="EMPTY-CELLS">
        <h4>Empty-cells</h4>
        <p>If you have empty cells in your table, then you can use the empty-cells property to specify whether or not their borders should be shown.</p>
        <p>it can take one of three values:</p>
        <ul>
            <li>Show: this shows the borders of any empty cells.</li>
            <li>hide: this hides the borders of any empty cells</li>
            <li>Inherit: if you have one table nested inside another, the inherit value instructs the table cells to obey the rules of the containing table.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">td</span> {
  <span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#0088dd</span>;
  <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">15px</span>;}
<span style="color: #007700">table</span><span style="color: #BB0066; font-weight: bold">.one</span> {
  <span style="color: #008800; font-weight: bold">empty-cells</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">show</span>;}
<span style="color: #007700">table</span><span style="color: #BB0066; font-weight: bold">.two</span> {
  <span style="color: #008800; font-weight: bold">empty-cells</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">hide</span>;}
</pre></div>
        
        <h3>Gaps between cells</h3>
        </article>
        <article id="BORDER-SPACING">
        <h4>border-spacing</h4>
        <p>The border-spacing property allows you to control the distance between adjacent cells.</p>
        </article>
        <article id="BORDER-COLLAPSE">
        <h4>border-collapse</h4>
        <p>When a border has been used on table cells, where two cells meet, the width of lines would be twice that of the outside edges. It is possible to collapse adjacent borders to prevent this using the border-collapse property. Possible values are:</p>
        <ul>
            <li>collapse: borders are collapsed into a single border where possible.</li>
            <li>separate: borders are detached from each other.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">td</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#0088dd</span>;
  <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">15px</span>;
  <span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">2px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#000000</span>;}
<span style="color: #007700">table</span><span style="color: #BB0066; font-weight: bold">.one</span> {
  <span style="color: #008800; font-weight: bold">border-spacing</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">15px</span>;}
<span style="color: #007700">table</span><span style="color: #BB0066; font-weight: bold">.two</span> {
  <span style="color: #008800; font-weight: bold">border-collapse</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">collapse</span>;}
</pre></div>
        </article>
<article id="BORDER-IMAGE">
        <h4>border-image</h4>
        <p>The border-image property applies an image to the border of any box. It takes a background image and slices it into nine pieces</p>
        <p>This property requires three pieces of information:</p>
        <ol>
            <li>The URL of the image</li>
            <li>Where to slice the image</li>
            <li>What to do with the straight edges; the possible values are:
                <ul>
                    <li>Stretch: stretches the image</li>
                    <li>Repeat: repeat the image</li>
                    <li>Round: like repeat but if the tiles do not fit exactly, scales the tile image so they will</li>
                </ul>
            </li>
        </ol>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.one</span> {
  <span style="color: #333333">-</span>moz<span style="color: #333333">-</span><span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>image<span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/dots.gif&quot;)</span>
    <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> stretch;
  <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span><span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>image<span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/dots.gif&quot;)</span>
    <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> stretch;
  <span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>image<span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/dots.gif&quot;)</span>
    <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> stretch;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.two</span> {
  <span style="color: #333333">-</span>moz<span style="color: #333333">-</span><span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>image<span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/dots.gif&quot;)</span>
    <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> round;
  <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span><span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>image<span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/dots.gif&quot;)</span>
    <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> round;
  <span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>image<span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/dots.gif&quot;)</span>
    <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> <span style="color: #6600EE; font-weight: bold">11</span> round;}
</pre></div>

        <p>* the -moz-border-image and -webkit-border-image properties are not in the CSS specification but help earlier versions of Chrome, Firefox, and Safari display this effect.</p>
        </article>
        <article id="BOX-SHADOW">
        <h4>Box-shadow</h4>
        <p>the box-shadow property allows you to add a drop shadow around a box. It must use at least the first of these two values as well as a color:</p>
        <ul>
            <li>Horizontal offset: Negative values position the shadow to the left of the box.</li>
            <li>Vertical offset: Negative values position the shadow to the top of the box.</li>
            <li>Blur distance: if omitted, the shadow is a solid line like a border.</li>
            <li>Spread of shadow: if used, a positive value will cause the shadow to expand in all directions, and a negative values will make it contract.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.one</span> {
  <span style="color: #333333">-</span>moz<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">-5px</span> <span style="color: #6600EE; font-weight: bold">-5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">-5px</span> <span style="color: #6600EE; font-weight: bold">-5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">-5px</span> <span style="color: #6600EE; font-weight: bold">-5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.two</span> {
  <span style="color: #333333">-</span>moz<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.three</span> {
  <span style="color: #333333">-</span>moz<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.four</span> {
  <span style="color: #333333">-</span>moz<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.five</span> {
  <span style="color: #333333">-</span>moz<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">inset</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span>box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">inset</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;
  box<span style="color: #333333">-</span>shadow<span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">inset</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">0</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">#777777</span>;}
</pre></div>
        </article>
        <h3>Rounded corners</h3>
        
        <article id="BORDER-RADIUS">
        <h4>Border-radius</h4>
        <p>CSS3 introduces the ability to create rounded corners on any box, using a property called border-radius. The value indicates the size of the radius in pixels.</p>
        <p>You can specify individual values for each corner of a box using:</p>
        <ul>
            <li>border-top-right-radius</li>
            <li>border-bottom-right-radius</li>
            <li>border-bottom-left-radius</li>
            <li>border-top-left-radius</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#cccccc</span>; <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">20px</span>;
<span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">275px</span>;
<span style="color: #008800; font-weight: bold">text-align</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">center</span>; <span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>radius<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>; <span style="color: #333333">-</span>moz<span style="color: #333333">-</span><span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>radius<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>; <span style="color: #333333">-</span>webkit<span style="color: #333333">-</span><span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">-</span>radius<span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;}
</pre></div>

        <p>you can also use a shorthand of these four properties(in clockwise order: top, right, bottom, left</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">border-radius</span><span style="color: #333333">:</span> <span style="color: #007700">5px</span><span style="color: #333333">,</span> <span style="color: #007700">10px</span><span style="color: #333333">,</span> <span style="color: #007700">5px</span><span style="color: #333333">,</span> <span style="color: #007700">10px</span><span style="color: #333333">;</span>
</pre></div>
        
<!-- ########################### Bottom section ############################# -->
</article>
<article id="POSITIONING ELEMENTS">
        <h3>Positioning elements</h3>
        
        <h4>Position: relative</h4>
        <p>Relative positioning moves an element in relation to where it would have been in normal flow.</p>
        <p>To move the box up or down, you can use either the top or bottom properties.To move the box horizontally, you can use either the left or right properties.(the values of the box offset properties are usually given in pixels, percentages or ems.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.example</span> {
  <span style="color: #008800; font-weight: bold">position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">relative</span>;
  <span style="color: #008800; font-weight: bold">top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;
  <span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">100px</span>;}
</pre></div>

        <h4>Position: absolute</h4>
        <p>when the position property is given a values of absolute, the box is taken out of normal flow and no longer affects the position of other elements on the page.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">absolute</span>;
  <span style="color: #008800; font-weight: bold">top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span>;
  <span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">500px</span>;
  <span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">250px</span>;}
<span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">450px</span>;}
</pre></div>

        <h4>Position: fixed</h4>
        <p>Fixed positioning is a type of absolute positioning that requires the position property to have a values of fixed. It positions the element in relation to the browser window. Therefore, when a user scrolls down the page, it stays in the exact same place.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">fixed</span>;
  <span style="color: #008800; font-weight: bold">top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span>;
  <span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">50px</span>;
  <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;
  <span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span>;
  <span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">100</span><span style="color: #333333">%</span>;
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#efefef</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.example</span> {
  <span style="color: #008800; font-weight: bold">margin-top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">100px</span>;}
</pre></div>
        </article>
<article id="Z-INDEX">
        <h4>Z-index</h4>
        <p>When you use relative, fixed, or absolute positioning, boxes can overlap. If boxes do overlap, the elements that appear later in the HTML code sit on top of those that are earlier in the page.</p>
        <p>If you want to control which element sits on top, you can use the z-index property.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">fixed</span>;
  <span style="color: #008800; font-weight: bold">top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span>;
  <span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span>;
  <span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span>;
  <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;
  <span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">100</span><span style="color: #333333">%</span>;
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#efefef</span>;
  <span style="color: #008800; font-weight: bold">z-index</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10</span>;}
<span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">relative</span>; <span style="color: #008800; font-weight: bold">top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">70px</span>;
<span style="color: #008800; font-weight: bold">left</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">70px</span>;}
</pre></div>
        </article>
<article id="FLOAT">
        <h4>Float</h4>
        <p>The float property allows you to take an element in normal flow and place it as far to the left or right of the containing element as possible.</p>
        <p>When you use the float property, you should also use the width property to indicate how wide the floated element should be> if you do not, results can be inconsistent but the box is likely to take up the full width of the containing element.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">blockquote</span> {
        <span style="color: #008800; font-weight: bold">float</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">right</span>;
        <span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">275px</span>;
        <span style="color: #008800; font-weight: bold">font-size</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">130</span><span style="color: #333333">%</span>;
        <span style="color: #008800; font-weight: bold">font-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">italic</span>;
        <span style="color: #008800; font-weight: bold">font-family</span><span style="color: #333333">:</span> Georgia<span style="color: #333333">,</span> Times<span style="color: #333333">,</span> <span style="color: #008800; font-weight: bold">serif</span>;
        <span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0px</span> <span style="color: #6600EE; font-weight: bold">0px</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">10px</span>;
        <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;
        <span style="color: #008800; font-weight: bold">border-top</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#665544</span>;
        <span style="color: #008800; font-weight: bold">border-bottom</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#665544</span>;}
</pre></div>
        </article>
<article id="CLEAR">
        <h4>Clear</h4>
        <p>The clear property allows you to say that no element should touch the left or right-hand sides of box. It can take the flowing values:</p>
        <ul>
            <li>Left: the left-hand side of the box should not touch any other elements appearing in the same containing element.</li>
            <li>Right: the right-hand side of the box will not touch elements appearing in the same containing element.</li>
            <li>Both: Neither the left nor right-hand sides of the box will touch elements appearing in the same containing element.</li>
            <li>None: Elements can touch either side.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">750px</span>;
  <span style="color: #008800; font-weight: bold">font-family</span><span style="color: #333333">:</span> Arial<span style="color: #333333">,</span> Verdana<span style="color: #333333">,</span> <span style="color: #008800; font-weight: bold">sans-serif</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#665544</span>;}
<span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">230px</span>;
<span style="color: #008800; font-weight: bold">float</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">left</span>;
<span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span>;
<span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">5px</span>; <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#efefef</span>;}
<span style="color: #BB0066; font-weight: bold">.clear</span> {
  <span style="color: #008800; font-weight: bold">clear</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">left</span>;}
</pre></div>
        </article>
        <article id="COLOR">
        <h4>Color</h4>
        <p>The color property allows you to specify the color of text inside an element.</p>
        <ul>
            <li>RGB values: these express colors im terms of how much red, green and blue are used to make it up. For example:rgb(100,100,90)</li>
            <li>HEX codes: these are sic-digit codes that represent the amount of red, green and blue in a color, preceded by a pound or has #sign. For example:#ee3e80.</li>
            <li>Color names: there are 147 predefined color mnames that are recognized by browsers. For example: DarkCyan.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #888888">/* color name */</span>
<span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> DarkCyan;}
<span style="color: #888888">/* hex code */</span>
<span style="color: #007700">h2</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#ee3e80</span>;}
<span style="color: #888888">/* rgb value */</span>
<span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">rgb</span>(<span style="color: #6600EE; font-weight: bold">100</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">100</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">90</span>);}
</pre></div>
        </article>
<article id="DISPLAY">
        <h4>Display</h4>
        <p>The display property allows you to turn an inline element into a block-level element or vice versa, and can also be used to hide an element from the page.</p>
        <p>The values this property can take are:</p>
        <ul>
            <li>Inline: this causes a block-level element to act like an inline element.</li>
            <li>Block: this causes an inline element to act like a block-level element.</li>
            <li>Inline-block: this cause a block-level element to flow like an inline element, while retaining other features of a block-level element.</li>
            <li>None: this hides an element from the page. In this case, the element acts as though it is not on the page at all.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">li</span> {
  <span style="color: #008800; font-weight: bold">display</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">inline</span>;
  <span style="color: #008800; font-weight: bold">margin-right</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;}
<span style="color: #007700">li</span><span style="color: #BB0066; font-weight: bold">.coming-soon</span> {
  <span style="color: #008800; font-weight: bold">display</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">none</span>;}
</pre></div>
        </article>
<article id="FONT-FAMILY">
        <h4>Font-family</h4>
        <p>The font-family property allows you to specify the typeface that should be used for any text inside the element(s) to which a CSS rule applies.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #333333">&lt;!</span><span style="color: #007700">DOCTYPE</span> <span style="color: #007700">html</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">html</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">head</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">title</span><span style="color: #333333">&gt;</span><span style="color: #007700">Font</span> <span style="color: #007700">Family</span><span style="color: #333333">&lt;/</span><span style="color: #007700">title</span><span style="color: #333333">&gt;</span> <span style="color: #333333">&lt;</span><span style="color: #007700">style</span> <span style="color: #007700">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;text/css&quot;</span><span style="color: #333333">&gt;</span>
      <span style="color: #007700">body</span> {
        <span style="color: #008800; font-weight: bold">font-family</span><span style="color: #333333">:</span> Georgia<span style="color: #333333">,</span> Times<span style="color: #333333">,</span> <span style="color: #008800; font-weight: bold">serif</span>;}
      <span style="color: #007700">h1</span><span style="color: #333333">,</span> <span style="color: #007700">h2</span> {
        <span style="color: #008800; font-weight: bold">font-family</span><span style="color: #333333">:</span> Arial<span style="color: #333333">,</span> Verdana<span style="color: #333333">,</span> <span style="color: #008800; font-weight: bold">sans-serif</span>;}
      <span style="color: #BB0066; font-weight: bold">.credits</span> {
        <span style="color: #008800; font-weight: bold">font-family</span><span style="color: #333333">:</span> <span style="background-color: #fff0f0">&quot;Courier New&quot;</span><span style="color: #333333">,</span> Courier<span style="color: #333333">,</span>
<span style="color: #008800; font-weight: bold">monospace</span>;}
    <span style="color: #333333">&lt;/</span><span style="color: #007700">style</span><span style="color: #333333">&gt;</span>
  <span style="color: #333333">&lt;/</span><span style="color: #007700">head</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">body</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">h1</span><span style="color: #333333">&gt;</span><span style="color: #007700">Briards</span><span style="color: #333333">&lt;/</span><span style="color: #007700">h1</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;</span><span style="color: #007700">p</span> <span style="color: #007700">class</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;credits&quot;</span><span style="color: #333333">&gt;</span><span style="color: #007700">by</span> <span style="color: #007700">Ivy</span> <span style="color: #007700">Duckett</span><span style="color: #333333">&lt;/</span><span style="color: #007700">p</span><span style="color: #333333">&gt;</span> <span style="color: #333333">&lt;</span><span style="color: #007700">p</span> <span style="color: #007700">class</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;intro&quot;</span><span style="color: #333333">&gt;</span><span style="color: #007700">The</span> <span style="color: #333333">&lt;</span><span style="color: #007700">a</span> <span style="color: #007700">class</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;breed&quot;</span>
<span style="color: #007700">href</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;http://en.wikipedia.org/wiki/ Briard&quot;</span><span style="color: #333333">&gt;</span><span style="color: #007700">briard</span><span style="color: #333333">&lt;/</span><span style="color: #007700">a</span><span style="color: #333333">&gt;,</span> <span style="color: #007700">or</span> <span style="color: #007700">berger</span> <span style="color: #007700">de</span> <span style="color: #007700">brie</span><span style="color: #333333">,</span> <span style="color: #007700">is</span> <span style="color: #007700">a</span> <span style="color: #007700">large</span> <span style="color: #007700">breed</span> <span style="color: #007700">of</span> <span style="color: #007700">dog</span> <span style="color: #007700">traditionally</span> <span style="color: #007700">used</span> <span style="color: #007700">as</span> <span style="color: #007700">a</span> <span style="color: #007700">herder</span> <span style="color: #007700">and</span> <span style="color: #007700">guardian</span> <span style="color: #007700">of</span> <span style="color: #007700">sheep</span><span style="color: #333333">...&lt;/</span><span style="color: #007700">p</span><span style="color: #333333">&gt;</span>
  <span style="color: #333333">&lt;/</span><span style="color: #007700">body</span><span style="color: #333333">&gt;</span>
<span style="color: #333333">&lt;/</span><span style="color: #007700">html</span><span style="color: #333333">&gt;</span>
</pre></div>
        </article>
<article id="FONT-SIZE">
        <h4>Font-size</h4>
        <p>The font-size property enables you to specify a size for the font. There are several ways to specify the size of a font. The most common are:</p>
        <ul>
            <li>Pixels:pixels are commonly used because they allow web designers very precise control over how much space their text takes up. The number of pixels is followed by the letters px.</li>
            <li>Percentages: The default size of text in browsers is 16px. So a size of 75% would be the equivalent of 12px, and 200% woule be 32px.</li>
            <li>EMS: an em is equivalent to the width of a letter m.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">font-family</span><span style="color: #333333">:</span> Arial<span style="color: #333333">,</span> Verdana<span style="color: #333333">,</span> <span style="color: #008800; font-weight: bold">sans-serif</span>;
  <span style="color: #008800; font-weight: bold">font-size</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">12px</span>;}
<span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">font-size</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">200</span><span style="color: #333333">%</span>;}
<span style="color: #007700">h2</span> {
  <span style="color: #008800; font-weight: bold">font-size</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1.3em</span>;}
</pre></div>
        </article>
<article id="HSLA">
        <h4>HSL/HSLA</h4>
        <p>The hsl color property has been introduced in CSS3 as an alternative way to specify colors. The value of the property starts with the letters hsl, followed by individual values inside parentheses for:</p>
        <ul>
            <li>HUE: this is expressed as an angle (between 0 and 360 degrees).</li>
            <li>Saturation: this is expressed as a percentage.</li>
            <li>Lightness: this is expressed as a percentage with 0% being white, 50% being normal, and 100% being black.</li>
        </ul>
        <p>The hsla color property allows you to specify color properties using hue, saturation, and lightness as above, and adds a fourth value which represents transparency. The a stands for:</p>
        <p>ALPHA: this is expressed as a number between 0 and 1.0. For example, o.5 represents 50% transparency, and 0.75 represents 75% transparency.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">body</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#C8C8C8</span>;
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> hsl(<span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">%,</span><span style="color: #6600EE; font-weight: bold">78</span><span style="color: #333333">%</span>);}
<span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#ffffff</span>; <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> hsla(<span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">100</span><span style="color: #333333">%,</span><span style="color: #6600EE; font-weight: bold">100</span><span style="color: #333333">%,</span><span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">.</span><span style="color: #6600EE; font-weight: bold">5</span>);}
</pre></div>
        </article>
<article id="LETTER-SPACING">
        <h4>Letter-spacing</h4>
        <p>Kerning is the term typographers use for the space between each letter. You can control the space between each letter with the letter-spacing property.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">h1</span><span style="color: #333333">,</span> <span style="color: #007700">h2</span> {
  <span style="color: #008800; font-weight: bold">text-transform</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">uppercase</span>;
  <span style="color: #008800; font-weight: bold">letter-spacing</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0.2em</span>;}
</pre></div>
        </article>
<article id="WORD-SPACING">
        <h4>Word-spacing</h4>
        <p>You can also control the gap between words using the word-spacing property.</p>    
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #BB0066; font-weight: bold">.credits</span> {
  <span style="color: #008800; font-weight: bold">font-weight</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">bold</span>;
  <span style="color: #008800; font-weight: bold">word-spacing</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1em</span>;}
</pre></div>
        </article>
<article id="TEXT-ALIGN">
        <h4>Text-align</h4>
        <p>The text-align property allows you to control the alignment of text. The property can take one of four values:</p>
        <ul>
            <li>Left: this indicates that the text should be left-aligned</li>
            <li>Right: this indicates that the text should be right-aligned.</li>
            <li>Center: this allows you to center text</li>
            <li>Justify: this indicates that every line in a paragraph, except the last line, should be set to take up the full width of the containing box.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">text-align</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">left</span>;}
<span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">text-align</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">justify</span>;}
<span style="color: #BB0066; font-weight: bold">.credits</span> {
  <span style="color: #008800; font-weight: bold">text-align</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">right</span>;}
</pre></div>
        </article>
<article id="TEXT-INDENT">
        <h4>Text-indent</h4>
        <p>The text-indent property allows you to indent the first line of text within an element.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">background-image</span><span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/logo.gif&quot;)</span>;
  <span style="color: #008800; font-weight: bold">background-repeat</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">no-repeat</span>;
  <span style="color: #008800; font-weight: bold">text-indent</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">-9999px</span>;}
<span style="color: #BB0066; font-weight: bold">.credits</span> {
  <span style="color: #008800; font-weight: bold">text-indent</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">20px</span>;}
</pre></div>
        </article>
<article id="TEXT-SHADOW">
        <h4>Text-shadow</h4>
        <p>The text-shadow property has become commonly used despite lacking support in all browsers</p>
        <p>It is used to create a drop shadow, which is a dark version of the word just behind it and slightly offset. It can also be used to create an embossed effect by adding a shadow that is slightly lighter than the text.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.one</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#eeeeee</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#666666</span>;
  <span style="color: #008800; font-weight: bold">text-shadow</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #6600EE; font-weight: bold">0px</span> <span style="color: #6600EE; font-weight: bold">#000000</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.two</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#dddddd</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#666666</span>;
  <span style="color: #008800; font-weight: bold">text-shadow</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #6600EE; font-weight: bold">3px</span> <span style="color: #6600EE; font-weight: bold">#666666</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.three</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#cccccc</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#ffffff</span>;
  <span style="color: #008800; font-weight: bold">text-shadow</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">2px</span> <span style="color: #6600EE; font-weight: bold">2px</span> <span style="color: #6600EE; font-weight: bold">7px</span> <span style="color: #6600EE; font-weight: bold">#111111</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.four</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#bbbbbb</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#cccccc</span>;
  <span style="color: #008800; font-weight: bold">text-shadow</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">-1px</span> <span style="color: #6600EE; font-weight: bold">-2px</span> <span style="color: #6600EE; font-weight: bold">#666666</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.five</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#aaaaaa</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#ffffff</span>;
  <span style="color: #008800; font-weight: bold">text-shadow</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">-1px</span> <span style="color: #6600EE; font-weight: bold">-1px</span> <span style="color: #6600EE; font-weight: bold">#666666</span>;}
</pre></div>
        </article>
<article id="TEXT-DECORATION">
        <h4>Text-decoration</h4>
        <p>The text-decoration property allows you to specify the following values:</p>
        <ul>
            <li>None: this removes any decoration already applied to the text.</li>
            <li>Underline: This adds a line underneath the text.</li>
            <li>Overline: this adds a line over the top of the text.</li>
            <li>Line-through: This adds a line through words.</li>
            <li>Blink: this animates the text to make it flash on and off.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #BB0066; font-weight: bold">.credits</span> {
  <span style="color: #008800; font-weight: bold">text-decoration</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">underline</span>;}
<span style="color: #007700">a</span>{
<span style="color: #008800; font-weight: bold">text-decoration</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">none</span>;}
</pre></div>
        </article>
<article id="FONT-STYLE">
        <h4>font-style</h4>
        <p>if you want to create italic text, you can use the font-style property. There are three values this property can take:</p>
        <ul>
            <li>normal: this causes text to appear in a normal style</li>
            <li>italic: this causes text to appear italic.</li>
            <li>oblique: this causes text to appear oblique</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #BB0066; font-weight: bold">.credits</span> {
  <span style="color: #008800; font-weight: bold">font-style</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">italic</span>;}
</pre></div>
        </article>
<article id="TEXT-TRANSFORM">
        <h4>Text-transform</h4>
        <p>The text-transform property is used to change the case of text giving it one of the following values:</p>
        <ul>
            <li>Uppercase: this causes the text to appear uppercase</li>
            <li>Lowercase: this causes the text to appear lowercase.</li>
            <li>Capitalize: this causes the first letter of each word to appear capitalized.</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">h1</span> {
  <span style="color: #008800; font-weight: bold">text-transform</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">uppercase</span>;}
<span style="color: #007700">h2</span> {
  <span style="color: #008800; font-weight: bold">text-transform</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">lowercase</span>;}
<span style="color: #BB0066; font-weight: bold">.credits</span> {
  <span style="color: #008800; font-weight: bold">text-transform</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">capitalize</span>;}
</pre></div>
        </article>
<article id="LINE-HEIGHT">
        <h4>Line-height</h4>
        <p>In CSS, the line-height property sets the hight of an entire line of text, so the difference between the font-size and the line-hight is equivalent to the leading</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">line-height</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1.4em</span>;}
</pre></div>
        </article>
        <article id="LIST-STYLE-TYPE">
        <h4>List-style-type</h4>
        <p>The list-style-type property allows you to control the shape of style of a bullet point. </p>
        <p>unordered list: For an unordered list you can use the following values: none, disc, circle and square</p>
        <p>ordered Lists: For an ordered (numbered) list you can use the following values: decimal, decimal-leading-zero, lower-alpha, upper-alpha, lower-roman and upper-roman</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">ol</span> {
  <span style="color: #008800; font-weight: bold">list-style-type</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">lower-roman</span>;}
</pre></div>

        <h4>List-style-image</h4>
        <p>You can specify an image to act as a bullet point using the list-style-image property.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">ul</span> {
  <span style="color: #008800; font-weight: bold">list-style-image</span><span style="color: #333333">:</span> <span style="color: #DD2200; background-color: #fff0f0">url(&quot;images/star.png&quot;)</span>;}
<span style="color: #007700">li</span> {
  <span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span> <span style="color: #6600EE; font-weight: bold">0px</span> <span style="color: #6600EE; font-weight: bold">0px</span> <span style="color: #6600EE; font-weight: bold">0px</span>;}
</pre></div>

        <h4>List-style-position</h4>
        <p>Lists are indented into the page by default and the list-style-position property indicated whether the marker should appear on the inside or the outside of the box containing the main points.</p>
        <p>This property can take one of two values:</p>
        <ul>
            <li>outside: The marker sits to the left of the block of text. (This is the default behaviour if this property is not used.)</li>
            <li>inside: The marker sits inside the box of text (which is indented).</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">ul</span> {
  <span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">150px</span>;}
<span style="color: #007700">li</span> {
  <span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;}
<span style="color: #007700">ul</span><span style="color: #BB0066; font-weight: bold">.illuminations</span> {
  <span style="color: #008800; font-weight: bold">list-style-position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">outside</span>;}
<span style="color: #007700">ul</span><span style="color: #BB0066; font-weight: bold">.season</span> {
  <span style="color: #008800; font-weight: bold">list-style-position</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">inside</span>;}
</pre></div>
        </article>
<article id="MARGIN">
        <h4>Margin</h4>
        <p>The margin property controls the gap between boxes. its value is commonly given in pixels, although you may also use percentages or ems.</p>
        <p>You can specify values for each side of a box using:</p>
        <ul>
            <li>margin-top</li>
            <li>margin-right</li>
            <li>margin-bottom</li>
            <li>margin-left</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">200px</span>;
<span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">2px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#0088dd</span>; <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.example</span> {
  <span style="color: #008800; font-weight: bold">margin</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">20px</span>;}
</pre></div>
        </article>
<article id="OPACITY">
        <h4>Opacity</h4>
        <p>opacity property which allows you to specify the opacity of an element and any of its child elements. The value is a number between 0.0 and 1.0 (so a value of 0.5 is 50% opacity and 0.15 is 15% opacity).</p>
        <article id="RGBA">
        <h4>rgba</h4>
        <p>rgba property allows you to specify a color, just like you would with an RGB value, but adds a fourth value to indicate opacity.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.one</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">rgb</span>(<span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span>);
  <span style="color: #008800; font-weight: bold">opacity</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">.</span><span style="color: #6600EE; font-weight: bold">5</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.two</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">rgb</span>(<span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span>);
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> rgba(<span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">0</span><span style="color: #333333">.</span><span style="color: #6600EE; font-weight: bold">5</span>);}
</pre></div>
        </article>
<article id="PADDING">
        <h4>Padding</h4>
        <p>The padding property allows you to specify how much space should appear between the content of an element and its border.</p>
        <p>You can specify different values for each side of a box using:</p>
        <ul>
            <li>padding-top</li>
            <li>padding-right</li>
            <li>padding-bottom</li>
            <li>padding-left</li>
        </ul>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">p</span>{
<span style="color: #008800; font-weight: bold">width</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">275px</span>;
<span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">2px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#0088dd</span>;}
<span style="color: #007700">p</span><span style="color: #BB0066; font-weight: bold">.example</span> {
  <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">10px</span>;}
</pre></div>
        </article>
        <article id="STYLING-LINKS">
        <h3>Styling links</h3>
        
        <h4>:links</h4>
        <p>This allows you to set styles for links that have not yet been visited.</p>
        <h4>:visited</h4>
        <p>This allows you to set styles for links that have been clicked on.</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">a</span><span style="color: #555555; font-weight: bold">:link</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #007020">deeppink</span>;
  <span style="color: #008800; font-weight: bold">text-decoration</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">none</span>;}
<span style="color: #007700">a</span><span style="color: #555555; font-weight: bold">:visited</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #007020">black</span>;}
<span style="color: #007700">a</span><span style="color: #555555; font-weight: bold">:hover</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #007020">deeppink</span>;
  <span style="color: #008800; font-weight: bold">text-decoration</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">underline</span>;}
<span style="color: #007700">a</span><span style="color: #555555; font-weight: bold">:active</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #007020">darkcyan</span>;}
</pre></div>


        <h3>Responding to users</h3>
        <h4>:hover</h4>
        <p>This is applied when a user hovers over an element with a pointing device such as a mouse. This has commonly been used to change the appearance of links and buttons when a user places their cursor over them. It is worth noting that such events do not work on devices that use touch screens (such as the iPad) because the screen is not able to tell when someone is hovering their finger over an element.</p>
        <h4>:active</h4>
        <p>This is applied when an element is being activated by a user; for example, when a button is being pressed or a link being clicked. Sometimes this is used to make a button or link feel more like it is being pressed by changing the style or position of the element slightly</p>
        <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">input</span> {
  <span style="color: #008800; font-weight: bold">padding</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">6px</span> <span style="color: #6600EE; font-weight: bold">12px</span> <span style="color: #6600EE; font-weight: bold">6px</span> <span style="color: #6600EE; font-weight: bold">12px</span>;
  <span style="color: #008800; font-weight: bold">border</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">1px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #6600EE; font-weight: bold">#665544</span>;
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#ffffff</span>;}
<span style="color: #007700">input</span><span style="color: #BB0066; font-weight: bold">.submit</span><span style="color: #555555; font-weight: bold">:hover</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#665544</span>;}
<span style="color: #007700">input</span><span style="color: #BB0066; font-weight: bold">.submit</span><span style="color: #555555; font-weight: bold">:active</span> {
  <span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #007020">chocolate</span>;}
<span style="color: #007700">input</span><span style="color: #BB0066; font-weight: bold">.text</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#cccccc</span>;}
<span style="color: #007700">input</span><span style="color: #BB0066; font-weight: bold">.text</span><span style="color: #555555; font-weight: bold">:focus</span> {
  <span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #6600EE; font-weight: bold">#665544</span>;}
</pre></div>
</article>
    </body>
</html>
<?php
include('footer.php');
?>
    </body>
</html>
        

