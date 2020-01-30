<?php
include('top.php');
?>

<html lang="en">

    <head>
        <title>technical documentation page</title>
    </head>

    <body class="main" class="Documentation">

        <a href="#nav"><button onclick="topFunction()" id="myBtn" title="Go to top">Top</button></a>
<article class="block">              
        <h2>Html</h2>
        <p>Html stands for hyper-text markup language and it describes the structure of a web page.<br>
            Html uses elements to define the structure of a web page.</p>
        <h3>Structure of an element</h3>
        <p><figure><img src='../image/structure of element.png' alt="structure of an element">
            <figcaption>Image from wikimedia commons.</figcaption>
        </figure></p>
        <p>Elements act like boxes and that contain the contents in them.</p>
        <h3>Attributes</h3>
        <p>Attributes tell us more about the element and are made up of two parts:
            Name and a value in the format:<br>
            Attribute_name= “value”
        </p>
        <h3>Basic structure of a webpage.</h3>
        <figure>
            <img src="../image/structure.png" alt="Basic structure of webpage.">
            <figcaption>Image created by Sidhanth taken by screenshot.</figcaption>
        </figure>
        
</article>
        <article class="block">
        <h2>CSS</h2>
        <p>CSS stands for cascading style sheet. It defines how the web page looks. <br>
            To see the power of css you can check out <a href="http://www.csszengarden.com/" target="blank">csszengarden</a> where different web designers show the beauty of CSS by changing only the css while the html and the content reamins the same.
            <br>
            A CSS rule contains two parts: selector and declaration.</p>
        <figure>
            <img src="../image/CSS-RULE.png" alt="structure of css rule">
            <figcaption>Image taken from HTML & CSS: Design and Build Websites, by Jon Duckett</figcaption>
            <figcaption id="imp">Selectors indicate which element the rule applies to. The same rule can apply to more than one element if you separate the element names with commas.<br>
                Declarations indicate how the elements referred to in the selector should be styled. Declarations are split into two parts (a property and a value), and are separated by a colon.</figcaption>
        </figure>

        <h3>CSS Declaration</h3>
        <p>CSS declaration is written within a curly bracket after the css selector and is written in the format:<br>
            property:value<br>
            You can add several properties in one declaration by separating them with semi-colons.</p>
        <h3>Using CSS</h3>
        <p>CSS can be used in two ways:</p>
    <li><h4>Internal CSS</h4>
        <p>You can also include CSS rules
            within an HTML page by placing
            them inside a style element, which usually sits inside the head element of the page. For example:</p>
        <!-- HTML generated using hilite.me --><div style="color:gray; background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;!DOCTYPE html&gt;</span>
<span style="color: #007700">&lt;html&gt;</span>
<span style="color: #007700">&lt;head&gt;</span>
<span style="color: #007700">&lt;title&gt;</span>Using Internal CSS<span style="color: #007700">&lt;/title&gt;</span>
<span style="color: #007700">&lt;style </span><span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text/css&quot;</span><span style="color: #007700">&gt;</span>
<span style="color: #007700">body</span> {
<span style="color: #008800; font-weight: bold">font-family</span><span style="color: #333333">:</span> arial;
<span style="color: #008800; font-weight: bold">background-color</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">rgb</span>(<span style="color: #6600EE; font-weight: bold">185</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">179</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">175</span>);}
<span style="color: #007700">h1</span> {
<span style="color: #008800; font-weight: bold">color</span><span style="color: #333333">:</span> <span style="color: #008800; font-weight: bold">rgb</span>(<span style="color: #6600EE; font-weight: bold">255</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">255</span><span style="color: #333333">,</span><span style="color: #6600EE; font-weight: bold">255</span>);}
<span style="color: #007700">&lt;/style&gt;</span>
<span style="color: #007700">&lt;/head&gt;</span>
<span style="color: #007700">&lt;body&gt;</span>
<span style="color: #007700">&lt;h1&gt;</span>Example of CSS<span style="color: #007700">&lt;/h1&gt;</span>
<span style="color: #007700">&lt;p&gt;</span>The output can be seen in the image at the end of the example code.<span style="color: #007700">&lt;/p&gt;</span>
<span style="color: #007700">&lt;/body&gt;</span>
<span style="color: #007700">&lt;/html&gt;</span>
            </pre></div>
        <h5>Output:</h5>
        <figure>
        <img src="../image/output.png" alt="output example" class="medium">
        <figcaption>Image created by Sidhanth taken by screenshot.</figcaption>
        </figure>
    </li>
    <li><h4>External CSS</h4>
        <p>You can use css externally by using the link element which tells the browser where to find the CSS file used to style the page. href specifies the path to the CSS file. 
            The type attribute specifies the type of document that the html document is being linked to and its value should always be text/css.
            rel specifies the relationship between the HTML page and the css file.</p></li>
    <!-- add the image and code-->
    <h3>Why use external style sheet?</h3>
    <p>There are certain benefits of using an external style sheet like:<br>
    <ol>
        <li>All of your web pages share the same css style sheet so you don't have to repeat the same css in different web pages. </li>
        <li>It helps your web site to load faster</li>
        <li>It is more efficient because if you want to make some changes to your css, you only have to make changes in one place, instead of making changes in different locations.</li>
    </ol></p>
    </article>
        <article class="block">
<h1>Layout</h1>
<h3>CSS Box Model</h3>
<p>When a browser renders a web page each element, for example a piece of text or an image, is drawn as a rectangular box.
    <br>
    At the center of the box is the content itself. This region is known as the Content Area. The size of the content 
    area can be automatically determined, or you can explicitly set the size of height and width.<br>
    Around the Content Area, is a region known as Padding Area. The size of
    the padding can be the same all around, or you can set 
    individually for the top, right, bottom and left paddings (with padding-top,
    padding-right, padding-bottom and padding-left).<br>
    Around the padding is the Border Area which creates a border around the element and its
    padding. You can set thickness, color and style of the border. <br>
    Lastly, there is the Margin Area. This creates clear space around the element, 
    padding, and border. Again you can individually set the top, right, bottom and left
    margins using margin-top, margin-right, margin-bottom and margin-left.
<figure>
    <img src="../image/box-model.png" alt="Picture of the css box model.">
    <figcaption>Image taken from freecodecamp.</figcaption>
</figure>
</p>
<h3>Traditional html layout.</h3>
<p> Before the advent of html5, web page developers used "div" elements to group
    together related elements on the page and they used class or id attributes
    to indicate the role of the "div" element in the structure of the page.</p>
<figure>
    <img src="../image/traditional.png" alt="picture of traditional html layout." class="medium">
    <figcaption>Image taken from HTML & CSS: Design and Build Websites, by Jon Duckett</figcaption>
</figure>
<!--insert image-->
<h3>New html5 layout</h3>
<p>The new html5 introduces new elements to replace the div elements as the div elements did not have any meaning to them.
    For example the "header" element is used to create headers while "nav" element is used to group the elements for navigation.</p>
<figure>
    <img src="../image/new.png" alt="picture of new html layout." class="medium">
    <figcaption>Image taken from HTML & CSS: Design and Build Websites, by Jon Duckett</figcaption>
</figure>
<!-- insert image -->

        </article>
</body>
</html> 

<?php
include('footer.php');
?>
</body>
</html>
