
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>CRUDAN - Corporate Registration</title>
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

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item" href="{{ route('corporate') }}">Corporate</a>
    <a class="item" href="{{ route('individual') }}">Individual</a>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item" href="{{ route('corporate') }}">Corporate</a>
  <a class="item" href="{{ route('individual') }}">Individual</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical center aligned segment">
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item" href="{{ route('corporate') }}">Corporate</a>
        <a class="item" href="{{ route('individual') }}">Individual</a>
      </div>
    </div>
  </div>

  <h3 class="ui center aligned icon header">
    <i class="circular users icon"></i>
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
    <form class="ui form" method="post" action="{{ route('corporate.post') }}">
      {{ csrf_field() }}
      <h4 class="ui dividing header">Corporate Membership Registration Form</h4>
      <div class="field">
        <label>Name of Church/Project</label>
        <div class="field">
          <div class="field">
            <input type="text" name="project_name" placeholder="Enter Name">
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
            <input type="text" name="phone_number" placeholder="Phone">
          </div>
          <div class="field">
            <label>Email Address</label>
            <input type="text" name="email_address" placeholder="Email Address">
          </div>
        </div>
      </div>

      <div class="field">
        <label>Website</label>
        <div class="field">
          <div class="field">
            <input type="url" name="website" placeholder="Enter url">
          </div>
        </div>
      </div>

      <div class="field">
        <label>Office Location (Street Address)</label>
        <div class="field">
          <div class="field">
            <textarea type="text" name="office_address" rows="3" placeholder="Address"></textarea>
          </div>
        </div>
      </div>


      <div class="field">
        <div class="two fields">
          <div class="field">
            <label>Contact Person</label>
            <input type="text" name="contact_person" placeholder="Phone">
          </div>
          <div class="field">
            <label>Year Founded</label>
            <input type="text" name="year_founded" placeholder="Email Address">
          </div>
        </div>
      </div>


      <div class="field">
        <label>Aims and Objective, Vision/Mission</label>
        <div class="field">
          <div class="field">
            <textarea type="text" name="vision_mission" rows="3" placeholder="Aims and Objective, Vision/Mission"></textarea>
          </div>
        </div>
      </div>

      <div class="field">
        <div class="two fields">
          <div class="field">
            <label>Activities</label>
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
        <label>Attach any relevant document for more information</label>
        <div class="field">
          <div class="twelve wide field">
            <input type="file" name="document" placeholder="Street Address">
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
  
      <!-- <button class="fluid positive ui button" type="submit" tabindex="0">Submit Form</button> -->
    </form>
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
