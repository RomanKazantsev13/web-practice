require('./about_me.css');

alert('work');

import {Ant} from './components/slider/slider.js'

window.onload = () => {
	const items = document.getElementsByClassName('ant-carousel');
	const button = document.getElementById('button');

	let slider = [];

	items.forEach(element => {
		slider.push(new Ant(element.id))
	});

	button.onclick = () => update()

}
async function update() {
	const response = await fetch('/new', {method: 'POST'})
	if (response.ok) {
		alert('все ок');
	} else {
		alert('Ну, блин, не получилось')
	}
}
