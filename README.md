# LunchedIn_PHP
A app developed to help coordinate lunch orders. Written in PHP for CodeLouisville class.

# Getting Started:
<ul>
<li>clone repo inside of your xaamp/htdocs/ directory</li>
<li>import /LunchedIn/db/lunchedin.sql to your myPHPadmin</li>
<li>update the credentials in the PDO found inside /inc/connection.php file</li>
</ul>

# Using LunchedIn
Lunched[in] is in its infant-level stages. It is used to organize lunch orders when trying to coordinate between a busy office. Clicking "New Order" will generate a unique order number for you to use, and you can send that order number out to your co-workers/friends while you enter your own order. From there you can either look up an order, or add to an order via the front page. Simply enter your 6 digit Order Number in the field provided, and select either "Look Up Order" or "Add to Order" to submit your own.

# Future Goals
<ol>
<li>Adding a complex menu system that makes ordering easy. Instead of basic "text" entry, there will be menu items populated for you to choose from based on the restaurant selected for your order.</li>
<li>Generating an Email to the originator of the order for ease of use when a new order is added</li>
<li>Sessioning - join an office group - get emails whenever orderse are started for your office so you never miss out on lunch</li>
