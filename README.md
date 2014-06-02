Morton Casa de Subastas
==================

Colaborative re-design of mortonsubastas.com. Mexico City, Mexico.

Project start: 19-05-2014

[Andy Osuna](https://github.com/andyosuna)


File Guidelines
---------------

**1.** Fill up spaces with dashes. Leave only main words, remove all else.

*Example:* Libros y Documentos = libros-documentos.php

**2.** Keep everything in the root folder except for images (images), includes (php), php (php), database conection, stylesheets (css) and javascript (js).

**3.** Included files inside **php** directory should be named **include-** + *filename* + **.php**.

*Example:* Header include file = include-header.php

**4.** Certain images should be placed within specific directories like banners, slides, staff pictures and upcoming event images (for content pages).

  * Images within **banners** should be named **dep-** + *department-name* + **.jpg**.
  * Images within **slides** should be named after the slide number in the slideshow followed by the date. *Example:* **slide-1** + *05-07-2014* + **.jpg**
  * Images within **catalogs** should be named **cat-** + *event-name* + **.jpg**.
  * Images within **staff** should be named by the persons last name followed by the first. *Example:* Andy Osuna would become *osuna-andy* + **.jpg**.
  * Images within **upcoming** should be named **vnt-** + *event-name* + **.jpg** (using the same event-name as used for "catalogs").


Coding Guidelines
---------------

**One:** Open a template.

1. Open a file named **template.php**, **template-responsive.php** or **template-content.php**.
2. Save using the naming guidelines above: **sample-file**.php
3. You are now ready to work in the new file.

**DO NOT MODIFY THE TEMPLATES!**


**Two:** 

1. Add your content inside ``<div class="cont"></div>``
2. Follow the guidelines stated on **style-guide.php**.


Usernames & Passwords
---------------------

*Empty*

