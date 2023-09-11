import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faEyeSlash } from '@fortawesome/free-solid-svg-icons';

const Header = () => {
  return (
    <header className='header'>
      <h1 className='header__titulo'> Lista de Tareas</h1>
      <button className='header__boton'>
        No Mostrar Completadas
        <FontAwesomeIcon icon={faEyeSlash} className='header__icono-boton' />
      </button>
    </header>
  )
}

export default Header;