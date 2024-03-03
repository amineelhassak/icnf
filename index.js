
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
