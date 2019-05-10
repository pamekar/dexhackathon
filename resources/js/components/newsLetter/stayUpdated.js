import React, { Component } from 'react'
import './stayUpdated.css';

class StayUpdated extends Component {
    constructor(props) {
        super(props)

    this.state= {
        value: ''
    }
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
}

    handleChange(e) {
        this.setState({
            value: e.target.value
        })
    }

    handleSubmit(e) {
        e.preventDefault()
        alert(this.state.value + ': submitted')
    }
  render() {
    return (
      <div className="newsletter-container">
      <div className="newsletter-grid">
        <h2> Stay Updated</h2> 
        <p> Get email from us to stay updated </p>
      </div>
 
        <div className="newsletter-grid">
        <form onSubmit={this.handleSubmit} className="newsletter-form">
            <input type="email" autoComplete="on" onChange={this.handleChange} value={this.state.value} 
            placeHolder="Sign up here"/>
            <input type="submit" value="Submit" />
        


        </form>
        </div>

      </div>
    )
  }
}

export default StayUpdated;
