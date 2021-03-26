<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Login - Postogon</title>  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
  <!-- ... -->
</head>
<body>
<h1>Login</h1>
<p>Login with a username and pass</p>


<!-- allows us to define what type of method the information is going to be processed through using the method attribute, for example... POST method vs. GET method.
ex. method="post" vs method="get"
It also allows us to define where the information is being sent, it could be sent to the same page or another page using the 
attribute action
ex. action=</?php echo _SERVER['PHP_SELF']?/> << this sends the action to the same page
vs action="process.php"
-->
<form>
<input></input>
<!-- allows us to define if this button pertains to a submission using the attribute type -->
<button></button>
</form>
</body>
</html>