let car = ['Bugatti', 'mercedes', 'G63'];
car.push("GT-MT-3"); //add value

console.log(car);

console.log(car[0]);
console.log(car[2]);

for (let c of car){
    console.log(c);
}

//associative array

let brand = {'name': 'suzi', 'year': '16y', 'profit': '200m.'};
console.log( 'profit is',brand.profit);

let student = {'name': 'krisna', 'class': '12th'};
// console.log(student);

for (let key in student)  {
    console.log(key + ':' + student[key]);
}

let carname  = {name: 'Bmw', model: 1969};
console.log(carname['name']);


let carmodel = {name: 'ferrari', model: 1998,}

let multidimansional = [
    ['name', 'ruhi'],
    ['age', 9],
    ['grade', '3th']
];

console.log(multidimansional[1][1])

multidimansional.pop();
multidimansional.push(['test', 90]);
multidimansional.unshift(['isuzu', 1999]);
multidimansional.shift();
multidimansional.splice(1,1, ['DHAN', 'DHAN']);


console.log(multidimansional);


const array  = [
    ['Dhan1', 'Dhan2'],
    ['Dhan3', 'Dhan4'],
    ['Dhan5', 'Dhan6'],
    ['Dhan7', 'Dhan8']
]

// console.log(array);


for (const data of array){
    console.log(data + ": " + array[data]);
}

var array1 = [
    ['Dhan01', 'Dhan02'],
    ['Dhan03', 'Dhan04'],
    ['Dhan05', 'Dhan06'],
    ['Dhan07', 'Dhan08']
]

for (var data in array1) {
    console.log(array1);
}

array1.forEach((value, index) => {
    console.log(index + ':' + value);
});

array.forEach(element => {
    console.log(element);
});

//loop

let j = 1;

// while (i <= 10) {
//     console.log(i);
//     i++;
// }

// do {
//     console.log(j);
//     j++;
// }
//     while( j < 0);
    
//     let i = 0;

// while ( i < 10) {
//     if (i == 5) { continue; }
//     console.log('numeric number' + ':' + i);
//     i++;
// }

for(let v = 0; v <= 10 ; v++){
    for(let m = 0; m <= v; m++){
        console.log('*');
    }
}