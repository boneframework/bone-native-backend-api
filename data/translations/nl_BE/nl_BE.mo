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
  �       �     �  	   �     �  �   �  �   �     ^	  
   u	     �	     �	  (   �	  %   �	  b   
  `   e
  (   �
     �
     
               '  z   ;     �     �  �  �  r   �
  {   =  �   �  7   >  I  v  5   �  ,   �  7   #     [  �   a  ,   D  }   q    �  �   �  �   �  ?   E  G   �     �     �     �     �               -                                 .      )                                           
       $   (                  
            +   #   %   &                  	          ,         "   '   *   !          about configure contribute database docker.about docker.browse docker.devbox download home.intro i18n index.crew index.crew2 index.crew3 index.install index.install2 index.intro installation language layouts learn learn.777 learn.composer learn.config learn.config.drop learn.config.registry learn.db learn.folders learn.globally learn.i18n.about learn.i18n.usage learn.install.bone learn.layouts learn.learn learn.logs learn.logs.usage learn.mail learn.mail.hog learn.routes learn.routes.params learn.tagline learn.vhosts logs mail routes visit Project-Id-Version: BoneMVC
PO-Revision-Date: 2020-11-19 13:10+0100
Last-Translator: Derek McLean <delboy1978uk@gmail.com>
Language-Team:
Language: nl_BE
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 2.2.4
X-Poedit-KeywordsList: t;translate;gettext_noop
X-Poedit-Basepath: ../../..
X-Poedit-SourceCharset: UTF-8
X-Poedit-SearchPath-0: src
 Over Configureren Bijdragen Databank Bot wordt geleverd met een docker-compose.yml in het project, dus u kunt het meteen een dev-server laten draaien als je Docker gebruikt (Getest met een standaard VirtualBox VM). Voeg dit gewoon toe aan uwhosts bestand Vervolgens hebt u toegang tot de site op https://boneframework.docker in uw browser. Als u docker niet gebruikt, kunt u dit natuurlijk op de gebruikelijke manier aan uw LAMP-stack toevoegen. Docker development box Downloaden Een PHP-raamwerk voor piraten Internationalisering We zijn altijd op zoek naar medewerekers om Bone Framework nog beter te maken. Als je van Bone houdt en zou willen bijdragen aan de ontwikkeling ervan, ervoor en aan boord gaan! Je kunt de Bone Framework-broncode downloaden door naar Github te bladeren. Maar we raden aan om te installeren, en doe het op die manier Een PHP-raamwerk voor piraten Installatie Taal Lay-outs Leer Bone Framework Maak de datamap schrijfbaar. 777 geeft iedereen schrijftoegang, dus plaats het in 775 met uw Apache-gebruiker in de groep. Zorg eerst dat je  De configuratiemap U kunt een willekeurig aantal <span class="label label-success">.php</span> bestanden in de <span class="label label-success">config/</span> map. Zorg ervoor dat ze een array retourneren met de config. U kunt configuratie overschrijven op basis van omgevingsvariabelen <span class="label label-success"> APPLICATION_ENV</span>, dus bijvoorbeeld als de omgeving productie was het zou de extra config de productiesubdirectory laden. </p><p>Er zijn standaard verschillende configuratiebestanden: In uw configuratiebestanden kunt u alles toevoegen wat u maar wilt. Het wordt opgeslagen in het Bone\Mvc\Registry. Stel uw standaard db-referenties in de hoofdconfiguratie / db.php en eventuele omgevingsspecifieke configs in een submap in U ziet een map config, data, public en src. Laat de leveranciersmap staan, dat is waar Composer projectafhankelijkheden installeert. als je Composer niet wereldwijd hebt geïnstalleerd ... Bone ondersteunt vertaling naar verschillende landinstellingen. Vertaalbestanden (gettext .po en .mo) moeten in gegevens / vertalingen worden geplaatst, onder een subdirectory van de landinstelling, bijv. Data / translations / en_GB / en_GB.po. U kunt de standaard locale en een array met ondersteunde landinstellingen instellen. Om de vertaler te gebruiken, kunt u eenvoudig bellen: hebt. Installeer vervolgens 'Bone Framework' Negeer deze configuratie. Het is oude verouderde onzin. Leren Bone gebruikt monoloog/monoloog, 'n logs zijn te vinden in <span crew="label label-success">data/logs</span>. Momenteel ondersteunen we alleen het schrijven van 't'-bestanden, maar je kunt zoveel kanalen toevoegen als je wilt: Om de logger in een controller te gebruiken: Bone gebruikt Zend Mail. Om de e-mailclient te configureren, hoeft u alleen uw configuratie in te voeren (zie zend mail docs) Als u de door bot geleverde dock-box gebruikt, heeft u ook de geweldige MailHog tot uw beschikking. Blader naar boneframework.docker:8025 en je ziet een e-mailinbox voor e-mails, dus je hoeft je nooit zorgen te maken dat ontwikkelingsmails de echte wereld bereiken. Routes volgen een standaardpatroon van /controller/actie/param/waarde/nextparam/volgendewaarde/etc/etc<br> U kunt ook routes overschrijven door ze in de configuratiearray te definiëren: Bij het definiëren van routes hebben verplichte variabelen in de uri een dubbele punt zoals: id <br /> Optionele uri-vars hebben [] eromheen als [: id] Het is gemakkelijk om met een nieuw project aan de slag te gaan Stel in uw Apache virtuele hosts de documentroot in als de openbare map Logs Mail Routes Bezoek 
