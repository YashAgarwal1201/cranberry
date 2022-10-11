
// printing different patterns in Javascript
function patternPrint() {

	/* IMPORTANT ` USE style="white-space: pre;" for preserving white spaces and line break 
	if printing these values in html instead of "console.log()"`*/
	
	// pattern 1
	var stringP = ''
	for (let i = 0; i < 5; i++) {
		for (let j = 0; j <= i; j++) {
			stringP += ' * '
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 2
	for (let i = 0; i < 5; i++) {
		for (let j = i; j < 5; j++) {
			stringP += ' * '
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 3
	for (let i = 0; i < 5; i++) {
		for (let j = 0; j <= i; j++) {
			stringP += j//' * '
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 4
	for (let i = 0; i < 5; i++) {
		for (let j = i; j < 5; j++) {
			stringP += i//' * '
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 5
	for (let i = 0; i < 5; i++) {
		for (let j = i; j < 5; j++) {
			stringP += j//' * '
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 6
	for (let i = 0; i < 5; i++) {
		for (let j = 0; j <= i; j++) {
			stringP += i//' * '
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 7
	for (let i = 0; i < 5; i++) {
		for (let j = 0; j <= 5; j++) {
			stringP += ' * '
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 7
	for (let i = 0; i < 5; i++) {
		for (let j = 0; j <= i; j++) {
			stringP += '&nbsp&nbsp&nbsp'
		}
		for (let k = i; k < 5; k++) {
			stringP += ' *'
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	// pattern 8
	for (let i = 0; i < 5; i++) {
		for (let j = i; j < 5; j++) {
			stringP += '&nbsp&nbsp&nbsp'
		}
		for (let k = 0; k <= i; k++) {
			stringP += ' *'
		}
		stringP += '\r\n'
	}
	stringP += '\r\n'

	return stringP
}