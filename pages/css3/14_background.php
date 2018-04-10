<!DOCTYPE html>

<html>
<head>
<?php require_once ("../head.php"); ?>
<style>
li { padding: 5px; }
</style>
<link href="../../static/prism.css" rel="stylesheet"/>
</head>
<body style="margin-left:5%; margin-bottom: 60px; margin-right: 5%; font-family: sans-serif;">
  <div class = "visible-print-block">
  <b style = "float:right">www.wd4e.com</b>
  </div>
  <h1>Background Images and Opacity</h1>
  <p>Earlier I briefly covered that the background property can take more than just a color. Using background-images for your elements rather than images is a great way to style your site, without adding the bulk of more tags (and the necessary alt text). That said, using background images can be challenging at first for two reasons: folder structure and variations in image size.</p>
  <br>
  <h3>Folder Structure</h3>
  <p>As you code, it is recommended that your .html files be in one folder and your css files and image files be in subfolders, something like this:</p>
  <p><a href "../../images/css3/background.png"></a></p>
  <p>But if your style sheet is trying to link to a picture called "ocean.jpg" in your images folder, how can you link them together?</p>
  <p>Neither of these first two options will work since there is no file called ocean in the css folder, and the images folder isn't in there either.</p>
  <pre class="line-numbers"><code class="language-css">background-image: url('ocean.jpg');</code></pre>
  <br>
  <pre class="line-numbers"><code class="language-css">background-image: url('images/ocean.jpg');</code></pre>
  <br>
  <p>Instead, your code needs to tell the browser to "go up" one folder and start looking from there. The "../" part of the code will do just that:</p>
  <pre class="line-numbers"><code class="language-css">background-image: url('../images/ocean.jpg');</code></pre>
  <br>
  <h3>Variations in Image Size</h3>
  <p>Since it is rarely the case the your image is just the perfect size to fit in an element perfectly, there are additional background properties you can play with to get your site looking just the way you want them. These include, background-repeat, background-position, and background-size (to name a few). You can use these properties to position your image.</p>
  <p>If this is something that you want to play with, I am going to direct you to another Shay Howe tutorial, since that way you can use the CodePen to actively change the options and see what happens. This is optional, but potentially very useful.</p>
  <p><a href="http://learn.shayhowe.com/html-css/setting-backgrounds-and-gradients/">http://learn.shayhowe.com/html-css/setting-backgrounds-and-gradients/</a></p>
  <br>
  <h3>Opacity</h3>
  <p>If you are using a background image and it is making it hard to read the text, you can alter the opacity of the image. The opacity is how transparent the image should appear. It is similar to the idea of using rgb() colors and rgba() colors. (255,0,0) is red. (255,0,0, .5) is a more transparent red.</p>
  <p>Here is a site you may find helpful. <a href="https://css-tricks.com/almanac/properties/o/opacity/">https://css-tricks.com/almanac/properties/o/opacity/</a></p>
</body>
</html>
