"use strict"

function print_for() {
    let num = 1000;
    let i;
    for (i = 0; num >= 50; i++) {
        num = num / 2;
        console.log(`${i + 1}. ${num * 2} / 2 = ${num}`);
    }
    console.log(`Ответ: ${num}\nКоличество итераций: ${i}`);
}

print_for();