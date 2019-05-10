import React from 'react';
import ReactDOM from "react-dom";
import PropTypes from 'prop-types';
import './searchbar.css';
import axios from 'axios';
import {Consumer} from '../../context';




class SearchBar extends React.Component {
  constructor(props) {
    super(props)
  this.matchList = React.createRef();
  this.state = {
    search: '',
    
  }
}
/*
async componentDidMount() {
  const res = await fetch('./location.json');
  states = await res.json();



// FIlter states

  // Get matches to current text input
 const {search} = this.state;
 
  
  let matches = states.filter(state => {
   const regex = new RegExp(`^${search}`, 'gi');
   return state.name.match(regex) || state.abbr.match(regex);
   
  });

   // Clear when input or matches are emptyetTimeout(
 if (search.length === 0) {
  matches = [];
  const innerHTML = ReactDOM.findDOMNode(this.myRef).innerHTML;
  s
    ()=>(ReactDOM.findDOMNode(this.myRef).innerHTML= 'play'),
    1000
  );
  console.log(innerHTML);
  this.setState({
    dom: innerHTML
  });
 }


 console.log(matches)

}
// Show results in HTML
outputHtml = matches => {
  if (matches.length > 0) {
   const html = matches
    .map(
     match => `<div style={{backgroundColor: 'black'}}>
     <h4>${match.name} (${match.abbr}) 
     <span class="text-primary">${match.capital}</span></h4>
     <small>Lat: ${match.lat} / Long: ${match.long}</small>
    </div>`
    )
    .join('');
   this.matchList.current.innerHTML = html;
  }
 };
*/

//handle onchange method
handleChange = e =>{ 
 
  this.setState({
    [e.target.name]: e.target.value
    
  });
   
}
  //handle search method
  handleSearch= (dispatch, e) =>{
    e.preventDefault();
    const {search} = this.state
    axios.get(`http://localhost:8000/api/trips?filter[location]=${search}`)
    .then(res => {
      dispatch({
        type: 'SEARCH_TRIPS',
        payload: res.data
      });

      this.setState({ search: '' });
  
    })
    .catch(error => 
     console.log(error)
    );
  }

  
  render() {
  return (
    <Consumer>
        {value => {
          const { dispatch } = value;
          return(
    <div className="search-area">
    <form className="search" onSubmit={this.handleSearch.bind(this, dispatch)}>
    <input type="text"
     placeholder="Search for products.."
      id="search" 
      name="search" 
      value={this.state.search}
      onChange={this.handleChange}
                    />
    <button type="submit">Search</button>
</form>
<div ref={ref =>(this.myRef=ref)} id="match-list"></div>
</div>
          );
}}
</Consumer>
  );
  }
}

SearchBar.propTypes = {
  classes: PropTypes.object.isRequired,
};

export default SearchBar;