import React,  { Component }  from 'react'
import Paris from '../../paris.jpg';
import './topDestinations.css';





class TopDestinations extends Component {
    render() {
  return ( 
 
              <React.Fragment>
        <h3> Popular products around you</h3>
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
       
);
}
}
export default TopDestinations;
