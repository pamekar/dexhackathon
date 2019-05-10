import React from 'react'
import './listGrid.css';
import Paris from '../../paris.jpg';


function ListGrid({name}) {
  

  
 
  return (
    <div className="list-grid">
      <div className="list-item">
          <img src={Paris} style={{width: 200, height: 250}} />
          <p>{name}</p>
        </div>
        </div>
      
      

  )
}


export default ListGrid;