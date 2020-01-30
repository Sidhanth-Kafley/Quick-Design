<?php

include('top.php');

?>
<html lang="en">
    <head>
        <title>Playing with PHP</title>
        <meta charset="utf-8">
        <meta name="author" content="Wenbo HE">
        <meta name="description" content="final project" >

  <link rel="stylesheet"
        href="custom.css"
      type="text/css"
      media="screen">   
</head>

    <!-- ################ body section ######################### -->
   
    <body id="html-page" class="main"> 
       
        <a href="#nav"><button onclick="topFunction()" id="myBtn" title="Go to top">Top</button></a>
        <article class="block4">
            <a href="#Intro"><button>Basic html tags.</button></a>
            <a href="#IMAGE"><button>Adding Images.</button></a>
            <a href="#TABLE"><button>Adding Tables.</button></a>
            <a href="#FORM"><button>Creating Forms.</button></a>
        </article> 
        
        <article class="block3" id="Intro">
            <h3>Basic html tags.</h3>
    <p>The picture below is one part of my code for this webiste. You may have questions about what it is.<br> Don't worry. I will explain for you.</p>

        <figure class='img-right  roundedCornersSmall small'>
            <img class="roundedCornersSmall" src="../image/four.jpg" alt="picture">
            <figcaption>Image created by Wenbo and taken by screenshot.</figcaption>
            </figure>
 
            <p>We can see many details from this figure.</p>
            <p>For example</p>
           <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"> <span style="color: #007700">&lt;head&gt;</span>
        <span style="color: #007700">&lt;title&gt;</span>Playing with PHP<span style="color: #007700">&lt;/title&gt;</span>
        <span style="color: #007700">&lt;meta</span> <span style="color: #0000CC">charset=</span><span style="background-color: #fff0f0">&quot;utf-8&quot;</span><span style="color: #007700">&gt;</span>
        <span style="color: #007700">&lt;meta</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;author&quot;</span> <span style="color: #0000CC">content=</span><span style="background-color: #fff0f0">&quot;Wenbo HE&quot;</span><span style="color: #007700">&gt;</span>
        <span style="color: #007700">&lt;meta</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;description&quot;</span> <span style="color: #0000CC">content=</span><span style="background-color: #fff0f0">&quot;final project&quot;</span> <span style="color: #007700">&gt;</span>

  <span style="color: #007700">&lt;link</span> <span style="color: #0000CC">rel=</span><span style="background-color: #fff0f0">&quot;stylesheet&quot;</span>
      <span style="color: #0000CC">href=</span><span style="background-color: #fff0f0">&quot;css/custom.css&quot;</span>
      <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text/css&quot;</span>
      <span style="color: #0000CC">media=</span><span style="background-color: #fff0f0">&quot;screen&quot;</span><span style="color: #007700">&gt;</span>   
<span style="color: #007700">&lt;/head&gt;</span>
</pre></div>


           <p>1. This code will not show on the website page, but it likes your webiste's backgournd. The purpose of this code is to identify who is the author and waht is the title of this website.Also, it links one important file named "css", which we will talk about after.</p>
            
            <p>Meanwhile, you may notice there are some codes are starting with "h", which is similar with the "heading" code.</p>
            
            <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;h1&gt;&lt;/h1&gt;</span>
<span style="color: #007700">&lt;h2&gt;&lt;/h2&gt;</span>
</pre></div>
            
            <p>2. The content inside of this code shows us the headings of your website. HTML can have 6 headings, form "h1" to "h6". "h1" is the main heading, and "h2" is the subheading. If you want to have more headings which are under the subheading, you can use "h3","h4","h5" and "h6" to get your purpose.</p>

<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;p&gt;&lt;/p&gt;</span>
</pre></div>
<p>3. "p" is the general code for us to type the sentence into the website. Right now, I am using the "p" code to type this sentence into my website.</p>

<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;link&gt;</span>
</pre></div>
<p>4. As the name shows, the "link" code is used for link this page with another page in the php.</p>
        
<p>Furthermore, from the figure I show you above, inside of the "link" box, there are four green code, which are "rel","href","type" and "media". Normally, we do not use "rel", "type" and "media" in HTML, but "href" is a code we will use frequently, and I will explain this below.</p>

