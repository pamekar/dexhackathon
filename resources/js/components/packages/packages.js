import React, {Component} from 'react'
import Paris from '../../paris.jpg';
import './packages.css';
import {Consumer} from '../../context';
import ListGrid from '../listGrid/list-grid';




class Packages extends Component {
  render() { 
  return (

    <Consumer>
       {value => {
          const { trip, heading } = value;
          if (heading === 'Top Farmers') {
            return (
              <React.Fragment>
              <h3> {heading}</h3>
            <div className="grid-container" >

            <div className="grid-item">
              <img src={Paris} style={{width: 200, height: 250}} />
            </div>
            <div className="grid-item">
              <img src={Paris} style={{width: 200, height: 250}} />
            </div>
            <div className="grid-item">
              <img src={Paris} style={{width: 200, height: 250}} />
            </div>
            <div className="grid-item">
              <img src={Paris} style={{width: 200, height: 250}} />
            </div>
            </div>
            </React.Fragment>
        
            )
          } else if (heading === 'Search Results') {
            return (
 
              <React.Fragment>
    
    
        <h3> {heading}</h3>
        {trip.map(item =>
        <ListGrid key={item.id} name={item.name}/>
        )}
    </React.Fragment>
            )
          }
  }}
   </Consumer>
  )
}
}
export default Packages;
   

