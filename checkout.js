// console.log("ha");
// console.log(dataForm)
 console.log(data);


 const download = document.querySelector(".download");
let all = document.querySelectorAll(".elem");
let fname =document.querySelector(".fname");
let lname =document.querySelector(".lname");
let cne =document.querySelector(".cne");
console.log(all)
let finalData = [];
all.forEach((item) =>{
    let res = item.innerText.split("\n");
    finalData.push({name : res[0], price : res[2], qte : 1})
})


 download.addEventListener("click", ()=>{
    
    if (!fname.value || !lname.value || !cne.value  )
        return;
    let props = {
    outputType: jsPDFInvoiceTemplate.OutputType.Save,
    returnJsPDFDocObject: true,
    fileName: "ICNF 2024",
    orientationLandscape: false,
    compress: true,
    logo: {
        src: "https://i.ibb.co/K6FWgbP/logo-INCF.png",
        type: 'PNG', //optional, when src= data:uri (nodejs case)
        width: 133.33, //aspect ratio = width/height
        height: 26.66,
        margin: {
            top: 0, //negative or positive num, from the current position
            left: 0 //negative or positive num, from the current position
        }
    },
    stamp: {
        inAllPages: false, //by default = false, just in the last page
        src: "",
        type: 'JPG', //optional, when src= data:uri (nodejs case)
        width: 20, //aspect ratio = width/height
        height: 20,
        margin: {
            top: 0, //negative or positive num, from the current position
            left: 0 //negative or positive num, from the current position
        }
    },
    business: {
        name: "Name ICNF",
        address: "Morocco, Rabat UM5 , 2024",
        phone: "(+212) 069 11 11 111",
        email: "email@example.com",
        email_1: "info@example.al",
        website: "www.example.al",
    },
    contact: {
        label: data.type,
        name: fname.value + " " + lname.value,
        address: "CNE : " + cne.value,
    },
    invoice: {
        label: "Order : " + data.type,
        invDate: "Date :" + new Date().toISOString().slice(0, 10),
        headerBorder: false,
        tableBodyBorder: false,
        header: [
          {
            title: "#", 
            style: { 
              width: 10 
            } 
          }, 
          { 
            title: "Selected Pack     ",
            style: {
              width: 70
            } 
          }, 
          { 
            title: "",
            style: {
              width: 0
            } 
          }, 
          { title: "Price"},
          { title: "Quantity"},
          { title: "" , style: {
              width: 0
            } },
          { title: "Total"}
        ],
        table: Array.from(finalData, (item, index)=>([
            index + 1,
            item.name,
            "",
            item.price,
            item.qte,
            "",
            item.price
        ])),
        additionalRows: [{
            col1: 'Total:',
            col2: '145,250.50',
            col3: 'ALL',
            style: {
                fontSize: 14 //optional, default 12
            }
        },
        {
            col1: 'VAT:',
            col2: '20',
            col3: '%',
            style: {
                fontSize: 10 //optional, default 12
            }
        },
        {
            col1: 'SubTotal:',
            col2: '116,199.90',
            col3: 'ALL',
            style: {
                fontSize: 10 //optional, default 12
            }
        }],
        invDescLabel: "Your Signature :",
        invDesc: "",
    },
    footer: {
        text: "INCF Thank you.",
    },
    pageEnable: true,
    pageLabel: "Page ",
};
    let pdfObject = jsPDFInvoiceTemplate.default(props); 
    console.log(pdfObject);
 })



// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector(".upload");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}