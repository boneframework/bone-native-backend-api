��    .      �  =   �      �     �  	   �  
               
   "  
   0     >  
   G     R  
   W     b     n  
   z     �     �     �     �     �     �  	   �     �     �     �     �       
        ,     ;     L     ]  
   p     ~  
   �     �  
   �     �     �     �  
   �     �     �               
  �       �  	   �  
   �     �  �   �  �   �     ,	     ;	  0   D	     u	  %   �	  (   �	  a   �	  c   ;
     �
  �   �
     @     M     V     ^  {   d     �     �  �    ]   �
  q   L  �   �  1   ?    q  +   }     �  1   �     �  �     "   �  `   �  �   H  �   ?  �   �  2   k  H   �     �     �     �     �               -                                 .      )                                           
       $   (                  
            +   #   %   &                  	          ,         "   '   *   !          about configure contribute database docker.about docker.browse docker.devbox download home.intro i18n index.crew index.crew2 index.crew3 index.install index.install2 index.intro installation language layouts learn learn.777 learn.composer learn.config learn.config.drop learn.config.registry learn.db learn.folders learn.globally learn.i18n.about learn.i18n.usage learn.install.bone learn.layouts learn.learn learn.logs learn.logs.usage learn.mail learn.mail.hog learn.routes learn.routes.params learn.tagline learn.vhosts logs mail routes visit Project-Id-Version: BoneMVC
PO-Revision-Date: 2020-11-19 13:19+0100
Last-Translator: Derek McLean <delboy1978uk@gmail.com>
Language-Team:
Language: en_GB
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 2.2.4
X-Poedit-KeywordsList: translate;t;gettext_noop
X-Poedit-Basepath: ../../..
X-Poedit-SourceCharset: UTF-8
X-Poedit-SearchPath-0: src
 About Configure Contribute Database Bone comes with a docker-compose.yml in the project, so you can instantly    get a dev server running if you use Docker (Tested using a default VirtualBox VM). Just add this to your    hosts file Then you can access the site at https://boneframework.docker in your browser. Of course if you don't use docker you can add it to your LAMP stack in the usual way. Docker Dev Box Download An easy to use PHP Framework with a pirate theme Internationalisation We're always looking for contributors to help make Bone Framework even better. If you like Bone and would like to help contribute in its ddevelopment, fork it and get on board! You can download the Bone MVC source code by browsing over to Github. But we recommend you install  and do it that way. Be ye wantin a DIC middleware based framework peppered with local pirate lingo? It be the most bare bones framework in the seven seas! Garr! Installation Language Layouts Learn Make the data folder writable. 777 gives everyone write access, so instead set it to 775 with yer Apache user in the group. First make sure you have The config folder You can drop in any number of <span class="label label-success">.php</span> files into the    <span class="label label-success">config/</span> folder. Make sure they return an array with the config    . You can override configuration based on environment var    <span class="label label-success">APPLICATION_ENV</span>, so for instance if the environment was productionit would load the additional config the production subdirectory.</p><p>There are several config files by default: In your config files, you can add anything you want. It gets stored in the Bone\Mvc\Registry. Set your default db credentials in the main config/db.php, and any environment specific configs in a subdirectory You can see a config, data, public, and src folder. Leave be vendor folder, that's where composer installs project dependencies. or if you haven't installed composer globally ... Bone supports translation into different locales. Translation files (gettext .po and .mo) should be placed in data/translations, under a subdirectory of the locale, eg data/translations/en_GB/en_GB.po. You can set the default locale and an array of supported locales. To use the translator, you can simply call: Then install Bone. Ignore this config. It's old deprecated nonsense. Learn Bone Framework Bone uses monolog/monolog, and logs can be found in <span class="label label-success">data/logs</span>.Currently we only support writing to files, but you can add as many channels as you like: To use the logger in a controller: Bone uses Zend Mail. To configure the mail client, just drop in your config (see zend mail docs) If you are using the Docker Box provided by bone, you also have the awesome MailHog at your disposal. Browse to boneframework.docker:8025 and you'll see a catch all email inbox, so you never need to worry about development emails reaching the real world. Routes follow a default pattern of /controller/action/param/value/nextparam/nextvalue/etc/etc<br>You can also override routes by defining them in the config array: When defining routes, mandatory variables in the uri have a colon like :id<br /> Optional uri vars have [ ] surrounding them like [:id] It's easy to get up and running with a new project In your Apache virtual hosts, set the document root as the public folder Logs Mail Routes Visit 
