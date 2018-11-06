<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/<?= $this->e($locale) ;?>#page-top">
                <i class="fa fa-play-circle"></i>  <span class="light">Bone</span> MVC Framework
            </a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="/#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="/#about"><?= $this->t('about') ;?></a>
                </li>
                <li class="page-scroll">
                    <a href="/#download"><?= $this->t('download') ;?></a>
                </li>
                <li class="page-scroll">
                    <a href="/#contribute"><?= $this->t('contribute') ;?></a>
                </li>
                <li class="">
                    <a href="#"><?= $this->t('learn') ;?></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->t('language') ;?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/en_PI/learn">Pirate</a></li>
                        <li><a href="/en_GB/learn">English</a></li>
                        <li><a href="/nl_BE/learn">Nederlands</a></li>
                        <li><a href="/fr_BE/learn">Français</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<section class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <img height="64" src="/img/skull_and_crossbones.png" />
                    <h2 class=""><?= $this->t('learn.learn') ;?></h2>
                    <p class="intro-text"><?= $this->t('learn.tagline') ;?></p>
                    <div class="page-scroll">
                        <a href="#installation" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="installation" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2><?= $this->t('installation') ;?></h2>
            <p><?= $this->t('learn.composer') ;?> <a href="https://getcomposer.org/">Composer</a>! <?= $this->t('learn.install.bone') ;?></p>
            <code>composer create-project delboy1978uk/bonemvc your/path/here dev-master</code>
            <p class="clear"><?= $this->t('learn.globally') ;?></p>
            <code>php composer.phar create-project delboy1978uk/bonemvc your/path/here dev-master</code>

        </div>
    </div>
</section>

<section id="configger" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?= $this->t('configure') ;?></h2>
                <p><?= $this->t('learn.folders') ;?></p>
                <p><?= $this->t('learn.777') ;?></p>
                <code>chmod -R 775 data</code>
                <p><?= $this->t('learn.vhosts') ;?></p>
                <div class="code tl">
        &lt;VirtualHost *:80&gt;
                DocumentRoot "/var/www/bonemvc/public"
                ServerName awesome.scot
                SetEnv APPLICATION_ENV development
                &lt;Directory "/var/www/bonemvc"&gt;
                        DirectoryIndex index.php
                        FallbackResource /index.php
                        Options -Indexes +FollowSymLinks
                        AllowOverride all
                        Require all granted
                &lt;/Directory&gt;
        &lt;/VirtualHost&gt;
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contribute" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2><?= $this->t('learn.config') ;?></h2>
            <p>In th' config.php, ye can add anything ye want! It gets stored in th' Bone Registry. Bone looks fer the followin' keys: routes, db, templates</p>
            <br />
            <h3>Routes</h3>
            <p>Routes follow a default pattern of /controller/action/param/value/nextparam/nextvalue/etc/etc</p>
            <p>Ye can also override routes by definin' them in th' config array:</p>
            <div class="code tl">'routes' => array(
                '/customised/url/like/so' => array(
                    'controller' => 'pirate',
                    'action' => 'swashbuckle',
                    'params' => array(
                        'weapon' => 'cutlass',
                    ),
                ),
                '/optional[/:id]' => array(
                    'controller' => 'index',
                    'action' => 'index',
                    'params' => array(),
                ),<br />
                '/mandatory/:id' => array(
                    'controller' => 'index',
                    'action' => 'index',
                    'params' => array(
                        'whatever' => 'you like'
                    ),
                ),
            ),</div>
            <p>When definin' routes, variables in th' uri have a colon like :id<br /> Optional uri vars have [ ] surrounding them like [:id]<br />
            Once th' router has X marked th' spot, it will take you to th' controllers action.</p>
            <h3>Database</h3>
            <p>Put yer production databse connection details int' th' array. If yer on yer dev ship, put the connection details int' th' config.dev.php, which will override the main settin'.</p>
            <div class="code tl">
                'db' => array(
                    'host' => '127.0.0.1',
                    'database' => 'bone',
                    'user' => 'LeChuck',
                    'pass' => 'monkeyIsland'
                ),
            </div>
            <br />
            <h3>Layouts</h3>
            <p>In the src/App/View/layouts folder, ye can add twig templates. Right now to switch layout ye can change the value in th' config array, however we'll be addin' the ability to switch between them, and once we have that up an' runnin' you can add all the layouts to th' array.</p>
            <br />
            <h3>Controllers an' Actions</h3>
            <p>In the src folder ye shall see an App folder, which be where ye program yer app. Soon we will allow more than just the App module, meanin' ye can start programmin' HMVC if ye like.</p>
            <p>In th' controller, ye have access t' a few things</p>
            <div class="code tl">
                public function nonstopAction()
                {
                    $this->getRequest();                // the Request object
                    $this->getParam('param');     // gets a single uri param
                    $this->getParams();                // gets an array of all the params
                    $this->getDbAdapter();          // a PDO connection t' yer Db
                    $this->getHeaders();              // Fer settin' yer headers
                    $this->hasLayoutEnabled(); // boolean
                    $this->disableLayout();         // turns the layout off
                    $this->hasViewEnabled();    // boolean
                    $this->disableView();             // turns twig off
                    $this->getTwig();                   // gets yer Twig object
                    $this->getBody();                   // response body (when view disabled)
                    $this->setBody($body);        // sets th' response body (when view disabled)
                }
            </div>
            <p>More help comin' soon! Garr!</p>
        </div>
    </div>
</section>

<!-- Core JavaScript Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/grayscale.js"></script>
