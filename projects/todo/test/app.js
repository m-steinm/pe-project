// import myLibrary from '/library.js';

// const outlet = document.querySelector('output');

// outlet.innerHTML = library.double(5);

import { double, tripple } from './library.js';

const outlet = document.querySelector('output');

outlet.innerHTML = double(2) + tripple(3);