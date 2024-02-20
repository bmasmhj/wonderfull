<?php require 'autodelete.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  #site{
    display: none;
  }
</style>

<div id="noJS">Please enable JavaScript...</div>
<body id='site'>
<style>
  .wrap {
    display: flex;
    justify-content: space-around;
    align-items: center;
    box-sizing: border-box;
    height: 100vh;
    padding: 2rem;
    background-color: #eee;
    }

  .container {
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    padding: 1rem;
    background-color: #fff;
    width: 768px;
    height: 100%;
    border-radius: 0.25rem;
    box-shadow: 0rem 1rem 2rem -0.25rem rgba(0, 0, 0, 0.25);
  }
  .container__heading {
    padding: 1rem 0;
    border-bottom: 1px solid #ccc;
    text-align: center;
  }
  .container__heading > h2 {
    font-size: 1.75rem;
    line-height: 1.75rem;
    margin: 0;
  }
  .container__content {
    flex-grow: 1;
    /* overflow-y: scroll; */
  }
  .container__nav {
    border-top: 1px solid #ccc;
    text-align: right;
    padding: 2rem 0 1rem;
  }
  .container__nav > .button {
    background-color: #444499;
    box-shadow: 0rem 0.5rem 1rem -0.125rem rgba(0, 0, 0, 0.25);
    padding: 0.8rem 2rem;
    border-radius: 0.5rem;
    color: #fff;
    text-decoration: none;
    font-size: 0.9rem;
    transition: transform 0.25s, box-shadow 0.25s;
  }
  .container__nav > .button:hover {
    box-shadow: 0rem 0rem 1rem -0.125rem rgba(0, 0, 0, 0.25);
    transform: translateY(-0.5rem);
  }

  .container__nav > small {
    color: #777;
    margin-right: 1rem;
  }
  img{
    width: 50px!important;
    height : 50px
  }

  label , p{
    padding : 5px;
    font-size : 20px;
    color : #7b7a7a;
  }
  .checkbox{
    padding : 5px;
  }
  form{
    margin-top : 20px;
  }
  .d-none{
    display: none!important;
  }
</style>
  <div id='timer'>
  </div>
  <div id='here' class='d-none'> </div>
  <main id='termsandcondition' class="wrap">
    <section class="container">
      <div class="container__heading">
        <h2>Terms & Conditions</h2>
      </div>
      <div class="container__content">
        <p>By using our website, you agree to the Terms of Use. We may change or update these terms as lead of time.
          We reserve the right to change or update information at any time without giving prior notice.
        </p>
        <form action="#" id='accepttermsandshow'>
          <div class="checkbox"> 
            <input type="checkbox"  onchange="getLocation()" name="accept" required id=""><label>To view this page you must allow for Location information for security purpose</label><br>
          </div>
          <div class="checkbox">
            <input type="checkbox" name="accept" required id=""><label>This website will auto delete itself after 20 second. </label><br>
          </div>
          <div class="checkbox">
            <input type="checkbox" name="accept" required id=""><label>This website is not made to threat or attack on any company or personal. </label><br>
          </div>
          <div class="checkbox">
            <input type="checkbox" name="accept" required id=""><label>This website shows how simple mistake can lead you big disaster. </label><br>
          </div>
          <div class="checkbox"> 
              <input type="checkbox" name="accept" required id=""><label>This website contains very important credential so please donot share with any other</label><br>
          </div>
          <div class="checkbox"> 
            <input type="checkbox" name="accept" required id=""><label>The person who opened this website shall not share information to others</label><br>
          </div>
        
          <div id="mapouter">

            </div>
      </div>
      <div class="container__nav">
        <small>By clicking 'Accept' you are agreeing to our terms and conditions.</small>
        <input type='submit' id='accept' class="button  " value='Accept' >
      </div>
      </form>
    </section>
  </main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
      $(document).ready(function() {
          $("#noJS").hide();
          $("#site").show();
      });
    </script>
<script src="jquery.min.js"></script>
<script src="location.js"></script>
<script src="console.js"></script>

  </body>
</html>
