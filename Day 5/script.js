let students=[];

const form=document.getElementById("regForm");
const tableBody=document.getElementById("tableBody");
const search=document.getElementById("search");

form.addEventListener("submit",function(e){

e.preventDefault();

let name=document.getElementById("name").value.trim();
let college=document.getElementById("college").value.trim();
let email=document.getElementById("email").value.trim();
let phone=document.getElementById("phone").value.trim();
let event=document.getElementById("event").value;

if(name==""||college==""||email==""||phone==""||event==""){
alert("Please fill all fields.");
return;
}

students.push({
name,
college,
email,
phone,
event
});

displayStudents();

form.reset();

alert("Registration Successful!");

});

function displayStudents(){

tableBody.innerHTML="";

students.forEach((student,index)=>{

tableBody.innerHTML+=`
<tr>
<td>${student.name}</td>
<td>${student.college}</td>
<td>${student.email}</td>
<td>${student.phone}</td>
<td>${student.event}</td>
<td>
<button class="deleteBtn" onclick="deleteStudent(${index})">
Delete
</button>
</td>
</tr>
`;

});

}

function deleteStudent(index){
students.splice(index,1);
displayStudents();
}

search.addEventListener("keyup",function(){

let value=this.value.toLowerCase();

let rows=document.querySelectorAll("#tableBody tr");

rows.forEach(row=>{

let name=row.cells[0].innerText.toLowerCase();

row.style.display=name.includes(value)?"":"none";

});

});

