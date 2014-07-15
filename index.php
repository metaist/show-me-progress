<?php
  $CONFIG = json_decode(file_get_contents('config.json'), true);
  $MC = $CONFIG['mailchimp'];
?><!DOCTYPE html>
<html lang="en-US"  class="no-js"><head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Show Me Progress by Metaist</title>
<!--[if lt IE 9]><script src="lib/html5shiv-3.7.0/html5shiv.min.js"></script><![endif]-->
<link rel="stylesheet/less" href="app/index.less" />
<script>var less = { relativeUrls: true };</script>
<script src="lib/less-1.7.3/less-1.7.3.min.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', '<?php echo $CONFIG['google']['analytics'];?>', 'auto');
ga('send', 'pageview');
</script>
</head><body>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <header class="row">
        <div class="col-sm-6">
          <h1 class="logo">metaist</h1>
        </div>
        <div class="col-sm-6 text-right">
          <img src="media/show-me-progress.png" alt="Show Me Progress" />
        </div>
      </header>

      <div class="row">
        <div class="text-center col-sm-8 col-sm-offset-2">
          <big class="lead">
            Answer 3 simple questions every day
            to get your work done.
          </big>
        </div>
      </div>
      <br />

      <div class="row">
        <div class="col-sm-7 well">
          <h2>Are you too busy to get things done?</h2>
          <p>
            If you work for yourself, you are super-busy. There's a lot going
            on and it's difficult to focus on getting important things done.
            You also report to yourself, so it's hard to stay accountable.
          </p>
          <p>
            Some jobs require you to give a status meeting every day. I hate
            meetings, but I love <strong>5-minute stand-ups</strong>.
            I've seen first-hand how a tiny daily discussion can
            <strong>uncover roadblocks</strong> and help focus people on
            getting things done.
          </p>
          <p>
            That's why I'm happy to offer a FREE service that will email
            you every work day (Mon-Fri, 9AM Eastern) and ask:
          </p>
          <ol>
            <li>What did you do yesterday?</li>
            <li>What are you going to do today?</li>
            <li>What are obstacles to being done on-time?</li>
          </ol>
          <p>
            Simply respond and then do what you said you'd do.
            If it stops helping, unsubscribe any time.
          </p>
          <p class="text-right">
            &ndash; <em>The Metaist</em>
          </p>
        </div>

        <aside class="col-sm-5">
          <form id="signup" class="form" method="post" novalidate
                action="//metaist.us8.list-manage.com/subscribe/post?u=34315382b9ad1740cc0a00825&amp;id=<?php echo $MC['list']; ?>"
                data-ajax="./app/subscribe.php">

            <p class="lead text-center">
              Sign up below for a FREE daily email.
            </p>

            <input type="hidden" name="group[<?php echo $MC['group']; ?>][1]" value="1" />
            <input type="hidden" name="update_existing" value="1" />
            <input type="hidden" name="replace_interests" value="0" />
            <div class="no-robots" style="position: absolute; left: -5000px;">
              <input type="text" name="<?php echo $MC['nonce']; ?>" tabindex="-1" value="" />
            </div>

            <div class="form-group">
              <label for="FNAME" class="control-label">First Name</label>
              <input type="text" class="form-control" id="FNAME" name="FNAME" placeholder="First Name" />
            </div>

            <div class="form-group">
              <label for="LNAME" class="control-label">Last Name</label>
              <input type="text" class="form-control" id="LNAME" name="LNAME" placeholder="Last Name" />
            </div>

            <div class="form-group">
              <label for="EMAIL" class="control-label">Email</label>
              <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="Email" />
              <span class="help-block">no spam, unsubscribe anytime</span>
            </div>

            <div class="form-group">
              <input type="submit" value="Subscribe" name="subscribe"
                     class="btn btn-lg btn-primary"
                     data-loading-text="Sending..." />
            </div>

            <div id="result"></div>
          </form>
        </aside>
      </div>

      <footer>All content under MIT License. Site by Metaist.</footer>
    </div>
  </div>
</div>
<script src="lib/config.amd.js"></script>
<script data-main="app/index" src="lib/require-2.1.11/require.min.js"></script>
</body></html>
