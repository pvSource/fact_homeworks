"use strict"
function print_while() {
    let num = 1000;
    let i = 0;
    while (num >= 50) {
        num = num / 2;
        i++;
        console.log(`${i}. ${num * 2} / 2 = ${num}`);
    }
    console.log(`Ответ: ${num}\nКоличество итераций: ${i}`);
}

print_while();