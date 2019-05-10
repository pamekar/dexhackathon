import React, { Component } from 'react'
import axios from 'axios';


const Context = React.createContext();

const reducer = (state, action) => {
    switch (action.type) {
      case 'SEARCH_TRIPS':
        return {
          ...state,
          trip: action.payload,
          heading: 'Search Results'
        };
      default:
        return state;
    }
  };

export class Provider extends Component {

    state = {
        trips: [],
        heading: 'Top Farmers',
        dispatch: action => this.setState(state => reducer(state, action))
      };
  

      componentDidMount() {
        axios
          .get(
            `http://localhost:8000/api/trips`
          )
          .then(res => {
            //console.log(res.data);
            this.setState({ trip: res.data});
          })
          .catch(err => console.log(err));
      }
    
  render() {
    return (
      <Context.Provider value={this.state}>
        {this.props.children}
      </Context.Provider>
    )
  }
}

export const Consumer = Context.Consumer;