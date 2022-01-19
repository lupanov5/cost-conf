import 'core-js/stable';
import 'regenerator-runtime/runtime';
import 'whatwg-fetch';

import Nx from './next/Nx';

import Search from './modules/Search';

$.nx = new Nx();
new Search([]);

