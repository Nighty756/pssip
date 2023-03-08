const bookbtn = document.querySelector('.date-form-btn');
 let datevalue1, datevalue2, date1, date2;
// function addLeadingZero(d){
//     return (d < 10) ? '0' + d : d;
// }

const calendar1 = new AirDatepicker('#airdatepicker1', { 
    position: 'top left',
  
    onSelect: ({date}) => {
        calendar2.update({
            minDate: date.setDate(date.getDate()+1),
     
        });
  

        calendar1.hide(new Date());
        // let Y1 = addLeadingZero(date.getFullYear());
        // let M1 = addLeadingZero(date.getMonth()+1);
        // let D1 = addLeadingZero(date.getDate());
        // // datevalue1 = Y1 + "-" + M1 + "-" + D1;
        // datevalue1 = `${Y1}/${M1}/${D1}`;
        
        // date1 = new Date(datevalue1);

    },

    minDate: new Date(),

});



const calendar2 = new AirDatepicker('#airdatepicker2', {
    position: 'top right',
    onSelect({date}) {
        calendar1.update({
            maxDate: date.setDate(date.getDate()-1),
         
        });
        calendar2.hide();
  
        // let Y = date.getFullYear();
        // let M = addLeadingZero(date.getMonth()+1);
        // let D = addLeadingZero(date.getDate());
        // datevalue2 = `${Y}/${M}/${D}`;
        // date2 = new Date(datevalue2);

    },
    minDate: new Date(),

});







