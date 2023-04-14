<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<style>

</style>
</head>
<body>

<h2>Your very own mailing form</h2>
<p>Used for education purpose, don't commit crime</p>

<div class="container">
  <form action="sendingAction.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">From</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="from" placeholder="Your email..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">To</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="to" placeholder="Recevier's email..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">CC</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="cc" placeholder="CC:separate with comma(,)">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">BCC</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="bcc" placeholder="BCC:separate with comma(,)">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Subject</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="sub" placeholder="Subject..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="body">Body</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="body" placeholder="Write something in body of mail.." style="height:200px"></textarea>
      </div>
    </div>



    <div class="row">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
