const Tarea = require("./tarea");


class Tareas {

    __Listado = {};

    constructor() {

        this.__Listado = {};

    }

    crearTarea( desc = ''){
        
        const tarea = new Tarea( desc );
        this.__Listado[ tarea.id ] = tarea;

    }

}

module.exports = Tareas;