<!DOCTYPE html>
<html>
<head>

  <title>OneButton CDN</title>

  <!-- Bootstrap CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome -->
  <link href="font-awesome.min.css" rel="stylesheet">
  <!-- Source Sans via Google Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <!-- jQuery hosted jQuery to get us installed, with a local fallback -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>  
  <script>
    if (!window.jQuery) {
      document.write('<script src="jquery-latest.min.js" type="text\/javascript"><\/script>');
    }
  </script>
  <!-- Boostrap JavaScript -->
  <script src="bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no, minimal-ui" />

</head>
<body>

  <!-- HTML Section -->  
  <div id="page">

    <h1>OneButton CDN</h1>

    <div id="updatealert" class="alert alert-success fade in" data-dismiss="alert">Update script manually initiated&hellip;<button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
    <div id="installedalert" class="alert alert-info fade in" data-dismiss="alert">OneButton CDN deployed&hellip;
</div>

      <section id="firstrun">
        <p>Welcome to the OneButton CDN. To get started, press the 'Deploy' button below.</p>
        <form class="actions" action="install/exec-install.php" name="updatebutton" method="post">
          <button type="submit" class="btn">Deploy</button>
        </form>
      </section>

      <section id="cdninfo">

        <h2>Bootstrap</h2>    
        <section id="bootstrap">
          <h3>Bootstrap CSS</h3>
          <pre>bootstrap.css</pre>
          <pre>bootstrap.min.css</pre>
        
          <h3>Bootstrap Theme CSS</h3>
          <pre>bootstrap-theme.css</pre>
          <pre>bootstrap-theme.min.css</pre>
  
          <h3>Bootstrap JS</h3>
          <pre>bootstrap.js</pre>
          <pre>bootstrap.min.js</pre>
        </section>
    
        <h2>FontAwesome</h2>    
        <section id="fontawesome">
          <h3>Font Awesome CSS</h3>
          <pre>font-awesome.css</pre>
          <pre>font-awesome.min.css</pre>

          <h3>Font Awesome IE7 CSS</h3>
          <pre>font-awesome-ie7.css</pre>
          <pre>font-awesome-ie7.min.css</pre>

          <h3>Font Awesome Fonts CSS</h3>
          <pre>files/fontawesome/font/fontawesome-webfont.eot</pre>
          <pre>files/fontawesome/font/fontawesome-webfont.ttf</pre>
          <pre>files/fontawesome/font/fontawesome-webfont.svg</pre>
          <pre>files/fontawesome/font/fontawesome-webfont.woff</pre>
          <pre>files/fontawesome/font/FontAwesome.otf</pre>

        </section>

        <h2>jQuery</h2>    
        <section id="jquery">
          <h3>jQuery Latest</h3>
          <pre>jquery-latest.js</pre>
          <pre>jquery-latest.min.js</pre>
        </section>

        <form class="actions" action="update/exec-update.php" name="updatebutton" method="post">
          <button type="submit" class="btn btn-default">Update CDN</button>
        </form>
      </section>

      <p class="credit">
        Created by <a href="http://twitter.com/innovati" title="@innovati on Twitter">@innovati</a> &middot; hosted on <a href="http://github.com/tomhodgins/onebuttoncdn" title="OneButton CDN on GitHub">Github</a>
      </p>

  </div>

  <!-- JavaScript Section -->
  <script type="text/javascript">
    $(document).ready(function(){

      // This checks if this is the first run
      $.ajax({
        url:'install/firstrun.txt',
        type:'HEAD',
        error: function(){
        },
        success: function(){
          $('#cdninfo').css('display','none');
          $('#firstrun').css('display','block')
        }
      });

      // This writes the path to the CDN installation so the links update themselves      
      var cdnurl = [location.protocol, '//', location.host, location.pathname].join('');
      $('pre').prepend(cdnurl);
      
      // This checks the URL for the query string '?updated' and adds an alert
      function getURLParameter(name) {
        return decodeURI(
          (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
        );
      };
      if(getURLParameter('updated')==1){
        $("#updatealert").css('display', 'block');
      };
      if(getURLParameter('installed')==1){
        $("#installedalert").css('display', 'block');
      };

    });
  </script>

  <!-- CSS Section -->
  <style>

    * {
      font-family: 'Source Sans Pro', sans-serif;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      cursor: default;
      outline:none;
    }

    body {
      background: #eaeaea;
      padding: 50px 0;
    }

    #page {
      margin: 0 auto;
      padding: 30px 30px 20px 30px;
      width: 100%;
      max-width: 700px;
      background: #fff;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-shadow: rgba(0,0,0,.05) 0 15px 30px;
    }

    #page h1 {
      margin: 10px 0 20px;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 200;
      font-size: 34pt;
      line-height: 44pt;
      text-align: center;
      color: #999;
    }

    #page h2 {
      margin: 30px 0 0 0;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 400;
      font-size: 24pt;
      line-height: 34pt;
      text-align: center;
      color: #333;
    }

    #page h3 {
      margin: 15px 0 5px 0;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 200;
      font-size: 14pt;
      line-height: 28pt;
      color: #666;
    }

    #page pre {
      font-size: 8pt;
      -webkit-touch-callout: text;
      -webkit-user-select: text;
      -khtml-user-select: text;
      -moz-user-select: text;
      -ms-user-select: text;
      user-select: text;
      cursor: text;
    }

    #bootstrap ::selection {
      background: #00ff66;
      color: #fff;
      text-shadow: #008833 0 1px 2px;
    }

    #fontawesome ::selection {
      background: #ff0066;
      color: #fff;
      text-shadow: #880033 0 1px 2px;
    }

    #jquery ::selection {
      background: #0066ff;
      color: #fff;
      text-shadow: #003388 0 1px 2px;
    }

    p.credit {
      margin: 0;
      text-align: center;
      color: #999;
      font-size: 8pt;
    }

    p.credit a {
      color: #777;
    }

    p.a:hover {
      color: #555;
    }

    form.actions {
      margin: 0;
      text-align: center;
    }

    .actions button {
      margin: 15px 0 20px 0;
      float: none;
    }

    #updatealert {
      display: none;
    }

    #installedalert {
      display: none;
    }

    #cdninfo {
      display: block;
    }

    #firstrun {
      display: none;
      text-align: center;
      margin-bottom: 30px;
      color: #666;
    }

    #firstrun .btn {
      display: inline-block;
      padding: 10px 16px;
      margin-bottom: 0;
      font-size: 18px;
      font-weight: normal;
      line-height: 1.33;
      text-align: center;
      white-spaaace: nowrap;
      vertical-align: middle;
      cursor: pointer;
      border: 1px solid transparent;
      border-radius: 6px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -o-user-select: none;
      user-select: none;
      color: #fff;
      background-color: #5cb85c;
      border-color: #4cae4c;
    }

    #firstrun .btn:hover {
      color: #fff;
      background-color: #47a447;
      border-color: #398439;
    }

    /* Responsive Styles Affecting Browsers 0-480 Pixels Wide (smartphones) */
    @media (min-width:0px) and (max-width:480px){

      body {
        padding: 0 !important;
      }

      #page h1 {
        font-size: 24pt !important;
      }

    }

  </style>

</body>
</html>
