/* eslint-disable no-plusplus */
const monthOlympic = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
const monthNormal = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
const monthName = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
const weekArr = [
  { key: 'Sun', value: 'SUNDAY' },
  { key: 'Mon', value: 'MONDAY' },
  { key: 'Tue', value: 'TUESDAY' },
  { key: 'Wed', value: 'WEDNESDAY' },
  { key: 'Thu', value: 'THURSDAY' },
  { key: 'Fri', value: 'FRIDAY' },
  { key: 'Sat', value: 'SATURDAY' },
];

const holder = document.getElementById('days');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
const ctitle = document.getElementById('calendar-title');
const cyear = document.getElementById('calendar-year');

const years = document.getElementById('years');
const mon = document.getElementById('mon');
const dat = document.getElementById('dat');
const bigDate = document.getElementById('big-date');
const weekdays = document.getElementById('weekdays');
const gobar = document.getElementById('gobar');

const myDate = new Date();
let myYear = myDate.getFullYear();
let myMonth = myDate.getMonth();
const myDay = myDate.getDate();

const days = document.querySelector('#days');
const liInit = document.getElementsByClassName('li-init');

// 获取某年某月第一天是星期几
function dayStart(month, year) {
  const tmpDate = new Date(year, month, 1);
  return tmpDate.getDay();
}

// 计算某年是不是闰年，通过求年份除以4的余数即可
function daysMonth(month, year) {
  const tmp = (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
  if (tmp) {
    return monthOlympic[month];
  }
  return monthNormal[month];
}

function refreshDate() {
  let str = ' ';

  // 計算該月總天數
  const totalDay = daysMonth(myMonth, myYear);

  // 計算該月第一天是星期幾  // 0=星期日 1-6=星期一到六
  const firstDay = dayStart(myMonth, myYear);

  let myclass; // =undefine

  // date array init
  const dateArr = [];

  // first day
  for (let i = 0; i < totalDay + firstDay; i++) {
    if (firstDay === 0) {
      dateArr.push(i + 1);
    } else if (i < firstDay) {
      dateArr.push('');
    } else {
      dateArr.push(i - firstDay + 1);
    }
  }
  console.log('dateArr', dateArr);
  for (let i = 0; i < dateArr.length; i++) {
    if (
      (dateArr[i] < myDay && myYear === myDate.getFullYear() && myMonth === myDate.getMonth())
      || myYear < myDate.getFullYear()
      || (myYear === myDate.getFullYear() && myMonth < myDate.getMonth())
    ) {
      myclass = " class='lightgrey li-init disable-click'"; // 在今天之前的日期，以淺灰色字體顯示
    } else if (dateArr[i] === myDay && myYear === myDate.getFullYear() && myMonth === myDate.getMonth()) {
      console.log('myDay', myDay);
      myclass = " class='white orangebox li-init'"; // 當天日期以橘色背景顯示
    } else {
      myclass = " class='white li-init'"; // 在今天之後的日期，以白色字體顯示
    }

    // 日期自動換行
    str += `<div class="date-init">
              <li${myclass}>${dateArr[i]}</li>
            </div>`;
  }

  // 日期初始化
  let weekText = '';
  const weekInit = new Date(myYear, myMonth, myDay);
  weekText = String(weekInit).substr(0, 3);
  // console.log(String(weekInit));

  for (let i = 0; i < weekArr.length; i++) {
    if (weekText === weekArr[i].key) {
      weekdays.innerHTML = weekArr[i].value;
    }
  }

  // 選到的日期會有橘色背景
  days.addEventListener('click', (e) => {
    for (let i = 0; i < liInit.length; i++) {
      if ((e.target.innerText === liInit[i].innerHTML
          && myYear === myDate.getFullYear()
          && myMonth === myDate.getMonth()
          && e.target.innerText >= myDay)
          || (e.target.innerText === liInit[i].innerHTML
            && myYear >= myDate.getFullYear()
            && myMonth > myDate.getMonth()
            && e.target.innerText)
          || (e.target.innerText === liInit[i].innerHTML
            && myYear > myDate.getFullYear()
            && myMonth <= myDate.getMonth()
            && e.target.innerText)) {
        liInit[i].classList.add('orangebox');
      } else {
        liInit[i].classList.remove('orangebox');
      }
    }

    const selectedWeek = new Date(myYear, myMonth, e.target.innerText);
    weekText = String(selectedWeek).substr(0, 3);

    // 判斷選中的日期是星期幾
    for (let i = 0; i < weekArr.length; i++) {
      if (weekText === weekArr[i].key) {
        weekdays.innerHTML = weekArr[i].value;
      }
    }

    // 方框內日期顯示
    if ((myYear === myDate.getFullYear()
        && myMonth === myDate.getMonth()
        && e.target.innerText < myDay)
        || myYear < myDate.getFullYear()
        || (myYear === myDate.getFullYear() && myMonth < myDate.getMonth())
    ) {
      dat.innerHTML = '';
      bigDate.innerHTML = '';
      weekdays.innerHTML = '';
    } else {
      dat.innerHTML = e.target.innerText;
      bigDate.innerHTML = e.target.innerText;
    }
  });

  holder.innerHTML = str; // 设置日期显示
  ctitle.innerHTML = monthName[myMonth]; // 设置英文月份显示
  cyear.innerHTML = myYear; // 设置年份显示
  // 方框內日期顯示
  mon.innerHTML = monthName[myMonth];
  dat.innerHTML = myDay;
  years.innerHTML = myYear;
  // 橘色內的巨大日期
  bigDate.innerHTML = myDay;
}

refreshDate(); // 執行該函数

// 0=1月,1=2月...
prev.onclick = (e) => {
  e.preventDefault();
  myMonth--;
  if (myMonth < 0) {
    myYear--;
    myMonth = 11;
  }
  refreshDate();
  dat.innerHTML = '';
  weekdays.innerHTML = '';
  bigDate.innerHTML = '';
};
next.onclick = (e) => {
  e.preventDefault();
  myMonth++;
  if (myMonth > 11) {
    myYear++;
    myMonth = 0;
  }
  refreshDate();
  dat.innerHTML = '';
  weekdays.innerHTML = '';
  bigDate.innerHTML = '';
};

// if (dat.innerHTML === '') {
//   gobar.classList.remove('gobar');
//   gobar.classList.add('gobar2');
// }
