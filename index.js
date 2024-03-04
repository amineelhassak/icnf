
const dropDown = document.getElementById("down-btn");
const toOpen = document.getElementById("header")
dropDown.addEventListener("click", ()=>{
	dropDown.classList.toggle("open");
	if (dropDown.classList.contains("open"))
	{
		toOpen.style.display = "flex";
		toOpen.classList.remove("h-close")
		toOpen.classList.add("h-open");
			
	}else{
		toOpen.classList.remove("h-open");
		toOpen.classList.add("h-close");
		toOpen.style.display="none";
	}

})

localStorage.setItem("price",JSON.stringify({regPrice : 450, studPrice : 300}));

const checkR70 = document.getElementById("r70");
const checkR200 = document.getElementById("r200");

const checkS60 = document.getElementById("s60");
const checkS200 = document.getElementById("s200");

const req = document.getElementById("r-price");
const std = document.getElementById("s-price");

window.addEventListener("load", ()=>{
	let data = JSON.parse(localStorage.getItem("price"));
	req.innerText = "€ " + data.regPrice;
	std.innerText = "€ " + data.studPrice;
})

checkR70.addEventListener("change",(e)=>{
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkR70.checked)
		data.regPrice += 70;
	else 
		data.regPrice -= 70;
	req.innerText ="€ " + data.regPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkR200.addEventListener("change",(e)=>{
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkR200.checked)
		data.regPrice += 200;
	else 
		data.regPrice -= 200;
	req.innerText ="€ " + data.regPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkS60.addEventListener("change",(e)=>{
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkS60.checked)
		data.studPrice += 60;
	else 
		data.studPrice -= 60;
	std.innerText ="€ " + data.studPrice;
	localStorage.setItem("price", JSON.stringify(data));
})

checkS200.addEventListener("change",(e)=>{
	let data = JSON.parse(localStorage.getItem("price"));
	if (checkS200.checked)
		data.studPrice += 200;
	else 
		data.studPrice -= 200;
	std.innerText ="€ " + data.studPrice;
	localStorage.setItem("price", JSON.stringify(data));
})