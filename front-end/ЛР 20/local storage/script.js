const form = document.getElementById('form_id');

     function getFormValue(event) {
    event.preventDefault();
    // поиск полей формы по селекторам
    const lastname = form.querySelector('[name="lastname"]'),
        name = form.querySelector('[name="name"]'),
        patronymic = form.querySelector('[name="patronymic"]'),
        job = form.querySelector('[name="job"]');
        email=form.querySelector('[name="mail"]');
        phone=form.querySelector('[name="phone_number"]');
        pasw=form.querySelector('[name="pasw"]');
        povtpasw=form.querySelector('[name="povtpasw"]');
        var printBlock = document.getElementById("printBlock");
        var language = event.target.value;

         const values = {
        lastname: lastname.value,
        name: name.value,
        patronymic:  patronymic.value,
        job:  job.value,
        email:  email.value,
        phone:  phone.value,
        pasw:  pasw.value,
        povtpasw:  povtpasw.value,
    };

    printBlock.textContent = "Вы ввели: " + lastname.value+" "+values.name+" "+values.patronymic+" "+values.job+" "+values.email+" "+values.phone+" "+values.pasw+" "+values.povtpasw;  

    if (job.value==0){
       alert('Поле Должность обязательно для заполнения');
        return false;
     }

localStorage.setItem('Фамилия', lastname.value);
localStorage.setItem('Имя', name.value);
localStorage.setItem('Работа', patronymic.value);
localStorage.setItem('Емайл', email.value);
localStorage.setItem('Телефон', phone.value);
localStorage.setItem('Пароль', pasw.value);
localStorage.setItem('Повторный пароль', povtpasw.value);


alert (localStorage.getItem('Имя'));
}

 form.addEventListener('submit', getFormValue);    