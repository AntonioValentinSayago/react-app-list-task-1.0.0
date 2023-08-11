const { inquireMenu, pausa, leerInput } = require('./helpers/inquirer');
const Tareas = require('./models/Tareas');
const Tarea = require('./models/tarea');

require('colors')

console.clear();

const main = async() => {

    let opt = ''
    const tareas = new Tareas();

    do {
        
        opt = await inquireMenu();

        switch (opt) {
            case '1':
                // Crear Opción
                const desc = await leerInput('Descripción: ');
                console.log(desc);

            break;
            case '2':
                console.log(tareas.__Listado);
            break;
        
        }

        await pausa();

    } while (opt != '0');
}


main();