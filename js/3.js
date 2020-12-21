"use strict"

function print_some_numbers(i) {
    let string_final = '';
    for (let j = 0; j <= (10 - i); j++) {
        string_final = string_final + j + ((j < (10 - i)) ? ', ' : '');
    }

    console.log(string_final);
}


for (let i = 0; i <= 10; i++) {
    print_some_numbers(i);
}