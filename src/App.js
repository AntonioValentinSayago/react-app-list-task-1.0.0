import React, { useState } from 'react'
import './App.css';
import FormularioTareas from './components/FormularioTareas';
import Header from './components/Header';

const App = () => {

  const [tareas, cambiarTareas] = useState(
    [
      {
        id: 1,
        texto: 'Lavar la ropa',
        completada: false
      }
    ]
  )

  console.log(tareas)

  return (
    <div className='contenedor'>
      <Header />
      <FormularioTareas tareas={tareas} cambiarTareas={cambiarTareas} />
    </div>
  );
}

export default App;
