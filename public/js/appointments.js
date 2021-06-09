let date = new Date();

let today = document.getElementById('today');

today.innerHTML += date.getDate() + "/";
today.innerHTML += date.getMonth()+1 + "/";
today.innerHTML += date.getFullYear();

function daysInMonth (month, year) {
  return new Date(year, month, 0).getDate();
}

function createMonth () {

  var actualDate = new Date();

  var firstofmonth = new Date(actualDate.getFullYear(), actualDate.getMonth(), 1);

  console.log(firstofmonth.getDay());
  let condition = firstofmonth.getDay() == 0 ? 6 : (firstofmonth.getDay() - 1)
  console.log(condition);

  let container = document.querySelector('.grid-container');

  for(i=1; i <= condition; i++) {
    let day = document.createElement('div');
    day.classList.add('grid-item');
    
    container.appendChild(day);
  }

  for (i=1 ; i <= daysInMonth(actualDate.getMonth(), actualDate.getFullYear()) ; i++) {
    let day = document.createElement('div');
    day.classList.add('grid-item');

    var dayDate = new Date(actualDate.getFullYear(), actualDate.getMonth(), i);

   

    day.innerHTML = i;
    let container = document.querySelector('.grid-container');
    container.appendChild(day);
  }

}

createMonth();
