const { inquireMenu, pausa } = require('./helpers/inquirer');

require('colors')

console.clear();

const main = async() => {

    let opt = ''

    do {
        
        opt = await inquireMenu();
        await pausa();

    } while (opt != '0');
}


main();