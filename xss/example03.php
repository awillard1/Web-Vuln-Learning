<h1>Think about what url format creates a XSS payload, how to add event handlers to execute XSS and how to add a HTML element.</h1>

<a href="<?php echo $_GET["xss"];?>">There are a few payloads that can inject XSS here.</a>