<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;rel</span><span style="color: #FF0000; background-color: #FFAAAA">=</span><span style="color: #007700">&gt;</span>
<span style="color: #007700">&lt;href</span><span style="color: #FF0000; background-color: #FFAAAA">=</span><span style="color: #007700">&gt;</span>
<span style="color: #007700">&lt;type</span><span style="color: #FF0000; background-color: #FFAAAA">=</span><span style="color: #007700">&gt;</span>
<span style="color: #007700">&lt;media</span><span style="color: #FF0000; background-color: #FFAAAA">=</span><span style="color: #007700">&gt;</span>
</pre></div>

<ol>
    <li>Usually, "href" is used to connect links with websites. For example, if you write an essay on teh website, and you need to put you references on. At this time, we need to use the "href" code.</li>
    <li>Also, "a" code is what we need to make this link works.Look at the code below, the webiste link shoud be typed in the "" of href, it will make th user go to the website whe nthey click the link. Also, the palce, where the word "Google"is, is used for you to type the link's name whatever you want it be.</li>
</ol>

<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;a</span> <span style="color: #0000CC">href=</span><span style="background-color: #fff0f0">&quot;https://www.google.com.hk/&quot;</span> <span style="color: #0000CC">target=</span><span style="background-color: #fff0f0">&quot;_blank&quot;</span><span style="color: #007700">&gt;</span>Google<span style="color: #007700">&lt;/a&gt;&lt;/p&gt;</span>
</pre></div>
<p>Here is the link looks like in webiste.</p><p><a href="https://www.google.com.hk/" target="_blank">Google</a></p>

<hr/>
<p><b>If you want website becomes more order and beautiful,there are few code which you should know.</b></p>
<ol>
    <li>List</li>
    <li>Text </li>
</ol>
<p>For list, you need to understand 5 codes, "ul","ol","dd","dt" and"dl".</p>
<p>1."ul"</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;ul&gt;&lt;/ul</span>
<span style="color: #007700">&gt;</span>
</pre></div>
<p>"ul" can create an black point before your lists.Also, if you put a second "ul" code inside the first "ul" code. It will create a circle for your second list, like what I show below.</p>
        <figure class='img-right roundedCornersSmall small'>
            <img class="roundedCornersSmall" src="../image/code.jpg" alt="picture">
            <figcaption>Image created by Wenbo and taken by screenshot.</figcaption>
            </figure>

        <figure class='img-right roundedCornersSmall small'>
            <img class="roundedCornersSmall" src="../image/output1.jpg" alt="picture">
            <figcaption>Image created by Wenbo and taken by screenshot.</figcaption>
            </figure>
<p>2."ol"</p>
<p>Similar with "ul", but "ol" will create number instead of points or circles</p>
        <figure class='img-right  roundedCornersSmall small'>
            <img class="roundedCornersSmall" src="../image/soutput.png" alt="picture">
            <figcaption>Image created by Wenbo and taken by screenshot.</figcaption>
            </figure>

        <figure class='img-right roundedCornersSmall small'>
            <img class="roundedCornersSmall" src="../image/two.jpg" alt="picture">
            <figcaption>Image created by Wenbo and taken by screenshot.</figcaption>
            </figure>
<p>3."dl","dt" and "dd"</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;dl&gt;</span>
    <span style="color: #007700">&lt;dt&gt;</span>Definiton 1<span style="color: #007700">&lt;/dt&gt;</span>
    <span style="color: #007700">&lt;dd&gt;</span>Content for definition 1<span style="color: #007700">&lt;/dd&gt;</span>
    <span style="color: #007700">&lt;dt&gt;</span>Definiton 2<span style="color: #007700">&lt;/dt&gt;</span>
    <span style="color: #007700">&lt;dd&gt;</span>Content for definition 2<span style="color: #007700">&lt;/dd&gt;</span>
<span style="color: #007700">&lt;/dl&gt;</span>
</pre></div>
<p>"dl" is used for creating the definition list. "dt" is used for creating the title. "dd" is used to contain the definition.</p>
        </article>
        <article class="block3" id="IMAGE">
<h3>Images</h3>
<p>As you see before, I used some images to introduce some codes in HTML, and you may be carious how to upload images in your own webiste.</p>
<p>Your image may look like this.</p>
<figure>
<img src="../image/three.jpg" alt="picture" title="Figure1">
    <figcaption>Image taken by Wenbo.</figcaption>
