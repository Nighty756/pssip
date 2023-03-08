// Наследование 
class Person{
    constructor(name, age){
        this.name = name;
        this.age = age;
    }
    print(){
        console.log(`Name: ${this.name}  Age: ${this.age}`);
    }
}
class Employee extends Person{
     
    constructor(name, age, company){
        super(name, age);
        this.company = company;
    }
    print(){
        super.print();
        console.log(`Company: ${this.company}`);
    }
    work(){
        console.log(`${this.name} works in ${this.company}`);
    }
}
const sam = new Employee("Sam", 25, "Google");
sam.print();    // Name: Sam  Age: 25
                // Company: Google

//Инкапсуляция
class Person2{
#ageValue = 1;
constructor(name, age){
this.name = name;
 this.age = age;
}
set age(value){
console.log(`Передано ${value}`);
if(value>0 && value < 110) this.#ageValue = value;
}
get age(){
return this.#ageValue;
}
}
const tom = new Person2 ("Tom", 37);
console.log(tom.age); //37
tom.age = -15;
console.log(tom.age); //37

//Полиморфизм
class Human {
    constructor(name) {
      this.name = name;
    }
  
    say() {
        console.log( `Hello, my name is ${this.name}, I like coding`);
    }
  }
  
  class Men extends Human {
    constructor(name) {
      super(name)
    }
    // Берем метод say у родителя.
  }
  
  class Coder extends Human {
    constructor(name) {
      super(name)
    }
  
    say() {
      // Переопределяем метод родителя say для отображения нового значения.
      console.log( `Hello, my name is ${this.name}, I like walking`);
    }
  }
  
  const alex = new Men('Alex');
  const leo = new Coder('Leo');
  
  alex.say() // "Hello, my name is Alex, I like travelling"
  leo.say() // "Hello, my name is Leo, I like coding"