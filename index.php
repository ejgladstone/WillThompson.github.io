<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>William F. Thompson</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="./javascript/hello_world.js"></script>
    <script type="text/javascript"
    src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
    <script type="text/x-mathjax-config">
      MathJax.Hub.Config(
        {
          tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]},
        }
        );
    </script>
  </head>

  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>William F. Thompson, PhD</h1>
        <p>"Insanity: Doing the same thing over and over again and expecting different results." - Albert Einstein</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>About me & Contact</h2>
          <p>
    I'm a recent Ph.D. graduate from the Institute of Applied Mathematics and the Department of Mathematics at the University of British Columbia. My primary research interests are stochastic dynamical systems and the associated modelling problems and techniques. Please read my <a href="./files/CV_wthompson.pdf">CV</a>, <a href="./files/research_statement_wthompson.pdf">Research Statement</a>, and <a href="./files/teaching_statement_wthompson.pdf">Teaching Statement</a> to learn more. <br><br>
    I am also a contributor to the <a href="http://wiki.ubc.ca/Science:Math_Education_Resources">UBC Math Educational Resources wiki</a> which offers solutions to past math exams as well as instructional content. This project has been incredibly rewarding for me, not to mention loads of fun!<br><br>
    You can contact me via email: <a href="mailto:wft@math.ubc.ca">wft@math.ubc.ca</a>.
          </p>
       </div>
        <div class="col-md-6">
          <h2>Publications & Preprints</h2>
          <p><ul>
    <li><b>W. F. Thompson</b>, R. Kuske, and A. Monahan. <a href="http://arxiv.org/abs/1410.1837v3">Stochastic averaging of systems with multiple time scales forced with &alpha;-stable noise</a>. (Preprint, Submitted to <i>SIAM Multi. Model. Simul.</i>)
    </li>
    <li> <b>W. F. Thompson</b>, A. Monahan, and D. Crommelin. <a href="http://journals.ametsoc.org/doi/abs/10.1175/JAS-D-13-0260.1">Parametric estimation of the stochastic dynamics of sea surface winds</a>. <i>AMS Jour. Atmos. Sci.</i>, 71(9), 3465-3483, Sep. 2014.
    </li>
    <li><b>W. F. Thompson</b>, R. Kuske, and Y.-X. Li. <a href="http://www.aimsciences.org/journals/displayArticlesnew.jsp?paperID=7267">Stochastic phase dynamics of noise driven synchronization of two conditional coherent oscillators</a>. <i>DCDS-A</i>, 32(8), 2971-2995, Aug. 2012.
    </li>
    <li> A. G. Fowler, <b>W. F. Thompson</b>, Z. Yan, A. M. Stephens, B. L. T. Plourde, and F. K. Wilhelm. <a href="http://www.nrcresearchpress.com/doi/abs/10.1139/p07-203?journalCode=cjp">Long-range coupling and scalable architecture for superconducting flux qubits</a>. <i>Can. Jour. of Phys.</i>, 86(4), 533-540, 2008.
    </li>
    </ul></p>
        </div>
        <div class="col-md-12">
        <h2>Summary of interests</h2>
        Here I lay out both my research interests and some little things that I find interesting.
        <h3>Stochastic Differential Equations</h3>
        Stochastic differential equations (SDEs) are used in many disciplines, including physics, biology and finance, to model the behaviour of continuously changing quantities that are subject to random (unpredictable) forces, such as option prices, the electrical potential across the membranes of neurons, and the dynamics of microscopic particles in the precense of thermal fluctuations.<br><br>

        One of the most basic stochastic processes that can be modelled by a SDE is the Ornstein-Uhlenbeck process, $x_{t}$, which satisfies the following SDE:
        $$dx_{t} = -\mu\,x_{t}\,dt + \sigma\,dW_{t}, \quad \mu > 0, \quad t \geq 0.$$
        The term $dW_{t}$ represents a Gaussian white noise forcing, which essentially means that, over a short time interval $[t_{1},t_{2}]$, the trajectory of the system is perturbed by a normal random variable with mean zero and variance $|\,t_{2} - t_{1}\,|$. (Under construction...)
        <h3>Uncertainty Quantification</h3>
        In August of 2013, I participated in an industrial workshop at UBC organized by the Pacific Institute for the Mathematical Sciences (PIMS) and the Institute for Mathematics and its Applications (IMA), U. Minnesota. I worked with a small team on a problem of uncertainty quantification involving industrial iron smelters and heat sensors. <br><br>The essential question was ``Given a finite number of sensors that can be placed on (or in) the wall of an industrial smelter, what arrangement of the sensors minimizes the uncertainty in the wall shape profile?''. The results of our ten-day endeavour are published on the IMAs website <a href="http://www.ima.umn.edu/2013-2014/MM8.6-15.14/activities/Gilg-Albert/Team6_Final_Report.pdf">here</a>. Below is an ipython notebook where the simple one-dimensional version of the problem is outlined.
        <iframe width=100% height="600" src="http://nbviewer.ipython.org/github/WillThompson/plans_for_the_doomsday_device/blob/master/confidence_intervals_rod_length.ipynb"></iframe>
        </div>
        <div class="col-md-6">
          <h2>Teaching</h2>
          <p><ul>
      <li><a href="./teaching/math104_2013/">MATH104</a>: Differential Calc. for Social Sci. and Commerce, (2013)</li>
      <li><a href="./teaching/math104_2011/">MATH104</a>: Differential Calc. for Social Sci. and Commerce, (2011)</li>
    </ul></p><!--
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>-->
       </div>
        <div class="col-md-6">
          <h2>Other</h2>
          <p><div style="float:right;">
    <a href="http://github.com/WillThompson" style="border:none;"><img src="./GitHub-Mark-32px.png"/></a></div>
    <ul>
      <li><a href="#">PhD Thesis</a> (coming soon)</li>
      <li><a href="./files/Averaging_poster.pdf">&alpha;-stable averaging poster</a> (2014 American Geophysical Union Meeting)</li>
      <li><a href="http://circle.ubc.ca/handle/2429/28013">MSc Thesis</a></li>
    </ul>
    </p>
        </div>
      </div>
      <hr>

      <footer>
        <p>© WFT 2015</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/jquery.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/ie10-viewport-bug-workaround.js"></script>
  

</body></html>