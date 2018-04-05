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
  <h1>Browsers</h1>
  <p>Things with browsers are always changing, updating etc. It makes recording videos a dangerous decision, since almost anything I say may be outdated, or will be outdated soon. For instance, in the video you just watched, I used the prefixes for border-radius, but I am fairly certain that it is supported by most of the browsers now. I even went to <a href "https://caniuse.com">https://caniuse.com</a> to check it out.</p>
  <p><a href "../../images/css3/browser1.png"></a></p>
  <p>But when I checked on column-count it showed that the prefixes are still needed.</p>
  <p><a href "../../images/css3/browser2.png"></a></p>
  <p>And I didn't even talk about prefixes for the new Microsoft browser, Edge. Right now, if a property is standard there will be no need for any prefixes in Edge. If you are going to use experimental features, use the -ms prefix.</p>
  <h3>Using the prefixes</h3>
  <p>Don't forget, you never know which version of a browser someone may be using. Hopefully you want to share your work with as many people as possible. So plan on your page working on a few iterations back of any browser.</p>
</body>
</html>
