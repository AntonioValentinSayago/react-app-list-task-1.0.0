const inquirer = require('inquirer');
require('colors')

const menuOpts = [
    {
        type: 'list',
        name: 'opcion',
        message: '¿Qué desea hacer?',
        choices: [
            {
                value: '1',
                name: '1. Crear Tarea'
            },
            {
                value: '2',
                name: '2. Listar Tarea'
            },
            {
                value: '3',
                name: '3. Listar Tarea Completada'
            },
            {
                value: '4',
                name: '4. Listar Tarea Pendientes'
            },
            {
                value: '5',
                name: '5. Completada tarea(S)'
            },
            {
                value: '6',
                name: '6. Borrar Tarea'
            },
            {
                value: '0',
                name: '0. Salir'
            },
        ]
    }
]

const inquireMenu = async () => {

    console.log('======================'.green);
    console.log(' Selecione una Opción');
    console.log('======================\n'.green);
    
    const {opt} = await inquirer.prompt(menuOpts)

    return opt;
}

const pausa = async() => {

    const question = [
        {
            type: 'input',
            name: 'enter',
            message: `Presione ${'ENTER'.green} para continuar`
        }
    ]
    console.log('\n');
    await inquirer.prompt(question)

}

module.exports = { inquireMenu, pausa }

