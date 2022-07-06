let openadd = document.querySelector(".address-container .add");
let closebtn = document.querySelector(".overlay .closed");
let overlay = document.querySelector(".overlay");

function openwindow(){
    overlay.classList.add("openlay");
    /// open window of add-new-contact
};
openadd.addEventListener("click",openwindow); 
/// closed window of add-new-contact or edit-contact


function closedwindow(){
    overlay.classList.remove("openlay");
};
closebtn.addEventListener("click",closedwindow);  
/// closed window of add-new-contact or edit-contact


/// make the array that will store data
/// let contactlist = [];

let contactlist = JSON.parse(localStorage.getItem("contact") || "[]");
//////let contactformid = contactlist.length;
let contactformname = document.querySelector("#contact-form-name");
let contactformphone = document.querySelector("#contact-form-phone");
let contactformemail = document.querySelector("#contact-form-email");
let contactformaddress = document.querySelector("#contact-form-address");

/// make a function to push the new contact into array

function newcontact(){
    contactlist.push({
        /////contactid : contactformid +=1,
        contcatname : contactformname.value ,
        contactphone : contactformphone.value ,
        contactemail : contactformemail.value ,
        contactaddress : contactformaddress.value
    });
    localStorage.setItem("contact",JSON.stringify(contactlist));
    console.log(contactlist);
};


const tbody = document.querySelector("table tbody");
console.log(tbody);
function displaycontact(){
    let tr = '';
    let i ;
    for (i = 0 ; i < contactlist.length ; i++){
        tr += `
           <tr data-id="${i}">
               <td>${contactlist[i].contcatname}</td>
               <td>${contactlist[i].contactphone}</td>
               <td>${contactlist[i].contactemail}</td>
               <td>${contactlist[i].contactaddress}</td>
               <td class="edit">
                 <i class="fa fa-edit"  style="color:green"></i>
               </td>
               <td class="delete">
                 <i class="fa fa-trash" style="color:red"></i>
               </td>
           </tr>
        `;
    };
    tbody.innerHTML = tr;
    ////console.log(tr);

};
displaycontact();

let save = document.querySelector(".save");

/// make function to reset the values in form
function resetform(){
    contactformname.value =" ";
    contactformphone.value =" ";
    contactformemail.value =" ";
    contactformaddress.value =" ";
};

/// make the complete save btn event (push , display , close)
save.addEventListener("click",()=>{
    newcontact();
    displaycontact();
    closedwindow();
});

/// make the array that will store edit-data

let editform = document.querySelector(".edit-form");
let editformname = document.querySelector("#edit-form-name");
let editformphone = document.querySelector("#edit-form-phone");
let editformemail = document.querySelector("#edit-form-email");
let editformaddress = document.querySelector("#edit-form-address");
let updatebtn = document.querySelector(".edit-btn");
let editclosed = document.querySelector(".closed-edit")


tbody.addEventListener('click',(btn)=>{
    const mark = btn.target;
    ////console.log(mark);
    if(mark.classList.value == "edit"){
        let tr = mark.parentElement;
        let index = tr.dataset.id;
        /////let oldid = tr.children[0].innerHTML;
        /////console.log(oldid);

        editformname.value = contactlist[index].contcatname;
        editformphone.value = contactlist[index].contactphone;
        editformemail.value = contactlist[index].contactemail;
        editformaddress.value = contactlist[index].contactaddress;

        /// open window of edit-contact
        editform.classList.add("openlay");
        
        /// closed window of edit-contact
        function closededitform(){
            editform.classList.remove("openlay");
        };
        editclosed.addEventListener("click",closededitform); 
        
        //// function of update-btn
        function update(){
            contactlist[index] = {
                /////contactid : parseInt(oldid),
                contcatname :  editformname.value,
                contactphone : editformphone.value,
                contactemail : editformemail.value,
                contactaddress : editformaddress.value
            };
        };
        updatebtn.addEventListener("click",()=>{
            update();
            closededitform();
            displaycontact();
            localStorage.setItem("contact",JSON.stringify(contactlist));
            location.reload();
        });
    };
    if(mark.classList.value == "delete"){
        let tr = mark.parentElement;
        let index = tr.dataset.id;
        contactlist.splice(index,1);
        localStorage.setItem("contact",JSON.stringify(contactlist));
        displaycontact();
    };
});
    
/// function of search on speacial contact in table
let search = document.getElementById("search");
let trs = document.querySelectorAll("table tr");

search.addEventListener("keyup",function search_contact(){
    let search_value = search.value.toUpperCase();
    trs.forEach((tr)=>{
        search_tr = tr.children[1].innerHTML.toUpperCase();
        if(search_tr.includes(search_value)){
            tr.style.display = "";
        }else{
            tr.style.display = "none";
        };
    });
});

//////<td>${contactlist[i].contactid}</td>