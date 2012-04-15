<?php

//--NOTE--// poor man's enumerations
class OutputType { const not_matched = 1, fiz= 3, buz= -5, fizbuz = 15;} 

class FizBuzNumber{
	private $_number = null;
	
	function __construct($pInteger){
		$this->_number = $pInteger;
	}
	
	public function __toString(){
		return (string)$this->_number;
	}
	
	public function getDescription(){
		$rDescription = 'just a number';
		
		switch ($this->getOutputType()){
			
			case OutputType::fizbuz: 
				$rDescription = 'fizbuz';
				break;
			case OutputType::fiz: 
				$rDescription = 'fiz';
				break;
			case OutputType::buz: 
				$rDescription = 'buz';
				break;	
			default:
				$rDescription = 'number';
				break;
		}
	
		return $rDescription;
	
	
	}
	
	public function getOutputType(){
		
		$rOutputType 	= OutputType::not_matched;
		$isfiz 			= $this->isOuptutType($this->_number, OutputType:: fiz);
		$isbuz 			= $this->isOuptutType($this->_number, OutputType::buz);

		if($isfiz && $isbuz ){
			$rOutputType  = OutputType::fizbuz;
		}else if ($isfiz ){
			$rOutputType  = OutputType::fiz;
		}else if ($isbuz ){
			$rOutputType  = OutputType::buz;
		}else{
			$rOutputType  = OutputType::not_matched	;
		}
	
		return $rOutputType ;
	}	
	
	private function isOuptutType($pNumber, $pType){
		$rIsOutputType = false;

		if($pNumber % $pType == 0){
			$rIsOutputType = true;
		}else{
			$rIsOutputType= false;
		}
		
		return $rIsOutputType;
	}
}
	