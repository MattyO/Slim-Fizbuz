<?php

/**
 * Step 1: Require the Slim PHP 5 Framework
 *
 * If using the default file layout, the `Slim/` directory
 * will already be on your include path. If you move the `Slim/`
 * directory elsewhere, ensure that it is added to your include path
 * or update this file path as needed.
 */
require 'libs/Slim/Slim.php';
require 'libs/FizBuzNumber.php';
require 'libs/TwigView.php';

function getNumberArray($start, $end){
	$rNumbers = array();

	for($number = $start; $number <= $end; $number++){
		$rNumbers[] = new FizBuzNumber($number);
	}
	return $rNumbers;
}
/**
 * Step 2: Instantiate the Slim application
 *
 * Here we instantiate the Slim application with its default settings.
 * However, we could also pass a key-value array of settings.
 * Refer to the online documentation for available settings.
 */
$app = new Slim(array(
	'view'=>new TwigView()
));

////////////////////////////////////////////////////////////////////////////////
//--Routes--////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

/* purpose: main page show normal fizbuz and the structure / forms for the rest of the roots.
 * 
 */
$app->get('/', function () use($app) {
	
	$args = array('numbers' => getNumberArray(1, 100));
    
	$app->render('index.twig', $args );
});

$app->get('/:num', function($pNumber) use($app){
	
	$args = array( 'number'=>new FizBuzNumber($pNumber) );
	
	$app->render('single.twig' , $args);
});//->conditions(array('num'=> 'd+'));

$app->get('/list/(:start-):end', function($start = 1, $end) use($app){
	
	if($start >= $end ){
		$app->flash("error start has to be greater than end");
		//--TODO--/ redirect to first page.
	}
	
	$args = array('start'=>$start, 'end'=>$end, 'numbers'=> getNumberArray($start, $end));
	
	$app->render('list.twig', $args);
});

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This is responsible for executing
 * the Slim application using the settings and routes defined above.
 */
$app->run();