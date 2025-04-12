console.log("Well come my Ajax");

let fetchbtn = document.getElementById("fetchbtn");

fetchbtn.addEventListener("click", buttonClickHanler);
// mtlab agar es par click kara tu function par lain jain buttonclickHandler
function buttonClickHanler() {
  console.log(" you have click the btnbutton");
  //Instantiate  an xhr  object
  const xhr = new XMLHttpRequest();

  //   xhr.open("GET", "https://jsonplaceholder.typicode.com/todos/1", true);

  //now this is the post request method
  xhr.open("POST", "https://dummy.restapiexample.com/api/v1/create", true);
  xhr.getResponseHeader("Content-type", "application/json");

  //what to do on progresss  (optional)

  xhr.onprogress = function () {
    console.log("on progress");
  };
  //what to do  when  response  is  ready
  xhr.onload = function () {
    if (this.status == 200) {
      console.log(this.responseText);
    } else {
      console.log("some error occur");
    }
  };
  // send  the request

  params = `{"name":"test112","salary":"123","age":"23"}`;
  xhr.send(params);
  console.log("we are done!");
}

// https://dummy.restapiexample.com/api/v1/employees
// now workin on populate button
let popbtn = document.getElementById("popbtn");

popbtn.addEventListener("click", pophandler);

function pophandler() {
  console.log(" you have click the btnbutton");
  //Instantiate  an xhr  object
  const xhr = new XMLHttpRequest();

  //now this is the post request method
  xhr.open("GET", "https://dummy.restapiexample.com/api/v1/employees", true);

  //what to do  when  response  is  ready
  xhr.onload = function () {
    if (this.status == 200) {
      let obj = JSON.parse(this.responseText);
      console.log(obj);
      let list = document.getElementById("list");
      str = "";
      for (key in obj) {
        str += `<li>${obj[key].employee_name}</li>`;
      }
      list.innerHTML = str;
    } else {
      console.log("some error occur");
    }
  };
  // send  the request
  xhr.send();
  console.log("we are done! fetching the Employee Data");
}