</figure>
<p>Or like this.</p>
<img alt="Series of animals" src="../image/6 (1).gif" title="Figure2"><!-- image taken from monkey smile-->

<p>Generaly, you should follow the code below to create images on your webstie.</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;img</span> <span style="color: #0000CC">src=</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #0000CC">alt=</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #0000CC">title=</span><span style="background-color: #fff0f0">&quot; &quot;</span> <span style="color: #007700">/&gt;</span>
</pre></div>
<p>"src" helps php where can find the image is. "alt" provides a description for the image. "Title" can provibe addtional information for you image.</p>
<p>For example</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;img</span> <span style="color: #0000CC">class=</span><span style="background-color: #fff0f0">&quot;roundedCornersSmall&quot;</span> <span style="color: #0000CC">src=</span><span style="background-color: #fff0f0">&quot;final project/5.jpg&quot;</span> <span style="color: #0000CC">alt=</span><span style="background-color: #fff0f0">&quot;picture&quot;</span> <span style="color: #0000CC">title=</span><span style="background-color: #fff0f0">&quot;Figure1&quot;</span><span style="color: #007700">&gt;</span>

<span style="color: #007700">&lt;img</span> <span style="color: #0000CC">alt=</span><span style="background-color: #fff0f0">&quot;Series of animals&quot;</span> <span style="color: #0000CC">src=</span><span style="background-color: #fff0f0">&quot;final project/6.gif&quot;</span> <span style="color: #0000CC">title=</span><span style="background-color: #fff0f0">&quot;Figure2&quot;</span><span style="color: #007700">&gt;</span>
</pre></div>
<P>The way I show you two figures above is by these two codes.</P>
<p>Also, except the main codes, there are many other codes can help you make your images become more order and beautiful.</p>
<p>"height", "width", and "aligning" can help you do that. "height" and "width" can change your image size, and "aligning" can make other parts of a page flow around the image by left or right.</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;img</span> <span style="color: #0000CC">src=</span><span style="background-color: #fff0f0">&quot;images/bird.gif&quot;</span> <span style="color: #0000CC">alt=</span><span style="background-color: #fff0f0">&quot;Bird&quot;</span> <span style="color: #0000CC">width=</span><span style="background-color: #fff0f0">&quot;100&quot;</span> <span style="color: #0000CC">height=</span><span style="background-color: #fff0f0">&quot;100&quot;</span> <span style="color: #0000CC">align=</span><span style="background-color: #fff0f0">&quot;left&quot;</span><span style="color: #007700">/&gt;</span>
</pre></div>
<p>This is what a complete image code should look like.</p>
<p>There are three types of imgaes --- jpg, png, and gif. Remember, when you type you link, do not type wrong image type. Because it will make your website cannot show this image!</p>
        </article>
        <article class="block3" id="TABLE">
<h3>Tables</h3>
<p>In many websites,they will show you statistic about economy, population and many other things. Now, I want to teach you how to create a beautiful table by you own.</p>
<p>The smaple below is what these three codes work.</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;table&gt;&lt;/table&gt;</span>
<span style="color: #007700">&lt;tr&gt;&lt;/tr&gt;</span>
<span style="color: #007700">&lt;td&gt;&lt;/td&gt;</span>
</pre></div>
<p>"table" is used for creating a table. You indicate the start of each row using the opening "tr" tag. Each row starts with using the opening "tr" tag.</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;table&gt;</span>
    <span style="color: #007700">&lt;tr&gt;</span>
        <span style="color: #007700">&lt;td&gt;</span>11<span style="color: #007700">&lt;/td&gt;</span>
        <span style="color: #007700">&lt;td&gt;</span>12<span style="color: #007700">&lt;/td&gt;</span>
    <span style="color: #007700">&lt;/tr&gt;</span>
    <span style="color: #007700">&lt;tr&gt;</span>
        <span style="color: #007700">&lt;td&gt;</span>21<span style="color: #007700">&lt;/td&gt;</span>
        <span style="color: #007700">&lt;td&gt;</span>22<span style="color: #007700">&lt;/td&gt;</span>
    <span style="color: #007700">&lt;/tr&gt;</span>
