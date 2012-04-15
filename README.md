Slim-FizBuz
===========

Abstract
--------
This is a place to explore best practices and a sain base for php projects.  Most critisizme against php aren't language based, but are related to lack of project structure, and insufficant use of best practices.  One directory (flat implementations) are hard to secure and a bear to undertand.  Your project can be improved by implementing any of the parts of the project within.  The components listest bellow in this readme for your convicence.

For Exsisting Code bases
------------------------
I've found great benefits converting to the slim framework for current projects.  For these projects I leave out template integration, and copy the current php files into the template directory.  Then recreate the routes in the index page(btw the most time intensive step) and presto; you project is light years ahead in terms of structure and understandability.  

Parts
-----
###Slim Microframework###
This slim framework is the crux of this whole project.  It gives strucutre where there once wasn't any.  
###Bootstrap###
Is is a front end framework used to aid in css and javascript formating for quick prototyping.  I've found that after the first few iterations, you will probably replace this, but it aids in getting things off the ground by making css not your biggest problem.
###orm###
An orm is includes, but not used in this project.  I suggest you use one.  They enhance readability substantially, as well as help guard aganst some security issues such as sql injection
###Twig###
Is a templating engine.  Twig is included in three steps.
