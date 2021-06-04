require('./about_me.css');

import {Ant} from './components/slider/slider.js'

// ajax

window.onload = () => {
	const items = document.getElementsByClassName("ant-carousel");
	let slider = [];

	items.forEach(element => {
		slider.push(new Ant(element.id))
	});
}