<span style="color: #007700">&lt;/table&gt;</span>
</pre></div>

<table>
    <tr>
        <td>11</td>
        <td>12</td>
    </tr>
    <tr>
        <td>21</td>
        <td>22</td>
    </tr>
</table>    
<ul>"thead","tbody", and "tfoot",these three elements that help distinguish between the main content of the table and the frst and last rows.
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;thead&gt;</span>
</pre></div>The headings of the table should sit inside the "thead" element.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;tbody&gt;</span>
</pre></div>The body should sit inside the "tbody" element.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;tfoot&gt;</span>
</pre></div>The footer belongs inside the "tfoot" element.</li>
</ul>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;table&gt;</span>
    <span style="color: #007700">&lt;thead&gt;</span>
        <span style="color: #007700">&lt;tr&gt;</span>
            <span style="color: #007700">&lt;th&gt;</span>date<span style="color: #007700">&lt;/th&gt;</span>
            <span style="color: #007700">&lt;th&gt;</span>data 1<span style="color: #007700">&lt;/th&gt;</span>
            <span style="color: #007700">&lt;th&gt;</span>data 2<span style="color: #007700">&lt;/th&gt;</span>
        <span style="color: #007700">&lt;/tr&gt;</span>
    <span style="color: #007700">&lt;/thead&gt;</span>
    <span style="color: #007700">&lt;tbody&gt;</span>
        <span style="color: #007700">&lt;tr&gt;</span>
            <span style="color: #007700">&lt;th&gt;</span>Jan 1<span style="color: #007700">&lt;/th&gt;</span>
            <span style="color: #007700">&lt;td&gt;</span>1<span style="color: #007700">&lt;/td&gt;</span>
            <span style="color: #007700">&lt;td&gt;</span>2<span style="color: #007700">&lt;/td&gt;</span>
        <span style="color: #007700">&lt;/tr&gt;</span>
    <span style="color: #007700">&lt;/tbody&gt;</span>
    <span style="color: #007700">&lt;tbody&gt;</span>
        <span style="color: #007700">&lt;tr&gt;</span>
            <span style="color: #007700">&lt;th&gt;</span>Feb 2<span style="color: #007700">&lt;/th&gt;</span>
            <span style="color: #007700">&lt;td&gt;</span>1<span style="color: #007700">&lt;/td&gt;</span>
            <span style="color: #007700">&lt;td&gt;</span>2<span style="color: #007700">&lt;/td&gt;</span>
        <span style="color: #007700">&lt;/tr&gt;</span>
    <span style="color: #007700">&lt;/tbody&gt;</span>
    <span style="color: #007700">&lt;tfoot&gt;</span>
        <span style="color: #007700">&lt;td&gt;</span>Total<span style="color: #007700">&lt;/td&gt;</span>
        <span style="color: #007700">&lt;td&gt;</span>3<span style="color: #007700">&lt;/td&gt;</span>
        <span style="color: #007700">&lt;td&gt;</span>3<span style="color: #007700">&lt;/td&gt;</span>
    <span style="color: #007700">&lt;/tfoot&gt;</span>
<span style="color: #007700">&lt;/table&gt;</span>
</pre></div>

<table>
    <thead>
        <tr>
            <th>date</th>
            <th>data 1</th>
            <th>data 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Jan 1</th>
            <td>1</td>
            <td>2</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <th>Feb 2</th>
            <td>1</td>
            <td>2</td>
        </tr>
    </tbody>
    <tfoot>
        <td>Total</td>
        <td>3</td>
        <td>3</td>
    </tfoot>
</table>
        </article>
        <article class="block3" id="FORM">
<h3>Forms</h3>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;form&gt;&lt;/form&gt;</span>
</pre></div>
<p>Form controls live inside a "form" element. This element should always carry the action attribute and will usually have a method and id attribute too.</p>
<p><b>Input</b></p>
<P>"Input" is used to create several different form controls. The value of the type attribute determines what kind of input they will be creating.</P>
<p>Username: 
    <input type="text" name="username" size="15" maxlength="30" /> 
