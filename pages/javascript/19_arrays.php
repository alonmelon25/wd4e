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
  <h1>Arrays</h1>
  <p>Finally!! Now is when I start to explain some of the concepts I said you had to wait for. Hopefully by now you are comfortable with the code</p>
  <br>
<pre class="line-numbers"><code class="language-css">document.getElementById('idName');</code></pre>
  <br>
  <p>This code will cause the API to search the DOM until it finds a node with the id of 'idName'). The key is that it is returning a single Node. But what about these other functions?</p>
  <br>
<pre class="line-numbers"><code class="language-css">document.getElementsByTagName('p');
document.getElementsByClassName('thumbnail');</code></pre>
  <br>
  <p>These commands may return zero, one or more Nodes. So now we need to find a way to handle dealing with collections of data, rather than just one thing at a time. This is where Arrays come in. Let's get started.</p>
</body>
</html>
