
//Получение данных из форма и вывод их в всплывающее окно
// const isCheckboxOrRadio = type => ['checkbox', 'radio'].includes(type);

// const {form} = document.forms;

// function getFormValue(event) {
// event.preventDefault();

//     const data = {};

//     for (let field of form) {
//    const {name} = field;

//         if (name) {
//        const {type, checked, value} = field;

//             data[name] = isCheckboxOrRadio(type) ? checked : value;
//    }
// }
// console.log(data);
// }
// form.addEventListener('submit', getFormValue);
// -------------------------------------------------------------
//По простому
const form = document.getElementById('form');

     function getFormValue(event) {
    event.preventDefault();
    // поиск полей формы по селекторам
    const name = form.querySelector('[name="name"]'),
        age = form.querySelector('[name="age"]'),
        terms = form.querySelector('[name="terms"]'),
        plan = form.querySelector('[name="plan"]');
        email=form.querySelector('[name="mail"]');

         const values = {
        name: name.value,
        age: age.value,
        plan: plan.value,
        terms: terms.checked,
        email: email.value
    };

         alert(values.name);
         alert(values.age);
         alert(values.terms);
         alert(values.plan);
         alert(values.email);
      
}
function spisok(e){

   var printBlock = document.getElementById("printBlock");
    var language = e.target.value;
    printBlock.textContent = "Вы выбрали: " + language;
}
for (var i = 0; i < form.color.length; i++) {
   form.color[i].addEventListener("click", spisok);
  
}
 form.addEventListener('submit', getFormValue);    

const myname=45
localStorage.setItem('name', myname.toString())