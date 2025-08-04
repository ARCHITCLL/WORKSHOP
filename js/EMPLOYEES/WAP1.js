//WAP to create an array of 10 employees where employee have their joining date, salary, leaving date.

<script>
const employee=[
    {name:"Archit",joining:"05-01-2012",Salary:20000,TDate:null},
    {name:"Anand",joining:"05-11-2022",Salary:40000,TDate:null},
    {name:"Vivek",joining:"23-03-2012",Salary:76000,TDate:null},
    {name:"Harshit",joining:"05-01-2012",Salary:20000,TDate:null},
    {name:"Abhishek",joining:"05-01-2012",Salary:20000,TDate:null},
    {name:"Help",joining:"05-01-2012",Salary:20000,TDate:"15-01-2020"},
    {name:"IWANTtotakeREST",joining:"05-01-2012",Salary:20000,TDate:"05-04-2012"},
    {name:"Ninth",joining:"05-01-2012",Salary:20000,TDate:"09-09-2019"},
    {name:"WhyrVstilworkin",joining:"05-01-2012",Salary:20000,TDate:null}
];

const tbody= document.querySelector("#empTable tbody");

function displayEmployees(empList){
    tbody=inner.HTML="";
    empList.forEach(emp=>{
        <td>${emp.name}</td>
        <td>${emp.joining}</td>
        <td>${emp.Salary}</td>
        <td>$emp.TDate ? emp.TDate : "Still Working"}</td>
        </tr>;
        tbody.innerHTML +=row;
    })
}

function showAll(){
    displayEmployees(employee);
}

function showleft(){
    const leftEmployees = employee.filter(emp => emp.TDate !== null);
    displayEmployees(leftEmployees);
}

showALl();

</script>