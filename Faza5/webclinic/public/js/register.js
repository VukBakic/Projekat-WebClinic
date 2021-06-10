document
  .getElementById('register-btn')
  .addEventListener('click', function (event) {
    event.preventDefault();

    let removeElem = document.getElementById('error_messages');
    if (removeElem) removeElem.remove();

    let form = document.querySelector('#register');
    let formData = new FormData(form);

    axios.post(form.action, formData).then(
      (response) => {
        let data = response.data;

        if (!data.success) {
          let htmlDiv = document.createElement('div');
          htmlDiv.id = 'error_messages';
          htmlDiv.classList.add('alert');
          htmlDiv.classList.add('alert-danger');
          htmlDiv.classList.add('text-start');

          htmlDiv.setAttribute('role', 'alert');
          let ul = document.createElement('ul');

          for (let [key, value] of Object.entries(data.errors)) {
            form[key].classList.add('invalid');
            let li = document.createElement('li');
            li.innerHTML = value;
            ul.appendChild(li);
          }
          htmlDiv.appendChild(ul);
          document.querySelector('.section-title').append(htmlDiv);
        } else {
          document.location.replace(document.location.origin + '/controlpanel');
        }
      },
      (error) => {
        console.log(error);
      }
    );
  });

document
  .getElementById('generatePass')
  .addEventListener('click', function (event) {
    event.preventDefault();
    let form = document.querySelector('#register');
    form.sifra.value = generateRandPassword();
  });

/*
let validateForm = () => {
  let form = document.querySelector('#register');

  if (!form.ime.value) form.ime.classList.add('required');
  if (!form.prezime.value) form.prezime.classList.add('required');
  if (!form.jmbg.value) form.jmbg.classList.add('required');
  if (!form.lk.value) form.lk.classList.add('required');
  if (!['m', 'z'].includes(form.pol.value)) form.pol.classList.add('required');
  if (!form.tel.value) form.tel.classList.add('required');
  if (!form.email.value) form.email.classList.add('required');
  if (!form.sifra.value) form.sifra.classList.add('required');
};*/

document.querySelector('#register').addEventListener('keyup', (event) => {
  if (event.isComposing || event.keyCode === 229) {
    return;
  }
  if (event.target.value) {
    if (event.target.classList.contains('invalid')) {
      event.target.classList.remove('invalid');
    }
  }
});
document.querySelector('#register').pol.addEventListener('change', (event) => {
  if (event.target.classList.contains('invalid')) {
    event.target.classList.remove('invalid');
  }
});

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
function replaceAt(string, index, char) {
  string = string.split('');
  string[index] = char;
  string = string.join('');
  return string;
}
function generateRandPassword() {
  let length = 12;
  let charset =
    'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  let specials = '#?!@$%^&*-';
  let retVal = '';

  for (let i = 0, n = charset.length; i < length; i++) {
    retVal += charset.charAt(getRandomInt(0, n));
  }
  let rnd = getRandomInt(0, length);

  retVal = replaceAt(
    retVal,
    rnd,
    specials.charAt(getRandomInt(0, specials.length))
  );

  retVal = replaceAt(
    retVal,
    (rnd + getRandomInt(1, 11)) % 12,
    charset.charAt(getRandomInt(26, 51))
  );

  return retVal;
}