</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;p&gt;</span>Username: 
    <span style="color: #007700">&lt;input</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;username&quot;</span> <span style="color: #0000CC">size=</span><span style="background-color: #fff0f0">&quot;15&quot;</span> <span style="color: #0000CC">maxlength=</span><span style="background-color: #fff0f0">&quot;30&quot;</span> <span style="color: #007700">/&gt;</span> 
<span style="color: #007700">&lt;/p&gt;</span>
</pre></div>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">name
</pre></div>
<ol><li>As what you see, "name" is the name for the input.</li></ol>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">maxlength
</pre></div>
<ol><li>"maxlength" limits the maximum words you can type in.</li></ol>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">size
</pre></div>
<ol><li>The size attribute should not be used on new forms. It was used in older forms to indicate the width of the text input</li></ol>
<p>Furthermore, there is a very important code for input, that is type="".</p>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;text&quot;
</pre></div>
<p>Different codes you put inside of the Double quotes, will make the type of this input become different.</p>
<p>For exmaple</p>
<ul>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;text&quot;
</pre></div>The "input" element is used to create several different form controls. The value of the type attribute determines what kind of input they will be creating.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;password&quot;
</pre></div>When the type attribute has a value of password it creates a text box that acts just like a single-line text input, except the characters are blocked out. They are hidden in this way so that if someone is looking over the user's shoulder, they cannot see sensitive data such as passwords.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;radio&quot;
</pre></div>Radio buttons allow users to pick just one of a number of options.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;checkbox&quot;
</pre></div>Checkboxes allow users to select (and unselect) one or more options in answer to a question.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;file&quot;
</pre></div>This type of input creates a box that looks like a text input followed by a browse button. When the user clicks on the browse button, a window opens up that allows them to select a fle from their computer to be uploaded to the website.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;submit&quot;
</pre></div>The submit button is used to send a form to the server.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;image&quot;
</pre></div>If you want to use an image for the submit button, you can give the type attribute a value of image</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;hidden&quot;
</pre></div>"hidden" allows web page authors to add values to forms that users cannot see.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;date&quot;
</pre></div>"date" will create a date input in browsers that support the new HMTL5 input types.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;email&quot;
</pre></div>"email" allows you to type e-mail into browser.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;url&quot;
</pre></div>A URL input can be used when you are asking a user for a web page address. Browsers that support HTML5 validation will check that the user has provided information in the format of a URL.</li>
    <li><!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">type=&quot;url&quot;
</pre></div>This input can help to search spesific things in website.</li>
</ul>
<p>"textarea" is anothr element you should learn. Different with type="text","textarea" element is used to create a mutli-line text input.</p>
<textarea name="comments" cols="15" rows="2">Enter your comments</textarea>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;p&gt;</span>textarea<span style="color: #007700">&lt;/p&gt;</span>
<span style="color: #007700">&lt;textarea</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;comments&quot;</span> <span style="color: #0000CC">cols=</span><span style="background-color: #fff0f0">&quot;30&quot;</span> <span style="color: #0000CC">rows=</span><span style="background-color: #fff0f0">&quot;5&quot;</span><span style="color: #007700">&gt;</span>Enter your comments<span style="color: #007700">&lt;/textarea&gt;</span>&gt;
</pre></div>
<p>"select" and "option" codes make you can have more conditions to choose.</p>
<select name="devices">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid black;border-width:.1em .1em .1em .1em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;select</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;devices&quot;</span><span style="color: #007700">&gt;</span>
    <span style="color: #007700">&lt;option</span> <span style="color: #0000CC">value=</span><span style="background-color: #fff0f0">&quot;1&quot;</span><span style="color: #007700">&gt;</span>1<span style="color: #007700">&lt;/option&gt;</span>
    <span style="color: #007700">&lt;option</span> <span style="color: #0000CC">value=</span><span style="background-color: #fff0f0">&quot;2&quot;</span><span style="color: #007700">&gt;</span>2<span style="color: #007700">&lt;/option&gt;</span>
    <span style="color: #007700">&lt;option</span> <span style="color: #0000CC">value=</span><span style="background-color: #fff0f0">&quot;3&quot;</span><span style="color: #007700">&gt;</span>3<span style="color: #007700">&lt;/option&gt;</span>
<span style="color: #007700">&lt;/select&gt;</span>
</pre></div>
</article>


       
<?php

include('footer.php');
?>
    </body>
</html>
        