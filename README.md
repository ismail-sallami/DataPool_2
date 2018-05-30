# DataPool_1
This Symfony project shows how to collect data from different resources (DB, XML, JSON, ...),
It shows the importance of use of Interfaces in OOP.
Datapool_2 is the DAO based model approach, please check Datapool_1 for the all-in-one controller approach.

The application is created using Symfony2 framework, PHP 5.5and MySQL server under Linux OS (Ubuntu) and tested with the built-in php web server.

How to run me
==============
Please run the DumbTyre.sql and check your DB settings in app/config/parameters.yml
You will find also a products.xml file in web/bundles/tyretyre/xml.
As test case, I worked only with DB and XML file as data sources, but the model can be extended to other data sources (JSON, CSV, Excel, Access, ...)

to run the application, you have just to be in the folder auth_project:
$ cd [your_home_path]/tyre
Once you are in, just check if your system meets all technical requirements :
$ php app/check.php
and then run the PHP built-in web server to run Symfony:
$ php app/console server:run
Now just click to browse the application :
http://localhost:8000/search
