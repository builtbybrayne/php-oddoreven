#Odd Or Even (PHP)

Handles the switch between 'odd' and 'even' flags in loops.

### Usage

First import the class:
	
	include "path/to/oddoreven.php";

When you just want to know if it's odd or even:

	OddOrEven::reset();
	while ( $xyz ) {
	
		// boolean check for odd
		if ( OddOrEven::isOdd() ) {
			// . . .
		} 
		
		// boolean check for even
		if ( OddOrEven::isEven() ) {
			// . . .
		}
		
		// get the flag 'odd' or 'even' as a string
		$flag = OddOrEven::get(); 
		
		
	}

If you have multiple loops you can specify a unique id for each loop:

	OddOrEven::reset('outer');
	while ($xyz)) {
		
		if ( OddOrEven::isOdd('outer) ) {			
			OddOrEven::reset('inner-odd');
			while ( $abc ) {
				if ( OddOrEven::get('inner-odd')) {
					// . . .
				}
			}
			
		} else {

			OddOrEven::reset('inner-even');
			while ( $abc ) {
				if ( OddOrEven::get('inner-even')) {
					// . . .
				}
			}
			
		}
	}
	
	
	
