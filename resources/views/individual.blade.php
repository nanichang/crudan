
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>CRUDAN - Individual Registration</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

      $('.message .close')
        .on('click', function() {
          $(this)
            .closest('.message')
            .transition('fade')
          ;
        })
      ;

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="item" href="/">Home</a>
    <a class="item" href="{{ route('corporate') }}">Corporate</a>
    <a class="active item" href="{{ route('individual') }}">Individual</a>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="item" href="/">Home</a>
  <a class="item" href="{{ route('corporate') }}">Corporate</a>
  <a class="active item" href="{{ route('individual') }}">Individual</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical center aligned segment">
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="item" href="/">Home</a>
        <a class="item" href="{{ route('corporate') }}">Corporate</a>
        <a class="active item" href="{{ route('individual') }}">Individual</a>
      </div>
    </div>
  </div>

  <h3 class="ui center aligned icon header">
    <i class="circular user icon"></i>
    CHRISTIAN RURAL URBAN DEVELOPMENT ASSOCIATION OF NIGERIA (CRUDAN)
  </h3>

  
  @if(session()->has('message.level'))
    <div class="ui very padded text container">
      <div class="ui {{ session('message.level') }} message">
        <i class="close icon"></i>
        <div class="header">
          Your user registration was successful.
        </div>
        <ul class="list">
          <li>{!! session('message.content') !!}</li>
        </ul>
      </div>
    </div>
  @endif
  

  <div class="ui raised very padded text container segment">
    <form class="ui form" method="post" action="{{ route('individual.post') }}">
      {{ csrf_field() }}
      <h4 class="ui dividing header">Individual Membership Registration Form</h4>
      <div class="field">
        <label>Full Name</label>
        <div class="field">
          <div class="field">
            <input type="text" name="full_name" placeholder="Enter Name">
          </div>
        </div>
      </div>

      <div class="field">
        <label>Mailing Address</label>
        <div class="field">
          <div class="field">
            <textarea type="text" name="mailing_address" rows="3" placeholder="Address"></textarea>
          </div>
        </div>
      </div>

      <div class="field">
        <div class="two fields">
          <div class="field">
            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Phone">
          </div>
          <div class="field">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Email Address">
          </div>
        </div>
      </div>

      <div class="field">
        <label>Church/Affiliation</label>
        <div class="field">
          <div class="field">
            <input type="text" name="church" placeholder="Enter Church/Affiliation">
          </div>
        </div>
      </div>

      <div class="field">
        <label>Personal Wholistic Ministry Project (if any)</label>
        <div class="field">
          <div class="field">
            <textarea type="text" name="project" rows="3" placeholder="Personal project"></textarea>
          </div>
        </div>
      </div>


      <div class="field">
        <label>Areas of interest in development work</label>
        <div class="field">
          <div class="field">
            <textarea type="text" name="interest" rows="3" placeholder="Areas of interest"></textarea>
          </div>
        </div>
      </div>

      <div class="field">
        <div class="two fields">
          <div class="field">
            <label>Wholistic Ministry Activities Engaged in (if any)</label>
            <textarea type="text" name="activities" rows="3" placeholder="Activities"></textarea>
          </div>
          <div class="field">
            <label>Major Challenges</label>
            <textarea type="text" name="challenges" rows="3" placeholder="Major Challenges"></textarea>
          </div>
        </div>
      </div>

      <div class="field">
        <label>Expections from CRUDAN</label>
        <div class="field">
          <div class="field">
            <textarea type="text" name="expections" rows="3" placeholder="Expections"></textarea>
          </div>
        </div>
      </div>

  
      <div class="field">
        <div class="fields">
          <div class="eleven wide field">
            <button class="fluid positive ui button" type="submit" tabindex="0">Submit Form</button>
          </div>
          <div class="five wide field">
            <button class="fluid negative ui button" type="reset" tabindex="1">Cancel and go back</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui container text container" >
      Copyright &copy; 
        <?php 
          $startYear = 2018; 
          $currentYear = date('Y');
          echo $startYear . (($startYear != $currentYear) ? ' - ' . $currentYear : '');
      ?>, Allrights reserved!
    </div>
  </div>
</div>

</body>

</html>
