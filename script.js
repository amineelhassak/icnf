const dropDown = document.getElementById("down-btn");
const toOpen = document.getElementById("header")
dropDown.addEventListener("click", () => {
	dropDown.classList.toggle("open");
	if (dropDown.classList.contains("open")) {
		toOpen.style.display = "flex";
		toOpen.classList.remove("h-close")
		toOpen.classList.add("h-open");

	} else {
		toOpen.classList.remove("h-open");
		toOpen.classList.add("h-close");
		toOpen.style.display = "none";
	}

})

localStorage.setItem("price", JSON.stringify({ regPrice: 0, studPrice: 0 }));

const checkR450 = document.getElementById("r450");
let	R450 = 0;
const checkR70 = document.getElementById("r70");
let	R70 = 0;
const checkR300 = document.getElementById("r300");
let	R300 = 0;
const checkR200 = document.getElementById("r200");
let	R200 = 0;

const checkS70 = document.getElementById("s70");
let S70 = 0;
const checkS550 = document.getElementById("s550");
let S550 = 0;
const checkS200 = document.getElementById("s200");
let S200 = 0;
const checkS400 = document.getElementById("s400");
let S400 = 0;

const req = document.getElementById("r-price");
const std = document.getElementById("s-price");

window.addEventListener("load", () => {
	let data = JSON.parse(localStorage.getItem("price"));
	req.innerText = "€ " + data.regPrice;
	std.innerText = "€ " + data.studPrice;
})

checkR70.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkR70.checked)
	{
		data.regPrice += 70;
		R70 = 1;
	}
	else
	{
		// delete.form['Social Event'];
		data.regPrice -= 70;
		R70 = 0;
	}
	req.innerText = "€ " + data.regPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkR200.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkR200.checked)
	{
		data.regPrice += 200;
		R200 = 1;
	}
	else
	{
		// delete.form['Accompanying person'];
		data.regPrice -= 200;
		R200 = 0;
	}
	req.innerText = "€ " + data.regPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkR300.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkR300.checked)
	{
		data.regPrice += 300;
		R300 = 1;
	}
	else
	{
		// delete.form['Student'];
		data.regPrice -= 300;
		R300 = 0;
	}
	req.innerText = "€ " + data.regPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkR450.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkR450.checked)
	{
		data.regPrice += 450;
		R450 = 1;
	}
	else
	{
		// delete.form['Regular Participants'];
		data.regPrice -= 450;
		R450 = 0;
	}
	req.innerText = "€ " + data.regPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkS70.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkS70.checked)
	{
		data.studPrice += 70;
		S70 = 1;
	}
	else
	{
		// delete.form['Social Event'];
		data.studPrice -= 70;
		S70 = 0;
	}
	std.innerText = "€ " + data.studPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkS200.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkS200.checked)
	{
		data.studPrice += 200;
		S200 = 1;
	}
	else
	{
		// delete.form['Social Event'];
		data.studPrice -= 200;
		S200 = 0;
	}
	std.innerText = "€ " + data.studPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkS400.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkS400.checked)
	{
		data.studPrice += 400;
		S400 = 1;
	}
	else
	{
		// delete.form['Student'];
		data.studPrice -= 400;
		S400 = 0;
	}
	std.innerText = "€ " + data.studPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkS550.addEventListener("change", (e) => {
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkS550.checked)
	{
		data.studPrice += 550;
		S550 = 1;
	}
	else
	{
		// delete.form['Regular Participants'];
		data.studPrice -= 550;
		S550 = 0;
	}
	std.innerText = "€ " + data.studPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

/////////////////////////// form submition /////////////////////////////

const submit_from = document.querySelector(".submit-form");

submit_from.addEventListener("submit", (e) => {
	e.preventDefault();
	let data = new FormData(submit_from);
	data.append("name", "Before 10th May 2024");

	if (R70 === 1)
		data.append("Social Event", "70");
	if (R200 === 1)
		data.append("Accompanying person", "200");
	if (R300 === 1)
		data.append("Student", "300");
	if (R450 === 1)
		data.append("Regular Participants", "450");

	let jsonObject = {};
	data.forEach((value, key) => {
		jsonObject[key] = value;
	});

	console.log(jsonObject);
});

const submit_from2 = document.querySelector(".submit-form2");

submit_from2.addEventListener("submit", (e) => {
	e.preventDefault();
	let data = new FormData(submit_from2);
	data.append("name", "From 15th June 2024");
	if (S70 === 1)
		data.append("Social Event", "70");
	if (S200 === 1)
		data.append("Accompanying person", "200");
	if (S400 === 1)
		data.append("Student", "400");
	if (S550 === 1)
		data.append("Regular Participants", "550");

	let jsonObject = {};
	data.forEach((value, key) => {
		jsonObject[key] = value;
	});
	console.log(jsonObject);
});
