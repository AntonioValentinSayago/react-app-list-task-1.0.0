import React, { useState, useEffect } from 'react'
import './App.css';
import FormularioTareas from './components/FormularioTareas';
import Header from './components/Header';
import ListaTareas from './components/ListaTareas';

const App = () => {

  // Todo - Obtenemos las tareas de localstorage
  const tareasGuardadas =
    localStorage.getItem('tareas') ?
      JSON.parse(localStorage.getItem('tareas')) : [];
  const [tareas, cambiarTareas] = useState(tareasGuardadas);

  // Todo- Estamos guardando el estado dentro de localStorage
  useEffect(() => {
    localStorage.setItem('tareas', JSON.stringify(tareas))
  }, [tareas])

  // ? Accedemos a localStorage y comprobamos si mostrarCompletadas es null
  let configMostrarCompletadas = '';
  if (localStorage.getItem('mostrarCompletadas') === null) {
    configMostrarCompletadas = true;
  }else{
    configMostrarCompletadas = localStorage.getItem('mostrarCompletadas') === true
  }

  const [mostrarCompletadas, cambiarMostrarCompletadas] = useState( configMostrarCompletadas )
  useEffect(() => {
    localStorage.setItem('mostrarCompletadas', mostrarCompletadas.toString())
  }, [mostrarCompletadas])

  return (
    <div className='contenedor'>
      <Header
        mostrarCompletadas={mostrarCompletadas}
        cambiarMostrarCompletadas={cambiarMostrarCompletadas}
      />
      <FormularioTareas tareas={tareas} cambiarTareas={cambiarTareas} />
      <ListaTareas
        tareas={tareas}
        cambiarTareas={cambiarTareas}
        mostrarCompletadas={mostrarCompletadas}
      />
    </div>
  );
}

export default App;
