<?php 
require_once 'auth_check.php';
?>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="complain.css" />
  </head>
  <body>
 
    <div class="main">
      <h1 onclick="ScrollToBottom()">What's Your Complain?</h1>

      
      <br /><br /><br />
      <form id= "form" action="complainData.php" method="post" enctype= "multipart/form-data" >
        <label>First name</label><br />
        <input
          type="text"
          name="firstName"
          placeholder="Your First name"
          pattern="[a-zA-Z]+"
          title="Please Enter Alphabets Only"
          autofocus
          required
        /><br />
        <p style="margin-left: 500px;" id="fnameErr"></p>

        <label>Last name</label><br />
        <input
          type="text"
          name="lastName"
          placeholder="Your Last name"
          pattern="[A-Za-z]+"
          title="Please Enter Alphabets Only"
          required
        /><br />



        <label>Locality</label><br />
        <input
          type="text"
          name="locality"
          placeholder="Your locality here"
          pattern="[A-Za-z]+"
          title="Please Enter Alphabets Only"
          required
        /><br />


        <label>Subject</label><br />
        <input
          type="text"
          name="subject"
          placeholder="Subject of your Complain"
          pattern="[A-Za-z]+"
          title="Please Enter Alphabets Only"
          required
        /><br />

        <label>Message</label><br />
        <textarea
          rows="1"
          cols="50"
          wrap="physical"
          name="message"
          placeholder="Type your complain here."
          id="messages"
          pattern="[A-Za-z0-9]+"
          title="Please Enter Your Message without any special characters"

          required
        ></textarea>
        <br>
        <p style="margin-left: 500px;" id="msgErr"></p>

        <label>Upload Photo (If any):</label>
        <input type="file" name="uploadfile" style="border: none"/>

        <input type="submit" value="Send"/>
      </form>
    </div>
  </body>
  <script>
    function ScrollToBottom(){

      window.scrollTo(0, document.body.scrollHeight);
    }
  </script>
  </html>

