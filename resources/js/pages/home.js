import React, { Component } from 'react';
import NavBar from '../components/header';
import Banner from '../components/banner/banner';
import Packages from '../components/packages/packages';
import TopDestinations from '../components/topDestinations/topDestinations';
import Footer from '../components/footer/footer';



class Home extends Component {
  render() {
    return (
     
      
       
           <React.Fragment>
         
      <NavBar />
      <Banner/>
     
      <Packages />
      <TopDestinations />
      <Footer />
      </React.Fragment>
   
     
     

      
    );
  }
}

export default Home;