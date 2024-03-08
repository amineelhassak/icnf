const allBtns =  document.querySelectorAll(".data-row");
const conferm = document.getElementById("to-conferm");
const insertToModel = (e) =>{
    let model = document.querySelector(".modal-body");
    let data = e.target.id.split(" ");
    let str =  "Conferm "+(data[0] == 0?"Validate":"unvalidate")+" "+data[3]+"'s documents "
    model.innerHTML="<h1>"+str+"</h1>"+ "<input type='text' name='value' style='display:none;' class='data-conferm' value='"+data[0]+"'/> <input type='text' name='id' style='display:none;' class='data-conferm' value='"+data[1]+"'/>"
}

allBtns.forEach((elem)=>{
    elem.lastChild.addEventListener("click", insertToModel)
})

