require('colors')

const mostrarMenu = () => {
    console.log('======================'.green);
    console.log(' Selecione una Opción');
    console.log('======================\n'.green);

    console.log(`${'1.'.green} Crear una tarea`);
    console.log(`${'2.'.green} Listar Tareas`);
    console.log(`${'3.'.green} Listar tareas completadas`);
    console.log(`${'4.'.green} Listar tareas pendientes`);
    console.log(`${'5.'.green} Completar tarea(S)`);
    console.log(`${'6.'.green} Borrar tarea`);
    console.log(`${'0.'.green} Salir \n`);

    const readline = require('readline').createInterface({
        input: process.stdin,
        output: process.stdout
    })

    readline.question('Selecione una opción: ', (opt) => {
        console.log(opt);
        readline.close();
    })
    
}

const pausa = () => {

    const readline = require('readline').createInterface({
        input: process.stdin,
        output: process.stdout
    })
    
    readline.question(`\nPresione ${'ENTER'.green} para continuar\n`, (opt) => {
        readline.close();
    })

}


module.exports = {
    mostrarMenu,
    pausa
}