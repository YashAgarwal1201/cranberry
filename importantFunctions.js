
// some important functions (Javascript)

use strict;
// Some Important & Useful Function

function minAndMax(argument, argument2) {
	// Minimum and Maximum in a numeric array
	let length = argument.length;
	let min = POSITIVE_INFINITY, max = NEGATIVE_INFINITY;

	if (argument2.toLowerCase() == 'max') {
		while (length--) {
			if (argument[length] > max)
				max = argument[length];
		}
		return max;
	}
	else {
		while (length--) {
			if (argument[length] < min) 
				min = argument[length];
		}
		return min;
	}
}

//To check if a string is a palindrome or not
function isPalindrome(argument) {
	if (typeof(argument) === 'string') {
		var demoString = '';
		for (let i = argument.length - 1; i >= 0; i--) {
			demoString += argument[i];
		}
		if (demoString === argument) {
			return true;
		}
		else {
			return false;
		}
	}
	else if (typeof(argument) === 'number') {
		let temp1, temp2, temp3 = 0;
		temp1 = argument;
		while (temp1 > 0) {
			temp2 = temp1 % 10;
			temp3 = (temp3 * 10) + temp2;
			temp1 = parseInt(temp1/10);
		}
		if(temp3 == argument)
			return true;
		else
			return false;
	}
	else 
		return null;
}

//Function to find if argument is an Even number or not
function isEven(argument) {
	if(typeof(argument) === 'number') {
		if(argument % 2 == 0) 
			return true;
		else
			return false;
	}
	else
		return null;
}


// array reverse 
function arrayReverse(argument) {
	// body...
	if(Array.isArray(argument)) {
		let tempArray = [];
		for (let i = argument.length - 1, j = 0; i >= 0, j < argument.length; i--, j++) {
			tempArray[j] = argument[i];
		}
		return tempArray;
	}
	else
		return null;
}

// Sort an array
function arraySort(argument) {
	// checking if 'argument' is an array or not
	if(Array.isArray(argument)) {
		// check that all elements are of same type or not 
		if ( argument.every( (value,i, argument) => typeof(value) === typeof(argument[0]) ) && argument[0] != null ) { 
			// sorting numeric arrays in ascending order
			if (typeof(argument[0]) == 'number') {
				argument.sort(function(a,b) { return a - b });
				return argument;
			}
			// sorting string arrays
			else if (typeof(argument[0]) == 'string') {
				argument.sort();
				return argument;
			}
			else {
				return 'error';
			}
		}
		else
			return 'array elements are not of same type or maybe array is empty';
	}
	else
		return null;
}

// function to count instances of a given value in a string or a number
function countInstance(argument, argument2) {
	if ((argument != null && argument != undefined) && (argument2 != null && argument2 != undefined)) {
		/*let count = 0; // an alternative method
		for (var i = 0; i < argument.length; i++) {
			if (argument[i] === argument2) {
				count++;
			}
		}*/
		if((typeof(argument) === typeof(argument2) && typeof(argument) === 'string') || 
			(typeof(argument) === typeof(argument2) && typeof(argument) === 'number')) {
			const reg = new RegExp(argument2.toString(), 'gi');
			let temp = argument.toString().match(reg);
			return (temp.length);
		}
		else
			return 'given value is neither a string nor a number';
	}
	else 
		return 'given values are either "null" or "undefined"';
}

// function to check whether the given number is prime or not
function isPrime (argument) {
	if (typeof(argument) === 'number') {
		var count = 0;
		if (argument <= 1)
			return false;
		else {
			for (let i = 2; i <= argument/2; i++) {
				if (argument % i == 0) {
					count++;
					break;
				}
			}
			if (count)
				return false;
			else
				return true;
		}
	}
	else
		return null;
}

// function to find prime numbers
function primeNumbers (argument, argument2) {
	if (typeof(argument) === 'number' && typeof(argument2) === 'number') {
		var count = 0, prime = [];
		for (var i = argument; i <= argument2; i++) {
			if (i <= 1) 
				continue;
			count = 0;
			for (var j = 2; j <= i/2; j++) {
				if (i % j == 0) {
					count++;
					break;
				}
			}
			if (!count || count == 0) 
				prime.push(i);
		}
		return prime;
	}
	else
		return null;
}

// function to print fibonaci series
function fibonacci (argument, argument2) {
	if (typeof(argument) === 'number' && typeof(argument2) === 'number') {
		alert(9)
		for (var i = argument; i <= argument2; i++) {
			if (i < 1)
				continue;
			
		}
	}
	else
		return null;
}

// Function to count number of digits in a number 
function countDigits(argument) {
	if (typeof(argument) === 'number' && argument !== null) {
		let count = 0
		while(argument > 0) {
			count++
			argument = parseInt(argument / 10)
		}
		return count
	}
	else 
		return 'number is either null or not a number'
}
