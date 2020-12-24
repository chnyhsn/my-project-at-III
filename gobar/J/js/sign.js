// error message
const email = document.getElementById('email');
const password = document.getElementById('password');
const errormsg = document.getElementById('errormsg');
const send = document.getElementById('send');
const err1 = document.getElementById('err1');
const err2 = document.getElementById('err2');
const singcardid = document.getElementById('singcardid');
// const email_re = /([\w\-]+\@[\w\-]+\.[\w\-]+)/;
send.addEventListener('click', () => {
  if (
    email.value === ''
        || password.value === ''

  ) {
    errormsg.innerHTML = '<i class="fas fa-exclamation-circle"></i> 資料填寫不完整';
    send.classList.add('send');
    singcardid.classList.add('singcalong');
  } else {
    errormsg.innerHTML = '';
    send.classList.remove('send');
    singcardid.classList.remove('singcalong');
  }

  if (email.value === '') {
    err1.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  } else {
    err1.innerHTML = '';
  }
  if (password.value === '') {
    err2.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  }
});
